import smartpy as sp
#Both buyer and seller must send in twice the value of the item they are transacting on. This ensures that both parties are committed to see the transaction through to the end.
class Escrow(sp.Contract):
    def __init__(self):
        self.init(seller = sp.none, buyer = sp.none, price = 0)
    @sp.entry_point
    def setSeller(self, params):
        #ensure seller hasn't already been set
        sp.verify (~self.data.seller.is_some())
        self.data.price = params.price
        self.data.seller = sp.some(sp.sender)
    @sp.entry_point
    def setBuyer(self, params):
        #ensure that there already is a seller
        sp.verify (self.data.seller.is_some())
        #ensure buyer hasnt already been set
        sp.verify (~self.data.buyer.is_some())
        
        sp.verify (sp.amount == sp.tez(self.data.price * 2))
        self.data.buyer = sp.some(sp.sender)
        
    @sp.entry_point
    def confirmReceived(self, params):
        sp.verify (sp.sender == self.data.buyer.open_some())
        sp.send (self.data.buyer.open_some(), sp.tez(self.data.price))
        sp.send (self.data.seller.open_some(), sp.balance)
        self.resetContract()
    @sp.entry_point
    def refundBuyer(self, params):
        sp.verify (sp.sender == self.data.seller.open_some())
        sp.send (self.data.buyer.open_some(), sp.tez(2 * self.data.price))
        sp.send (self.data.seller.open_some(), sp.balance)
        self.resetContract()
        
    #clear out buyer and seller
    def resetContract(self):
        self.data.buyer = sp.none
        self.data.seller = sp.none
        self.data.price = 0
        
@sp.add_test(name = "Test Escrow")
def testEscrow():
    html = sp.test_scenario()
    
    html.h1("Escrow Cont")
    seller = sp.test_account("seller")
    buyer = sp.test_account("buyer")
    
    myContract = Escrow()
     #set the seller and price
    html += myContract
    
    html += myContract.setSeller(price = 1).run(sender = seller)
     #set the buyer
    html += myContract.setBuyer().run(sender = buyer, amount = sp.tez(2))
    # buyer confirms they received item 
    html += myContract.confirmReceived().run(sender = buyer)
  
     # seller decides to refund buyer
     # html += myContract.refundBuyer().run(sp.address(seller)).html()
  

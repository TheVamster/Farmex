# Problem

There are approximately 450–500 million smallholder farmers, or those who work small plots of land for subsistence and to harvest a couple of cash crops. These farmers make up roughly 90% of the world’s farms, and they are the primary example of why better payment systems are needed for small-time farmers in hyper-rural areas making little to no profit from their farms. Small-time farmers’ financial hardships and rural life are exacerbated by yield uncertainty due to unpredictable changes in weather and pest infestations, and studies have shown that these conditions put unsustainable levels of stress on the rural farming population. Depending on the study, farmers may be twice as likely to commit suicide as non-farmers, with an approximate rate of 30 suicides per 100,000 compared with 10 per 100000 for the rest of the population. These figures cannot be separated from economic insecurity, and are a compelling reason why establishing more consistent, faster payment for smallholder farmers across the globe is critical. With blockchain, the agricultural finance process becomes more transparent and fair, yet enables shared fair control accessibility.

# Solution

We made this possible by deploying our contract, and making use of the powerful Tezos chain and made use of an escrow contract to act as p2p between buyers and farmers and thus eliminating middlemen, in a way in which this app could be trusted by buyers. We also made use of the cryptocurrency Tez(XTZ) as our main payment method (We assume that all the Tez accounts are activated and revealed in the first place) instead of the traditional NetBanking method to save the farmers from the unavoidable exorbitant cuts which are often more than they can afford. Tezos Blockchain ensures transparency and justice for the farmers. We made use of the Cryptonomic Stack for our benefit by using conseilJS to communicate with the tezos blockchain for transferring Tez and checking out the status of the Transactions using the Arronax explorer.

# How we built it

We started with setting up the basic farmer and buyer UI, with an aim to establish a direct peer to peer contact between them by enabling payments through tezos. For payments, we made use of a test tezos faucet to demonstrate the working of it. We were able to get a keystore containing test values for email, password , pkh etc, and we used these parameters to call the transaction function of coseiljs, to successfully transfer the mentioned microtez to the receiver (farmers in our case). We made use of the Cryptonomic Stack for our benefit by using conseilJS to communicate with the tezos blockchain for transferring Tez and checking out the status of the Transactions using the Arronax explorer.

## Frontend:
React js to drive the design, HTML , CSS for beautification.
Conseiljs to connect between frontend which was developed using ReactJS and dapp developed using SmartPy.

## Backend:
Have two tables for buyers and sellers with respective attributes.

## Farmer Userflow:
Farmers should login if they haven’t(Id would be their tezos address)
They should also give their personal details like address ph no.
They should fill out the details of the product that they are gonna sell on this dapp That includes the name, description,quantity available,and the price.

## Buyer Userflow:
Buyers should also login with blockchain address
They should give their address,Ph no.
Buyers can explore the dapp and select the product they wish to buy and can transfer the money in tezos using the payment mechanism that has been set up using conseil js.

##Dapp:
Created a Escrow Smart Contact for the users to trust our applications (The Buyer sends the money, the money gets stored in the verifier account and after the buyer notifies the verifier that the product has been delivered safely and successfully the sellers gets the money for that product they sold else the money goes back to the buyer).

# Steps to run the project

## For the client side
1) Go into the React folder
2) Install all the dependencies by opening a cmd/terminal and running the comand `npm install` (npm is required).
3) After successful installation run `npm start` which will automatically open the application on your browser.
4) You will be able to view the Tezos farmer's marketplace , and you will be able to execute a tezos transaction on the transaction.js page. (React -> src -> components -> Transaction.js)
## For the backend
1) Go into the backend folder which can be found inside the react folder
2) Install all the dependencies by opening a cmd/terminal and running the comand `npm install` (npm is required).
3) Paste your MongoDB Cloud atlas URI for node version 2.2.12 and above in the .env file present in that folder.
4) Run `node server.js`

# Thank You for spending your time with our project with regards The ₿oys
**Note:**
* Please go to our submission on devfolio for the video of the working demo of our app.
* We developed individual html pages for other dashboards and features but couldn't combine all the pages into React Components at the last moment. But we believe that we have managed to complete the basic UI pages and have also implement the transaction which we believe is enough to convey our idea effectively.
* We developed also a the escrow smart contact which we did not use in our dapp as we established an alternative payment mechanism. You can test the smart contact by going to `smartpy.io` and pasting our code which is present in the root folder
* To simply test the transaction feature you can go to `http://localhost:3000/transaction` in  your browser after starting the react app.


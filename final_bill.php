<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Purchase | Farmex</title>
        <meta charset ="utf-8"/>
        <style type = "text/css">
            td, th, table {
                border: thin solid lightblue;
                
            }
            <? echo ‘<link href=”bill.css”  media="" >’ ?>
            
            
        </style>
    </head>

    <body>
        <?php

            //get form data values
            $tomato = $_POST["tomato"];
            $potato = $_POST["potato"];
            $cauliflower = $_POST["cauliflower"];
            $onion = $_POST["onion"];
            $cabbage = $_POST["cabbage"];
            $username = $_POST["username"];
            $userhash = $_POST["userhash"];

            //if any value is blank, set to zero
            if ($tomato == "") $tomato =0;
            if ($potato == "") $potato =0;
            if ($cauliflower == "") $cauliflower =0;
            if ($onion == "") $onion =0;
            if ($cabbage == "") $cabbage =0;

            //compute cost
            $tomato_cost = 45 * $tomato;
            $potato_cost = 35 * $potato;
            $cauliflower_cost = 40 * $cauliflower;
            $cabbage_cost = 19 * $cabbage;
            $onion_cost = 49 * $onion;
            $total_cost = $tomato_cost + $potato_cost + $cabbage_cost + $cauliflower_cost + $onion_cost;
            $total_items = $tomato + $potato + $onion + $cauliflower + $cabbage;
            $tax = 5/100 * $total_cost;
            $costplustax = $total_cost + $tax;
        ?>
        
        <h4> FARMEX - FRESH FROM THE FARM </h4>

        <?php
            print ("Customer Name: $username <br/>User Hash: $userhash ");
            
        ?>
        <p/> <p/>
        <table>
            <caption>
                ORDER INFORMATION
            </caption>

            <tr>
                <th> Product </th>
                <th> Unit Price </th>
                <th> Quantity Ordered </th>
                <th> Item Cost </th>
            </tr>
                
            <tr>
                <td> Tomato </td>
                <td> ₹45.00 </td>
                <td> <?php print("$tomato"); ?> </td>
                <td> <?php printf("₹ %4.2f", $tomato_cost); ?></td>
            </tr>
            <tr>
                <td> Potato </td>
                <td> ₹35.00 </td>
                <td> <?php print("$potato"); ?> </td>
                <td> <?php printf("₹ %4.2f", $potato_cost); ?></td>
            </tr>
            <tr>
                <td> Onions </td>
                <td> ₹49.00 </td>
                <td> <?php print("$onion"); ?> </td>
                <td> <?php printf("₹ %4.2f", $onion_cost); ?></td>
            </tr>
            <tr>
                <td> Cauliflower </td>
                <td> ₹40.00 </td>
                <td> <?php print("$cauliflower"); ?> </td>
                <td> <?php printf("₹ %4.2f", $cauliflower_cost); ?></td>
            </tr>
            <tr>
                <td> Cabbage </td>
                <td> ₹19.00 </td>
                <td> <?php print("$cabbage"); ?> </td>
                <td> <?php printf("₹ %4.2f", $cabbage_cost); ?></td>
            </tr>
        </table>

        <p/> <p/>

        <?php
            print ("Total items: $total_items <br/>");
            print ("Total Cost: ₹$total_cost <br/>");
            printf ("GST on total (5%): ₹$tax <br/>"); 
            printf ("Your total bill is:₹ %3.2f <br/>", $costplustax); 
            print ("THANK YOU, VISIT AGAIN");
            
        ?>

        
    </body>
</html>

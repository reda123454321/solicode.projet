<?php

//fgets(STDIN)
$product="Gaming Keyboard";
$price=250;
$quantity=5;
$payment="bank";
$final_price=0;
$taxrate=0; 
$amount=0;

switch($payment){
    case "paypal":
    case "bank":
        $final_price=$quantity*$price;
        switch(true){
            case $final_price>=1000:
                $amount=$final_price*0.15;
                $final_price-=$amount;
                $taxrate=$final_price*0.20;
                $final_price+=$taxrate;
                break;


            default:
              $amount=$final_price*0.10;
              $final_price-=$amount;
              $taxrate=$final_price*0.20;
              $final_price+=$taxrate;
              break;
        }
        print_r("Product :\t".$product."<br>");
        print_r("Price :\t".$price."<br>");
        print_r("Quantity :\t".$quantity."<br>");
        print_r("Payment :\t".$payment."<br>");
        print_r("Amount :\t-".$amount."<br>");
        print_r("Tax :\t".$taxrate."<br>");
        print_r("Price total :\t".$final_price."MAD <br>");
        break;

    case "cash":
    case "card":
        $final_price=$quantity*$price;
        $taxrate=$final_price*0.20;
        $final_price+=$taxrate;
        print_r("Product :\t".$product."<br>");
        print_r("Price :\t".$price."<br>");
        print_r("Quantity :\t".$quantity."<br>");
        print_r("Payment :\t".$payment."<br>");
        print_r("Tax :\t".$taxrate."<br>");
        print_r("Price total :\t".$final_price."MAD <br>");
        break;

    default:
    print("Invalid payment method");

        
}
?>
<?php
$product = "Gaming Mouse";
$price = 250;
$quantity = 3;
$clientAge = 19;
$isMember = true;
$total=$price * $quantity;
$final_price=0;

if($total>=700){
    $discount=$total*0.25;
    $final_price=$total-$discount;
}
else if($total>=500){
    $discount=$total*0.20;
    $final_price=$total-$discount;
}
else if($total>=300){
    $discount=$total*0.15;
    $final_price=$total-$discount;
}
else{
    $discount=0;
    $final_price=$total-$discount;
}
if($clientAge>=18 && $isMember===true){
    echo "VIP CUSTOMER :"."<br>";
}
if($isMember || $total>=500){
    echo "SPECIAL OFFER AVAILALE :"."<br>";
}
else{
    echo "NO SPECIAL OFFER :"."<br>";
}

echo "Product :".$product."<br>";
echo "Price :".$price."<br>";
echo "Quantity :".$quantity."<br>";
echo "Discount :".$discount."<br>";
echo "Final price :".$final_price;

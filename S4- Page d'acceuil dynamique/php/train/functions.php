<?php
print_r("1. Mouse - 250 MAD \n");
print_r("2. KeyBoard - 450 MAD \n");
print_r("3. Monitor - 1200 MAD \n");
print_r("4. HeadPhones - 150 MAD \n");
$products=[
    "Mouse" => 250,
    "Keyboard" => 450,
    "Monitor" => 1200,
    "Headphones" => 150
];
$amount=0;
$taxrate=0;
$total_price=0;
$found=false;
function input(){
    return trim(fgets(STDIN));
}

print_r("Enter your name :");
$user_name=input();
print_r("Welcome,\t".$user_name. "\n");
print_r("Enter the product :\n");
$user_product=input();
print_r("Enter the quantity :\n");
$user_quantity=input();

foreach($products as $product => $price){
    if(strcasecmp($user_product, $product)===0){
         switch(true){
                case $price>=500:
                    $total_price=$user_quantity*$price;
                    $amount=$total_price*0.25;
                    $total_price-=$amount;
                    $taxrate=$price*0.10;
                    $total_price+=$taxrate;
                    print_r("Premium product \n");
                    $found=true;
                    break;

                case $price<500:
                    $total_price=$user_quantity*$price;
                    $taxrate=$price*0.10;
                    $total_price+=$taxrate;
                    print_r("Standart product");
                    $found=true;
                    break;
    }       
    }
        if($found===true){
            print_r("Product :\t".$product. "\n");
            print_r("Price :\t".$price. "MAD \n");
            print_r("Quantity :\t".$user_quantity. "\n");
            print_r("Taxes :\t".$taxrate. "\n");
            print_r("Amount :\t".$amount. "\n");
            print_r("Total price :\t".$total_price. "MAD");
            break;
        }
        else if($found===false){
            print_r("Product not found");
        }
    }
?>

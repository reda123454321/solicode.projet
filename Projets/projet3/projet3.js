let products=document.querySelectorAll(".product")
products.forEach(function(products){
    let quantity=0;
    let quantity_plus=products.querySelector(".quantityplus");
    let quantity_moins=products.querySelector(".quantitymoins");
    let message=products.querySelector(".message")
    message.textContent="Quantity = "+quantity

    quantity_plus.addEventListener("click", function(){
        if(quantity>=10){
            message.textContent="Max of Quantity"
        }
        else{
        quantity++
        message.textContent="Quantity = "+quantity
        }
    });

    quantity_moins.addEventListener("click", function(){
        if(quantity<=0){
            message.textContent="Quantity = "+quantity
        }
        else{
            quantity--;
            message.textContent="Quantity = "+quantity
        }
    })

    

})
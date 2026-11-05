let cards=document.querySelectorAll(".card");
cards.forEach(function(card){
    let buttonplus=card.querySelector(".buttonplus");
    let buttonmoins=card.querySelector(".buttonmoins");
    let message=card.querySelector(".message");
    let quantity=0;
    message.style.color="black"
    message.textContent="Quantity = "+quantity;

    buttonplus.addEventListener("click", function(){
        if(quantity>=10){
           message.style.color="red"
            message.textContent="Max quantity";
        }
        else{
            message.style.color="green"
            quantity++
            message.textContent="Quantity = "+quantity
        }
    })
    buttonmoins.addEventListener("click", function(){
        if(quantity<=0){
            message.textContent="Quantity = "+quantity;
        }
        else{
            quantity--;
            message.textContent="Quantity = "+quantity;
        }
    })
})
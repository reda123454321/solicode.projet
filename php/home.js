let situations=document.querySelectorAll(".situation");
situations.forEach(situation => {
    if(situation.textContent==="Approved"){
        situation.style.background = "green";
        situation.style.boxShadow = "0 0 15px green";
    }
    else if(situation.textContent==="Pending"){
        situation.style.background = "yellow";
        situation.style.boxShadow = "0 0 15px yellow";
    }
    else if(situation.textContent==="In Progress"){
        situation.style.background = "orange";
        situation.style.boxShadow = "0 0 15px orange";
    }
    else if(situation.textContent==="Rejected"){
        situation.style.background = "red";
        situation.style.boxShadow = "0 0 15px red";
    }
});
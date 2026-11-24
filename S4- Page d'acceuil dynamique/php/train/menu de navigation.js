let button=document.getElementById("button");
let navigation=document.getElementById("nav");
navigation.style.visibility="hidden";
navigation.style.opacity="0";
button.addEventListener("click", function(){
    if(navigation.style.visibility==="hidden" && navigation.style.opacity==="0"){
        navigation.style.visibility="visible";
        navigation.style.opacity="1";
        let animation=navigation.animate(
            [
                {transform:"translateX(-100%)"},
                {transform:"translateX(0)"}
            ],
            {
                duration:0.5*10**3,
                easing:"linear"
            }
        );   
    }
    else if(navigation.style.visibility==="visible" && navigation.style.opacity==="1"){
        let animation=navigation.animate(
            [
                {transform:"translateX(0)"},
                {transform:"translateX(-100%)"}
            ],
            {
                duration:0.5*10**3,
                easing:"linear"
            }
            
        );
        animation.onfinish=function(){
            navigation.style.visibility="hidden";
            navigation.style.opacity="0"
        }
    }
    }
);


let button = document.getElementById("menu");
let navigation = document.querySelector(".nav");

navigation.style.visibility = "hidden";
navigation.style.opacity = "0";

button.addEventListener("click", function () {

    if (
        navigation.style.visibility === "hidden" &&
        navigation.style.opacity === "0"
    ) {

        navigation.style.visibility = "visible";
        navigation.style.opacity = "1";

        navigation.animate(
            [
                { transform: "translateX(-100%)" },
                { transform: "translateX(0)" }
            ],
            {
                duration: 400,
                easing: "ease"
            }
        );

    } else {

        navigation.style.visibility = "hidden";
        navigation.style.opacity = "0";

    }

});

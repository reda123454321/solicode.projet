// >= 16 → “Très bien”
// >= 10 → “Validé”
// < 10 → “Non validé”


const input=require("prompt-sync")()
console.log("quel votre note")
let note=Number(input(">"))
if (note>=16){
    console.log("trés bien")
}else if(note>=10){
    console.log("validée")
}else{
    console.log("Non validée")
}


   //EXERCISE 1:
// < 10 → “Froid”
// < 25 → “Doux”
// >= 25 → “Chaud”

const input=require("prompt-sync")()

let tamp=Number(input("Enter temerature :"));
if (tamp<10){
    console.log("froid")
}else if (tamp<25){
    console.log("doux")
}else{
    console.log("chaud")
}
-------------------------------------
    //EXERCISSE 2:
  
  let note=14;
let presence=90;

if (note>=10 && presence>=80){
    console.log("validée")
}else{
    console.log("Non Validée")
}
---------------------------------------

  //EXERCISSE 3
//  >= 16 → "Très bien"
// >= 10 → “Validé
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



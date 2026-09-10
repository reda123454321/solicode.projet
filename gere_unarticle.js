const prompt = require("prompt-sync")();
let order_name = prompt("please, enter order name : ")
let price = prompt("how mush is it ?")
let quantite = prompt("how many order do you buy ?")

let total = price*quantite

console.log("ORDER NAME :" , order_name)
console.log("PRICE : " , price)
console.log("QUANTITE : " , quantite)
//node gere_unarticle.js

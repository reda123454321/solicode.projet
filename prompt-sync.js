const prompt = require("prompt-sync")()


let name = prompt("what is your name?")
let last_name = prompt("what is your last name?")
let age = prompt("how old are you?")
let school = prompt("school ?")

console.log("NAME : ", name)
console.log("LAST NAME : ", last_name)
console.log("AGE : ", age)
console.log("SCHOOL : ", school)

console.log("THANK YOU ",name, "!")
//npm install prompt-sync
//node prompt-sync.js

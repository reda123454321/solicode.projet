
let age=19
let reda=true
let hascard=true

let entree=(reda==true && hascard==true && age==19)
console.log(entree)

let nonentree=(reda==false && hascard==false && age>20)
console.log(nonentree)

let nonentree2=(reda!==false && hascard!==false && age!==19)
console.log(nonentree2)

let entre2=(reda===false || hascard===true || age<19)
console.log(entre2)

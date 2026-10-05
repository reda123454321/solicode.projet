    //exercise 1:

for (i=1; i<=20; i++){
    if(i % 2===0){
        console.log(i)
    }

}
--------------------------------
    //exercise 2:
    let some=0;
for(let i=1; i<=10; i++){
    if(i%2===0){
    console.log(i)
    some=some+i
}
    
}console.log(some)
--------------------------------
  //exercise 3:
//pair===ra9m zawji
//impair===ra9m fardi
    let compteur_pair=0;
let compteur_impair=0
let some=0;
let some2=0
for(let i=1; i<=20; i++){
    if(i %2 ===0){
        console.log(i, "par")
        compteur_pair++
         some=some+i
    }else{
        console.log(i,"impair")
        compteur_impair++
       some2=some+i
    }
    
    
}console.log("pair :", compteur_pair)
console.log("impair :", compteur_impair)
console.log("some impair:", some)
console.log("some pair :", some2)

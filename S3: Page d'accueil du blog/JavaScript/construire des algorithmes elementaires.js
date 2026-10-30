const input=require("prompt-sync")()
let numbers=[1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
//           0  1  2  3  4  5  6  7  8  9
let position
let min=numbers[0]
let max=numbers[0]

 let search=Number(input("ENTER A NUMBER BETWEEN 1-10 : "))

 for(let i=0; i<numbers.length; i++){
    if(search===numbers[i]){
        position=i
    }if(numbers[i]>max){
        max=numbers[i]
    }if(numbers[i]<min){
        min=numbers[i]
    }
 }

 console.log("INDEX NUM :", position)
 console.log("MAX NUM :", max)
 console.log("MIN NUM", min)

let numbers = [4, 12, 7, 12, 15, 4, 20, 15, 12];
for(let i=0; i<numbers.length; i++){
    if(numbers.length>=10 && numbers.indexOf(numbers[i])){
        let compteur=0
        for(let a=0; a<numbers.length; a++){
            if(numbers[i]===numbers[a]){
                compteur++
            }
        }console.log(numbers[i], compteur)
    }}

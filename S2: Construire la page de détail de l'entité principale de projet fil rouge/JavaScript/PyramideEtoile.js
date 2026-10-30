
// for
for(let lignes=1; lignes<=15; lignes++){
    let text=""
    for(let spaces=1; spaces<=15-lignes; spaces++){
        text=text+ " ";
    }
    for(let etoile=1; etoile<=(2*lignes)-1; etoile++){
        text=text + "*"
    }
    console.log(text)

}

// while

let lignes=1
while(lignes<=6){
    lignes++
    let texte=""
    let space=1
    while(space<=15-lignes){
       space++;
        texte=texte+ " "  
        
    }let etoile=1
    while(etoile<=(2*lignes)-1){
        etoile++;
        texte= texte+ "*"
    }
    console.log(texte)
}

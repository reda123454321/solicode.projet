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

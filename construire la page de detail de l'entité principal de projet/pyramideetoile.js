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

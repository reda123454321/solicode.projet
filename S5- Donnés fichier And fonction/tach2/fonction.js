function calculersurface(a, b){
    return a*b;
}
let surface=calculersurface(20, 12);
function checkin(surface){
    return surface>=100;
}
let check=checkin(surface);
console.log("surface",surface );
console.log("condition :", check);

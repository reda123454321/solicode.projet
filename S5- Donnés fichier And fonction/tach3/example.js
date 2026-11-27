// "==================EXAMPLE1====================";

// function getdiscount(price){
//     let discount=0;
//     let price_total=0;
//     switch(true){
//         case price>1000:
//             discount=price*0.20;
//             price_total=price-discount;
//             return `discount : ${discount}, price : ${price_total}`;
//         case price>=500:
//             discount=price*0.10;
//             price_total=price-discount;
//             return `discount : ${discount}, price : ${price_total}`;
//         case price<500:
//             price_total=price;
//             discount=0;
//             return `discount : ${discount}, price : ${price_total}`;
//         default:
//             return "Something wrong";
//     }
// }
// let result=getdiscount(1200);
// console.log(result);

// "================EXAMPLE2=================";

// function getgrade(note){
//     if(note<=20 && note>=0){
//         switch(true){
//         case note>=17:
//             return "Exellent";
//         case note>=14:
//             return "Very good";
//         case note>=12:
//             return "Good";
//         case note>=10:
//             return "Passed";
//         default:
//             return "Failed";
//     }
//     }
//     else{
//         return "something wrong";
//     }
// }
// let result2=getgrade(17);
// console.log(result2);

// "==============EXAMPLE3=============";

// function getorder(price, quantity, member){
    
//     if(quantity>0 && price>0){
//         let total_price=price*quantity;
//         let price_discount=null;
//         let discount=null;
//         switch(true){
//             case member==="gold":
//                 discount=total_price*0.20;
//                 price_discount=total_price-discount;
//                 return `Original price :${total_price}\n Quantity :${quantity}\n Discount :${discount}\n Total Price :${price_discount}`;
//             case member==="silver":
//                 discount=total_price*0.10;
//                 price_discount=total_price-discount;
//                 return `Original price :${total_price}\n Quantity :${quantity}\n Discount :${discount}\n Total Price :${price_discount}`;
//             case member==="bronze":
//                 discount=total_price*0.05;
//                 price_discount=total_price-discount;
//                 return `Original price :${total_price}\n Quantity :${quantity}\n Discount :${discount}\n Total Price :${price_discount}`;
//             default:
//                 discount=0;
//                 price_discount=total_price-discount;
//                 return `Original price :${total_price}\n Quantity :${quantity}\n Discount :${discount}\n Total Price :${price_discount}`;
//         }
//     }
//     return "Wrong data";
// }
// let result3=getorder(1500, 5, "gold");
// console.log(result3);

// "===============EXAMPLE4==============";

// function getmin(numbers){
//     let min=numbers[0];
//     for (let number of numbers){
//         if(number<min){
//             min=number;
//         };
//     }
//     return min
// };
// let result4=getmin([0,1,2,3,4,5]);
// console.log(result4);

"================EXAMPLE5===============";

// function countnegative(numbers){
//     let count=0;
//     for(let number of numbers){
//         if(number<0){
//             count++;
//         }
//     }
//     return count
// }
// let result5=countnegative([5, -6, 3, 9, 0, -200, -62]);
// console.log(result5);

"============EXAMPLE6===============";
function calculateaverage(numbers){
    let counter=0
    for(let number of numbers){
        counter=(counter+number)/numbers.lenght+1;
    }
    return counter;
}
let result6=calculateaverage([5,5,5,5]);
console.log(result6);
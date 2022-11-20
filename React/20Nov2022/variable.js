// Redeclare and reassign possible
var x = 20;
console.log(x);
var x = 30;
console.log(x);

// Reassign (block level)
let y = 30;
console.log(y);
y = 50;
console.log(y);

// const (block level)
const z = 150;
console.log(z);
// z = 200;  // This shows error

const fruits = ["Banana", "Mango", "Orange"];
console.log(fruits);
fruits[2] = "Apple";
fruits[3] = "Pine Apple";
console.log(fruits);
// fruits = ["Apple", "Banana"]; //This shows error
// console.log(fruits);
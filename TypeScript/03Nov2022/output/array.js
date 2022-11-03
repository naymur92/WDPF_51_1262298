"use strict";
let myArray;
myArray = [100, 'Naymur', true];
// Slice
let slicePart = myArray.slice(1, 2);
console.log(slicePart);
console.log(myArray.slice(0, 2));
// ForEach
myArray.forEach((value, index) => console.log(`Index: ${index}, Value: ${value}`));
// concat
let myArray2 = ['Kamrul', 134, false];
let newArray = myArray.concat(myArray2);
console.log(myArray);
console.log(myArray2);
console.log(newArray);
// join
let arrayString = myArray.join(', ');
console.log(arrayString);
console.log(myArray2.join('-> '));
// some() method
function checkArray(element, index, array) {
    return element > 100;
}
let numbers = [23, 54, 124, 345, 1234, 239];
console.log(numbers.some(checkArray));
// filter() method
let testedValue = numbers.filter(checkArray);
console.log(testedValue.join(', '));
// find() method
console.log('First matching value= ' + numbers.find(checkArray));
// findIndex() method
console.log('Index= ' + numbers.findIndex(checkArray));
// includes() method
if (numbers.includes(124)) {
    console.log('Number found');
}
if (numbers.includes(50)) { // does not return any value
    console.log('Number not found');
}
// reduce() method
let total = numbers.reduce((sum, val) => sum + val, 0);
// let total = numbers.reduce(function(a, b) {
//   return a + b;
// });
console.log(total);

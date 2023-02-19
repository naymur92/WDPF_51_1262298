// array
// Explicit type (single type array)
let A: string[] = [];

A.push(34); // Shows error
A.push('Naymur');

// Union type (multiple type) (array)
let B: (string | number)[] = [];
B.push("naymur");
B.push(30);

// union type (multiple) normal variable
let C: string | number;
C = false; // show error
C = "naymur";
C = 30;

// object
let D: {
  name : string,
  age : number,
  adult: boolean
};
D = {
  name : 'Naymur',
  age : 30,
  adult: true
}

console.log(A);
console.log(B);
console.log(C);
console.log(D);
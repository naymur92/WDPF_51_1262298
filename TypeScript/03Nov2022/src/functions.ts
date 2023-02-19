// Practice 1
console.log('Practice 1:');

function myFunc() {
  console.log("Welcome");
}
myFunc();

console.log("----");
// ----------------------------------



// Practice 2
console.log('Practice 2:');

function add(num1: number, num2: number) {
  return num1 + num2;
}
console.log(`Sum: ${add(5, 10)}`);

console.log("----");
// -----------------------------------



// Practice 3
console.log('Practice 3:');

function writeVal(val: string | null) {
  console.log(`Value: ${val ?? 'Fallback Value'}`)
}
writeVal('Hello');
writeVal(null);

console.log("---");
// -------------------------------------



// Practice 4:
console.log('Practice 4:');

function writeValue(val?: any) {
  console.log(`Null Coalessing Op(Input- ${val}): ${val || 'Fallback Value'}`);
  console.log(`Nullish Coalessing Op(Input- ${val}): ${val ?? 'Fallback Value'}`);
}
writeValue();
writeValue(null);
writeValue(100);
writeValue(0);
writeValue('');
writeValue('Hello');
writeValue(false);

console.log("---");
// -------------------------------------



// Practice 5:
console.log('Practice 5:');

// Rest Parameter
function restParam(val: string, ...extraInfo: string[]) {
  console.log(`Value: ${val}, Extras: ${extraInfo}`);
}
restParam("Naymur");
restParam("Naymur", "Ripon");
restParam('Naymur', 'Ripon', 'Rana', 'Rony');

console.log("---");
// -------------------------------------



// Practice 6:
console.log('Practice 6:');

function composeString(val: string) : string {
  return `Composed string: ${val}`;
}
function writeValue1(val?: string) {
  console.log(composeString(val ?? 'Fallback Value'));
}
writeValue1();
writeValue1("Bangladesh");

console.log("---");
// -------------------------------------



// Practice 7:
console.log('Practice 7:');

function getCapital() : string {
  return "Dhaka";
}
function writeCity(f: () => string) {
  console.log(`City: ${f()}`);
}
writeCity(getCapital);
writeCity(() => "London");
writeCity(() => "Chittagong");
let myCity = "Chuadanga";
writeCity(() => myCity);
const team = ["Argentina", "Brazil", "Germany", "France"];

const [a, b, c, d] = team;

console.log(a);
console.log(b);
console.log(c);
console.log(d);

function calculation(num1, num2) {
  const add = num1 + num2;
  const subtract = num1 - num2;
  const multiply = num1 * num2;
  const devide = num1 / num2;

  return [add, subtract, multiply, devide];
}
console.log(calculation(24, 4));

const [add, subtract, multiply, devide] = calculation(12, 3);
console.log("Addition:", add);
console.log("Subtract:", subtract);
console.log("Multiplication:", multiply);
console.log("Division:", devide);

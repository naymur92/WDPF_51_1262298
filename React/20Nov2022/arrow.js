hello = function () {
  return "Hello World with normal function!";
};
console.log(hello());

hello = () => {
  return "Hello World with arrow function!";
};
console.log(hello());

hello = () => "Hello World with arrow function shorter syntax.";
console.log(hello());

// Arrow function with parameter
hello = (val) => "Hello " + val;
console.log(hello("World!"));

// Arrow function without parenthesis
hello = val => "Hello " + val;
console.log(hello("World!"));

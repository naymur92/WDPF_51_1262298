// import readline module
const readline = require("readline");

// create interface for input and output
const rl = readline.createInterface({
  input: process.stdin,
  output: process.stdout,
});

// let tired = true;

// var output = tired
//   ? "Alauddin vai cannot go home"
//   : "Alauddin vai can go home.";
// console.log(output);

function checkPermission(age) {
  return age > 18 ? "Allowed" : "Not allowed";
}

// create empty user input

// question user to enter name
rl.question("How old are you\n", function (number) {
  age = number;

  // console.log("Your age is " + userInput);
  console.log(checkPermission(age));
  // close input stream
  rl.close();
});

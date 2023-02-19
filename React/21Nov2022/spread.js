const players1 = ["Ronaldo", "Messi", "Sala"];
const players2 = ["Pele", "Maradona", "Jico"];

const playersCombine = ["Zidan", ...players1, ...players2, "Ozil"];
console.log(playersCombine);

// Spread operator combination with destructuring
const numbers = [1, 2, 3, 4, 5, 6, 7, 8];

const [one, two, ...rest] = numbers;
console.log(one);
console.log(two);
console.log(rest);

// combining objects
const OBJ1 = {
  name: "Naymur",
  age: 30,
};
const OBJ2 = {
  address: "Chuadanga",
  education: "MSc",
};

const PERSON = { ...OBJ1, ...OBJ2 };
console.log(PERSON);

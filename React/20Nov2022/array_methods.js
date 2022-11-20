const fruits = ["Apple", "Banana", "Orange", "Pine Apple"];

console.log(fruits);

const output = fruits.map((item) => "Fruit- " + item);

console.log(output);

// Extracting value using map()
var persons = [
  { name: "Naymur", age: 30, address: "Chuadanga" },
  { name: "Dipu", age: 26, address: "Barisal" },
  { name: "Alauddin", age: 31, address: "Kushtia" },
  { name: "Amjad", age: 28, address: "Cumilla" },
];
console.log(persons);

var name_array = persons.map((person) => person.name);
var age_array = persons.map((person) => person.age);
var address_array = persons.map((person) => person.address);

console.log(name_array);
console.log(age_array);
console.log(address_array);

const vehicle = {
  type: "Car",
  price: "10 lac",
  color: "Red",
};

// Without Destructuring (Old way)
function details(v) {
  return `My vehicle: ${v.type}, Price: ${v.price}, Color: ${v.color}`;
}
console.log(details(vehicle));

// With destructuring (New way)
function getDetails({ type, color, price }) {
  return `My vehicle: ${type}, Price: ${price}, Color: ${color}`;
}
console.log(getDetails(vehicle));

// Nested object
const vehicleOne = {
  brand: "Ford",
  model: "Mustang",
  type: "Car",
  year: 2021,
  color: "Red",
  registration: {
    city: "Chuadanga",
    state: "Khulna",
    country: "Bangladesh",
  },
};
function myVehicle({ model, registration: { state } }) {
  return `My ${model} is registered in ${state}`;
}
console.log(myVehicle(vehicleOne));

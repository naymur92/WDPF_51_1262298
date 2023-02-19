class Car {
  constructor(name, color) {
    this.brand = name;
    this.color = color;
  }

  present() {
    return "I have " + this.brand + "Car.";
  }
} // End of Car class

let myCar = new Car("Toyota", "Blue");

console.log("Object:", myCar);
console.log("Car Brand:", myCar.brand);
console.log("Car Color:", myCar.color);
console.log(myCar.present());

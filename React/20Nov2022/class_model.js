class Car {
  constructor(name, color) {
    this.brand = name;
    this.color = color;
  }

  present() {
    return "I have " + this.brand + " Car";
  }
} // End of Car class

class Model extends Car {
  constructor(name, model) {
    super(name);
    this.model = model;
  }

  show() {
    return this.present() + ", it is a " + this.model;
  }
} // End of model class

const CAROBJ = new Car("Ford", "Red");
const MODELOBJ = new Model("Limuzin", "Mustang");

console.log(CAROBJ);
console.log(MODELOBJ);

console.log(MODELOBJ.show());

console.log(CAROBJ.present());
console.log(MODELOBJ.present());

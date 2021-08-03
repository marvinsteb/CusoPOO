function Car(license, driver) {
  this.id;
  this.license = license;
  this.driver = driver;
  this.passenger;
}

Car.prototype.printDataCar = function () {
  console.log("Data Car");
  console.log(`\tLicense: ${this.license} \n\tPassengers: ${this.passenger}`);
};

let uberX = new UberX(
  "JSD123",
  new Drver("Esteban Menchu", "1123344", "e@gmail.com", "1234"),
  "honda",
  "crv"
);
uberX.passenger = 2;
uberX.printDataCar();
console.log("Data Driver");
uberX.driver.printDataAccount();
console.log("Data User");
let userOne = new User("Marvin Esteban", "12345689","m@gmail.com","36546");
userOne.printDataAccount();

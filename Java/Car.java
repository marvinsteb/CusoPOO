class Car {
 private Integer id;
 private String licence;
 public Drver driver;
 protected Integer passenger;
 public Car(String licence, Drver driver){
        this.licence = licence;
        this.driver = driver;
 }
 void printDataCar(){
        if(this.passenger != null) {
               System.out.println("Data Car");
               System.out.println("\tCar License: " + this.licence + "\n\tPassengers : " + this.passenger );
        }
 }
public Integer getId() {
       return id;
}
public void setId(Integer id) {
       this.id = id;
}
public String getLicence() {
       return licence;
}
public void setLicence(String licence) {
       this.licence = licence;
}
public Drver getDriver() {
       return driver;
}
public void setDriver(Drver driver) {
       this.driver = driver;
}
public Integer getPassenger() {
       return passenger;
}
public void setPassenger(Integer passenger) {
       if(passenger == 4) {
              this.passenger = passenger;
       }else{
              System.out.println("Necesitas asignar cuatro pasajeros");
       }
}
 
}
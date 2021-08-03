import java.util.ArrayList;
import java.util.Map;

class UberBlack extends Car {
  Map<String, Map<String,Integer>> typeCarAccepted;
  ArrayList<String> seatsMaterial;
  public UberBlack(String licence, Drver driver, Map<String, Map<String,Integer>> typeCarAccepted,ArrayList<String> seatsMaterial){
     super(licence, driver);
     this.typeCarAccepted = typeCarAccepted;
     this.seatsMaterial = seatsMaterial;
   }
}

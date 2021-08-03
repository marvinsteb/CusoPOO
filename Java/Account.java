class Account {
  Integer id;
  String name;
  String document;
  String email;
  String password;
  public Account(String name, String document, String email, String password){
    this.name = name;
    this.document = document;
    this.email = email;
    this.password = password;
  }
    void printDataAccount(){
      System.out.println("\tName: " + this.name +"\n\tDocument: " + this.document + "\n\tEmail:" + this.email +"\n\tPassword: " + this.password);
  }
}
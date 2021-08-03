class Main {
    public static void main(String[] args) {
        System.out.println("Iniciando el programa");

        UberX uberX = new UberX("AMZ123",new Drver("Marvin","123abc","m@gmail.com","pass1234"), "HONDA", "CRV");
        uberX.setPassenger(4);
        uberX.printDataCar();
        System.out.println("Data Driver");
        uberX.driver.printDataAccount();
        System.out.println("Data Driver");
        User u = new User("Esteban","DGL765","e@hotmail.com","psw456");
        u.printDataAccount();

        UberVan ubrvan = new UberVan("AMZ123",new Drver("Marvin","123abc","m@gmail.com","pass1234"));
        ubrvan.setPassenger(6);
        ubrvan.printDataCar();
    }
}
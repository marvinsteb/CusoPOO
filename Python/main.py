from uberX import UberX
from drver import Drver
from user import User

if __name__ == "__main__":
    print("hola mundo")
    car = UberX("MAMS343", Drver("marvin menchu", "KAK12334","m@gmail.com","psw8957"),"toyota","prius")
    car.passenger = 5;
    
    user = User("esteban","ABC123","e@gmail.com","psw653")
    print(vars(car))
    print(vars(car.driver))
    print(vars(user))
from car import Car
typeCarAccepted = []
seatsMaterials = []
class UberBlack(Car):
  def __init__(self, licence, driver, typeCarAccepted, seatsMaterials):
      super().__init__(licence, driver)
      self.typeCarAccepted = typeCarAccepted
      self.seatsMaterials = seatsMaterials
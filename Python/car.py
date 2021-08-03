from account import Account
from drver import Drver

class Car:
 id        = int
 licence   = str
 driver    = Drver("","","","")
 passenger = int

 def __init__(self,licence,driver):
   self.licence   = licence
   self.driver = driver
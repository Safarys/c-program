class Bank:
    def __init__(self,name,location):
        self.name=name
        self.location=location

    def info(self):
        print("BANK DETAILS")
        print(f"NAME OF BANK: {self.name}")
        print(f"LOCATION: {self.location}")
class Insurence(Bank):
    def __init__(self,name,location,amount):
        super().__init__(name,location)
        self.__amount=amount

    def info(self):
        super().info()
        print(f"AMOUNT: {self.__amount}")

    def __le__(self,other):
        return self.__amount <= other.__amount
        

try:
    amount1=Insurence("SBI","KOTHAMANGALAM","12000")
    amount1.info()
    print("________________________________________")
    amount2=Insurence("SBI","KOTHAMNGALAM","13000")
    amount2.info()
    if amount1<=amount2:
        print("amount1 is smaller")
    else:
        print("amount 2 is smaller")
    

except ValueError as ve:
    print(ve)


    

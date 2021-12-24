class dom():


	def __init__(self, year , name , numberOfFloors):
		self.year = year
		self.name = name
		self.numberOfFloors = numberOfFloors

	def harak(self):
		print("Год постройки дома", self.year,"\n"
			"Название дома",self.name,"\n"
			"Количество этажей",self.numberOfFloors)

dom1 = dom(2016,"ЖК Астана",15)
dom2 = dom(2021,"ЖК Elite",777)

print()
dom1.harak()
print()
dom2.harak()

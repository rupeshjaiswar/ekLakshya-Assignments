d = {"India": "Delhi",
     "Spain": "Madrid",
     "Australia": "Canberra",
     "Newzealand": "Wellington",
     "England": "London"}


a = input("Enter a country name:")
a = a.capitalize()
b = d[a]
print(f"Capital of the Country {a} is:", b)

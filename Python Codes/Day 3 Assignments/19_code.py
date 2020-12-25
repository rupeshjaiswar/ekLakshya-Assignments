d = {"Noodles": 25,
     "Tomatoes": 35,
     "Onion": 80,
     "Carrots": 20,
     "Sweets": 100}


a = input("Enter a food name:")
a = a.capitalize()
b = d[a]
print(f"Price of {a} is:", b)

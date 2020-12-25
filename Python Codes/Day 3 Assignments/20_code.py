d = {"Harry potter": 125,
     "Lord of the rings": 135,
     "Game of thrones": 800,
     "The hobbit": 200,
     "Chronicles of narnia": 100}


a = input("Enter a book name:")
a = a.capitalize()
b = d[a]
print(f"Price of {a} book is:", b)
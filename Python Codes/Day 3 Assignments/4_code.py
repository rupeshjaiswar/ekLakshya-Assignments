lst = [1, 2, 10, 8, 4, 18, 56, 47, 0, 8]
print("The list is:", lst)
a = int(input("Enter an integer number between 0-9:"))
b = int(input("Enter an integer number between 0-9:"))

lst.insert(a, 9)
lst.insert(b, 20)
print(f"The updated list is: {lst}")
print(f"The list from index {a} to {b} is:", lst[a:b])
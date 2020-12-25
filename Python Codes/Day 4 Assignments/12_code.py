lst = []
n = int(input("Enter the number of elements in the list:"))

for i in range(0, n):
    x = int(input(f"Enter the {i} element in the list:"))
    lst.append(x)

print(f"The list with {n} element is:", lst)

print("The Reversed list is:", lst[::-1])




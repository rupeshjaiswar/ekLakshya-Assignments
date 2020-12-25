lst = []
n = int(input(("Enter the number of elemrnts you want in the list:")))

for i in range(0, n):
    x = int(input(f"Enter {i} the element in the list you want:"))
    lst.append(x)

print(f"The list with {n} elements is:",lst)

a = sum(lst) / len(lst)
print(f"The average of the elements in the list is: {a}")

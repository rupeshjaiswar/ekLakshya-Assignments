lst = []
n = int(input("Enter the number of elements in the list:"))

for i in range(0, n):
    x = int(input(f"Enter the {i} element in the list:"))
    lst.append(x)

print(f"The list with {n} element is:", lst)
# lst = [100, 2, 5, 8, 10, 7, 101]
x = int(input("Enter any integer number:"))
for y in lst:
    if y % x == 0:
        print(f"{y} is divisible by {x}")

    else:
        print(f"{y} is not divisible by {x}")


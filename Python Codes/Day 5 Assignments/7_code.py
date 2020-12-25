def myCal(lst1, lst2, n):
    lst3 = []
    for i in range(len(lst1)):
        if n == "+":
            x = lst1[i] + lst2[i]
        elif n == "-":
            x = lst1[i] - lst2[i]
        elif n == "*":
            x = lst1[i] * lst2[i]
        elif n == "**":
            x = lst1[i] ** lst2[i]
        elif n == "/":
            x = lst1[i] / lst2[i]
        elif n == "//":
            x = lst1[i] // lst2[i]
        elif n == "%":
            x = lst1[i] % lst2[i]
        lst3.append(x)
    return lst3


lst1 = [4, 5, 6, 7]
print("List 1 is:", lst1)

lst2 = [1, 2, 3, 4]
print("List 2 is:", lst2)

op = ("+", "-", "*", "**", "/", "//", "%")
print("The List of operations that can be performed are:", op)

opr = input("Enter the operation you want to do:")

if opr not in op:
    print("Only this operation can be performed:", op)
    opr = input("Enter the operation you want to do:")
else:
    myCal(lst1, lst2, opr)

print("The list after operation is:", myCal(lst1, lst2, opr))
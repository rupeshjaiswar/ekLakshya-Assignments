def divisiblity(m, n):
    lst = []
    for i in range(1, 101):
        if (i % m == 0) and (i % n == 0):
            lst.append(i)

        else:
            pass
    return lst

m = int(input("Enter an Integer number:"))
n = int(input("Enter an Integer number:"))
print(divisiblity(m, n))












x = lst = []
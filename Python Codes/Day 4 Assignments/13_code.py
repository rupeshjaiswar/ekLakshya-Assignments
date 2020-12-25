x = int(input("Enter an integer number:"))
y = int(input("Enter an integer number:"))
lst = []
if x > y:
    for i in range(x, y-1, -1):
        lst.append(i)
    print("The Required Output is:", *lst)







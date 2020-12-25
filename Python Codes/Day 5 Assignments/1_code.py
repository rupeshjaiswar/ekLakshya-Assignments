def list_multiply(lst, mul):
    lst1 = []
    for i in range(len(lst)):
        a = lst[i] * mul
        lst1.append(a)
    lst = lst1

    print("The new list after multiplying is:", lst)




lst = [1, 2, 3, 4, 5, 6]
print("The original list is:", lst)
n =  int(input("Enter an integer number to multiply:"))
list_multiply(lst, n)
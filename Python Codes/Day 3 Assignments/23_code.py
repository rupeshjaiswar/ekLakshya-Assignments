# conventional method
lst = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
l1 = lst[0:5]
l2 = lst[5:]
print("The first half of main list:", l1)
print("The second half of main list:", l2)





# alternative method
lst = []
n = int(input("Enter an integer number:"))

for i in range(1, n+1):
    x = int(input(f"Enter {i} integer number of the list:"))
    lst.append(x)

print(f"The list of {n} integers are:", lst)
length = len(lst) // 2

print("The first half of main list:", lst[:length])
print("The second half of main list:", lst[length:])


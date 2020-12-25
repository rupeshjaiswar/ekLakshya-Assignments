lst = [[2, 3, 5], [1, 2, 3], [4, 5, 6]]
print("The embedded list is:", lst)

count = 0
for i in lst:
    for j in i:
        count = count + j
    print("Sum of each Embedded list is:", count)

a = count / len(lst)
print("The average of list is:", a)

# using only single loop
x = 0
for i in lst:
    x += sum(i)
    print("Sum of each Embedded list is:", x)

b = x / len(lst)
print("The average of list is:", b)

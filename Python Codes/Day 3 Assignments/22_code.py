# conventional method
a = int(input("Enter 1 integer number:"))
b = int(input("Enter 2 integer number:"))
c = int(input("Enter 3 integer number:"))
d = int(input("Enter 4 integer number:"))
e = int(input("Enter 5 integer number:"))
f = int(input("Enter 6 integer number:"))
g = int(input("Enter 7 integer number:"))
h = int(input("Enter 8 integer number:"))
i = int(input("Enter 9 integer number:"))
j = int(input("Enter 10 integer number:"))

lst = [a,b,c,d,e,f,g,h,i,j]
print("The list of 10 integers are:", lst)
print("The reverse list of 10 integers are:", lst[::-1])



# alternative method
lst = []
n = int(input("Enter an integer number:"))

for i in range(1, n+1):
    x = int(input(f"Enter {i} integer number of the list:"))
    lst.append(x)

print(f"The list of {n} integers are:", lst)
print(f"The reverse list of {n} integers are:", lst[::-1])
d = {}
lst = []

n = input("Enter a character:")

for i in range(ord("a"), ord(n)+1):
    d[chr(i)] = i
    a = list(d.items())

for j in a:
    lst.append(list(j))


print("The required list is:", lst)

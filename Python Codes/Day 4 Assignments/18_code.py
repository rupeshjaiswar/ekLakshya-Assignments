d = {}
n = input("Enter a character:")

for i in range(ord("a"), ord(n)+1):
    d[chr(i)] = i

print("The required dictionary is:", d)
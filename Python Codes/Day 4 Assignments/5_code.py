lst = []
x = int(input("Enter a starting range:"))
y = int(input("Enter an ending range:"))
m = 7
z = x % m
if (z != 0):
    x = x + m - z
    print(x)
for i in range(x, y+1 , m):
    lst.append(i)
print(f"The multiples of 7 from {x} to {y} are:", lst)
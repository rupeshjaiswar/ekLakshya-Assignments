lst = []
x = int(input("Enter a starting range:"))
y = int(input("Enter an ending range:"))
m = 4
z = x % m
if (z != 0):
    x = x + m - z
for i in range(x, y+1 , m):
    lst.append(i)
print(f"The multiples of 7 from {x} to {y} are:", lst)



#using while loop
# x = 0
# while x <= 100:
#
#     if x % 4 == 0:
#         print(f"{x} is a multiple of 4")
#
#     else:
#         pass
#
#     x += 1




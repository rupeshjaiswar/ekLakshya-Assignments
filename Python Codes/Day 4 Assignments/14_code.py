lx = [1, 2, 3, 4, 5, 6]
print("The list is:", lx)

tx = (1, 2, 3, 4, 5, 6)
print("The tuple is:", tx)

flag = 0

for i in lx:
    if i in tx:
        flag = flag + 1
    else:
        continue

if flag == len(lx):
    print("BOTH ARE EQUAL")
else:
    print("NOT EQUAL")



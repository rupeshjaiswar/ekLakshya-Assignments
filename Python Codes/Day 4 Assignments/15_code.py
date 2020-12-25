lx = [1, 2, 3, 4, 5, 6]
print("The list is:", lx)

tx = (1, 2, 3, 4, 5, 6)
print("The tuple is:", tx)

new_list = []
flag = 0
for i in range(len(lx)):
    new_list.append(lx[i] * tx[i])

print("The new list is:", new_list)



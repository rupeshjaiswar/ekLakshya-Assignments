def comparison(l, t):
    flag = 0
    for i in l:
        if i in t:
            flag += 1
        else:
            continue

    if flag == len(l):
        return True
    else:
        return False


lx = [1, 2, 3, 4, 5, 9]
print("List is:", lx)

tx = (1, 2, 3, 4, 5, 9)
print("Tuple is:", tx)

print(f"The result of comparison between List:{lx} and Tuple:{tx} is:", comparison(lx, tx))
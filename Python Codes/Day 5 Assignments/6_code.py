def dictionary(m, n):
    d = {}
    for i in range(1,101):
        if (i % m == 0) and (i % n == 0):
            d["K" + str(i)] = i

        else:
            pass

    return d


m = int(input("Enter an Integer number:"))
n = int(input("Enter an Integer number:"))
print(dictionary(m, n))
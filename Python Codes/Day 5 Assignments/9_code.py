def digits(x):
    global count
    while x != 0:
        x = x // 10
        count += 1

    return count





x = int(input("Enter any integer value:"))
count = 0
digits(x)
print(f"The number of digits in {x} is:", count)
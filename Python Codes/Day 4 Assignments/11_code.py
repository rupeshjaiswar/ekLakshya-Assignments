x = int(input("Enter any integer number:"))

count = 0
while x != 0:
    x = x // 10
    count += 1

print(f"The number of digits are:", count)

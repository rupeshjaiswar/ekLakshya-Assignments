n = int(input("Enter the number of rows:"))
count = 1
for i in range(0, n):
    count = 1
    for j in range(0, i+1):
        print("$", end=" ")
        count += 2

    print("\r")

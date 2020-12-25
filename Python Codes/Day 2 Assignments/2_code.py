x = int(input("Enter first integer number x:"))
y = int(input("Enter second integer number y:"))
z = int(input("Enter third integer number z:"))

print("Addition of the 3 integer numbers:", x + y + z)
print("The value for the expression x + y / z :", x + y / z)
print("The value for the expression x + y * (x / z) :", x + y * (x / z))
print("The value for the expression (x + y) * (x % z) * (y % z) :", (x + y) * (x % z) * (y % z))

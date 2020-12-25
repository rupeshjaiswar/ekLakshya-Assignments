import math as m

# ceil and floor of number
x = float(input("Enter a float value:"))
print("The ceil value of x is :",m.ceil(x))
print("The floor value of x is :",m.floor(x))

# factorial of any number
y = int(input("Enter a number for factorial:"))
print("The factorial of the given number is:", m.factorial(y))

# square root of any number
z = int(input("Enter a number for square root:"))
print("The Square root of the given number:", m.sqrt(z))

# power of a number
b = int(input("Enter a number for base:"))
c = int(input("Enter a number to power:"))
print("The Square of the number is:", m.pow(b,c))

# degree to radians
a = int(input("Enter a degree value:"))
print("The radian of the given degree is:", m.radians(a))

# sine and cosine values
d = int(input("Enter the degree value of sine you want:"))
print("The Sine value is:", m.sin(m.radians(d)))

e= int(input("Enter the degree value of cosine you want:"))
print("The Cosine value is:", m.cos(m.radians(e)))

# finding a hypotenuse
r, s = int(input("Enter the first number for hypotenuse:")), int(input("Enter the other number for hypotenuse:"))
print("The hypotenuse of the two numbers is:", m.hypot(r,s))

# copysign function
t, u = int(input("Enter the first numbers for sign change:")), int(input("Enter the second number for sign change:"))
c = m.copysign(t,u)
print("The sign Change is:",c)

# the value of pi
print("The value of pi is:", m.pi)




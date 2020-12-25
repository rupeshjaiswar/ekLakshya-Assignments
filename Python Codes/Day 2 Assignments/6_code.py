import math as m

# area of triangle with base and height given
b = int(input("Enter the base of the triangle:"))
h = int(input("Enter the height of thr triangle: "))

a = 0.5 * b * h
print(f"Area of triangle with base {b} and height {h} is {a} square meters")

# area of triangle with three sides given
x = int(input("Enter the base of the triangle:"))
y = int(input("Enter the base of the triangle:"))
z = int(input("Enter the height of thr triangle: "))

p = (x + y + z) / 2

r = m.sqrt((p * (p - x) * (p - y) * (p - z)))
r = round(r, 2)
print(f"Area of triangle with side one {x} side two {y} and side three {z} is {r} square meters")
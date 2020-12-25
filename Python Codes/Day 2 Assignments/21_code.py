import cmath as m

a = int(input("Enter the value of a:"))
b = int(input("Enter the value of b:"))
c = int(input("Enter the value of c:"))
e = (b*b) - 4 * (a*c)
d = m.sqrt((e))
r1 = (- b + d) / (2 * a)
r2 = (- b - d) / (2 * a)
print(f"The roots of the quadratic equation are: {r1} and {r2}")



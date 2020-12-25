import math as m

def list_operations(lst):
    x = sum(lst)
    y = sum(lst) / len(lst)
    z = m.sqrt(sum((x - y) ** 2 for x in lst) / len(lst))
    return x, y, z


lst = [20, 30, 40, 30]
print("The list is:", lst)
s, a, var = list_operations(lst)
print("The Sum of the list is:", s)
print("The Variance of the list is:", var)
print("The Average of the list is:", a)
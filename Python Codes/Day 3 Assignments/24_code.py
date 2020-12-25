# Conventional method
list1 = [10, 20, 4, 45, 55, 2, 8, 80]
list1.sort()
print("Smallest element is:", *list1[:1]) # Astrik * removes the element from the list
print("Largest element is:", *list1[-1:])

# list.sort(reverse=True)
#print("Largest element is:", *list1[-1:])


print("The Sum of the elements in the list is:",sum(list1))


# Alternative method
lst = []
n = int(input("Enter an integer number:"))

for i in range(1, n+1):
    x = int(input(f"Enter {i} integer number of the list:"))
    lst.append(x)

print("The list of 10 integers are:", lst)

lst.sort()
print("Smallest element is:", *lst[:1])

lst.sort(reverse=True)
print("Largest element is:", *lst[:1])

print("The Sum of the elements in the list is:",sum(lst))
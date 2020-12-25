s1 = input("Enter a string:")
print("The String is:", s1)
s2 = input("Enter a substring:")
print("The String is:", s2)

print("Occurrence of substring in the string:", s1.count(s2))
print("Position of substring in the string from left:", s1.find(s2))
print("Position of substring in the string from right:", s1.rfind(s2))
str = input("Enter a string:")
print("The String is:", str)
str1 = str[0:3]

print("The first three characters in the string str:", str1)

for i in str1:
    print(f"The ASCII value of the character {i} in str1 is:", ord(i))


print("The position of str1 in str is:", str.find(str1))
print("Count of str1 in str is:", str.count(str1))
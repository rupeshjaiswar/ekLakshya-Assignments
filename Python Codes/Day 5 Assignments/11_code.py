def showStudent(name, branch, y = str(2020)):

    return ('The name of student is:', name,
            'year of admission is:', y,
            'and branch is:', branch)

n = input("Enter the Name of the student:")
y = input("Enter the Year of admission:")
b = input("Enter the Branch of the student:")

print(showStudent(n, b))


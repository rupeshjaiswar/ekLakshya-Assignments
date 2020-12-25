subject_1 = int(input("Enter the marks in subject 1:"))
subject_2 = int(input("Enter the marks in subject 2:"))
subject_3 = int(input("Enter the marks in subject 3:"))
subject_4 = int(input("Enter the marks in subject 4:"))
subject_5 = int(input("Enter the marks in subject 5:"))

sum_of_marks_of_5_subjects = subject_1 + subject_2 + subject_3 + subject_4 + subject_5
average_marks_of_5_subjects = sum_of_marks_of_5_subjects / 5


print(f"Average of marks of 5 subjects is {average_marks_of_5_subjects}")

# Alternative method by entering number of subjects
marks_of_subjects = []

n = int(input("Enter number of subjects:"))

for i in range(0, n):
    m = int(input(f"Enter marks of the subjects:"))
    marks_of_subjects.append(m)
print(f"Marks of all the subjects in list {marks_of_subjects}")

a = sum(marks_of_subjects) / len(marks_of_subjects)
print(f"Average of marks of {n} subjects is {a}")


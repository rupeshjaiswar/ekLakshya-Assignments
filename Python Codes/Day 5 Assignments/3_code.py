
def new_list(lst1, lst2):
	lst3 = []
	for i in range(len(lst2)):
		lst3.append(lst1[i])
		lst3.append(lst2[i])
	return lst3

lst1 = [1, 2, 3, 4]
print("List 1 is:", lst1)

lst2 = [11, 22, 33, 44]
print("List 2 is:", lst2)

print("The resultant list is:", new_list(lst1, lst2))


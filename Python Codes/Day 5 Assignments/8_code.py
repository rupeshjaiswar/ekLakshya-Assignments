def substring(lst, s):
    lst1 = []
    for i in lst:
        if s in i:
            lst1.append(i)

    return lst1


lst = ["India", "Ireland", "Newzeland", "Indonesia", "Nagaland", "England"]
print("This is the list of strings:", lst)
s = "land"
print("This is the substring:", s)

print(f"This is the strings that contain {s} in them:", substring(lst, s))
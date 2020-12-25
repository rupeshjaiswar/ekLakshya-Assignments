def taxComp(income):
    if income == 500000 or income == 250000:
        return "No Tax"
    if 500000 < income < 1000000:
        if 500000 < income < 700000:

            return (10*income)/100
        elif 700000 < income < 1000000:

            return (15*income)/100

    if 1000000 == income < 1500000:
        if 1000000 <= income < 1200000:

            return (20*income)/100
        elif 1200000 <= income <= 1500000:

            return (30*income)/100
    if income > 1500000:

        return (33*income)/100


income = int(input("Enter Income:"))
tax = taxComp(income)
print(f"Payable tax for {income} is:", tax)



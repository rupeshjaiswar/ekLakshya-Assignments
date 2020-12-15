function printOddNums(num) {

    var oddnums = []
    for (let index = 1; index < num; index++) {
        if (index % 2 != 0) {

            oddnums.push(index)
        }
    }
    console.log("Odd numbers between 1-100 are: ", oddnums)

}

printOddNums(101);
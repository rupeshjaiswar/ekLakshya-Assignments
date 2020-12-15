function countVowels(str) {
    var vowels = "aeiouAEIOU"

    var count = 0

    for (let index = 0; index < str.length; index++) {
        const element = str[index];
        if (vowels.includes(element)) {
            count += 1;

        }


    }
    console.log(`The string '${str}'contains ${count} vowels`)

    console.log("Number of Vowels:", count)


}

countVowels("The quick brown fox jumps over the lazy dog")

// console.log()
function palindrome(str) {
    if (str.slice(-str.length) == str) {
        console.log(`The word ${str} is a Palindrome`)
    } else {
        console.log(`The word ${str} is not a Palindrome`)

    }
}

palindrome("Malayalam")
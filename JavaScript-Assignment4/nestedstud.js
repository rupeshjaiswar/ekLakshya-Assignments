function showTotal(...marks) {

    var count = 0;

    marks.forEach((element) => {
        // console.log(element)
        count += element
    });


    return function() {
        return (count / marks.length)

    }


}


console.log("The average of marks are:", showTotal(200, 300, 400)())
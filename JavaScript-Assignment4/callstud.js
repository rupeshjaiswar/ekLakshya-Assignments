var student1 = {
    name: "Rupesh",
    rollno: 163035,


}

var student2 = {
    name: "Rahul",
    rollno: 1620255,

}



var totalmarks = {
    showTotal: function(...marks) {

        var count = 0;

        marks.forEach((element) => {
            // console.log(element)
            count += element
        });
        console.log("Total marks for", this.name, "having rollno.", this.rollno, "is", count);
    }


}

var hobbies = {

    showHobbies: function(...hobby) {
        hobby.forEach((element, index) => {
            console.log(`${this.name} have Hobby ${index + 1}: ${element}`);

        });
    }
}

console.log("------------------------------------------------------------")
console.log("BY USING CALL")
console.log("------------------------------------------------------------")



totalmarks.showTotal.call(student1, ...[100, 200, 300])
totalmarks.showTotal.call(student2, ...[200, 300, 400])
hobbies.showHobbies.call(student1, ...["Sports", "Music", "Book Reading"])
hobbies.showHobbies.call(student2, ...["Cycling", "Swimming", "Chess"])

console.log("-------------------------------------------------------------")
console.log("BY USING APPLY")
console.log("------------------------------------------------------------")



totalmarks.showTotal.apply(student1, [100, 200, 300])
totalmarks.showTotal.apply(student2, [200, 300, 400])
hobbies.showHobbies.apply(student1, ["Sports", "Music", "Book Reading"])
hobbies.showHobbies.apply(student2, ["Cycling", "Swimming", "Chess"])
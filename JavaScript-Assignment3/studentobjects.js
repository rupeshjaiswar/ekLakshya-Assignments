var studentList = [
    { name: "Rupesh" },
    { Rollno: 163035 },
    { Phoneno: 9773054974 },
    { Department: "EXTC" },
    { Hobbies: ["Sports", "Chess", "Book Reading"] }
]
for (const key in studentList) {
    var stud = studentList[key];
    if (stud instanceof Array) {
        stud.forEach((element) => { console.log(key + " :" + element) })

    } else if (typeof(stud) == "object") {
        for (const key in stud) {
            console.log(key + " : " + stud[key]);
        }
    } else
        console.log(key + " :" + mob1);

}
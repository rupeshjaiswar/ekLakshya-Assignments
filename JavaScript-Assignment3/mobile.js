var mobile1 = {
    model: "Note8 Pro",
    brand: "Xiaomi",
    color: "Black",
    price: 17000,
    accessories: ["Charger", "Earphones", "USB", "Handling Manual", "Cover", "Tempered Glass"],
    features: { Ram: "6GB", Memory: "128GB", Processor: "Snapgragon655", Camera: "48 Pixels" },
    show: function(brand, model) {

        console.log(`All about ${brand} ${model}`)


    }
}

console.log("Details of Mobile 1")
console.log("___________________________________")





for (const key in mobile1) {
    var mob1 = mobile1[key];
    if (mob1 instanceof Array) {
        mob1.forEach((element) => { console.log(key + " :" + element) })

    } else if (typeof(mob1) == "object") {
        for (const key in mob1) {
            console.log(key + " : " + mob1[key]);
        }
    } else if (typeof(mob1) == "function") {
        mob1(mobile1.brand, mobile1.model);
    } else
        console.log(key + " :" + mob1);

}



var mobile2 = {
    model: "8",
    brand: "One Plus",
    color: "Blue",
    price: 35000,
    accessories: ["Charger", "Earphones", "USB", "Handling Manual", "Cover", "Tempered Glass"],
    features: { Ram: "8GB", Memory: "128GB", Processor: "Snapgragon655", Camera: "50 Pixels" },
    show: function(brand, model) {

        console.log(`All about ${brand} ${model}`)


    }


}


console.log("")

console.log("Details of Mobile 2")

console.log("______________________________________")


for (const key in mobile2) {
    var mob2 = mobile2[key];
    if (mob2 instanceof Array) {
        mob2.forEach((element) => { console.log(key + " :" + element) })

    } else if (typeof(mob2) == "object") {
        for (const key in mob2) {
            console.log(key + " : " + mob2[key]);
        }
    } else if (typeof(mob2) == "function") {
        mob2(mobile2.brand, mobile2.model);
    } else
        console.log(key + " :" + mob2);
}
function showProduct(brand, model, cost) {
    console.log("Product is of brand", brand, ",model is", model, "and its cost is Rs.", cost)
    return function(discount) {
        console.log("The dicounted price is Rs.", cost - discount)

    }
}

showProduct("OnePlus", "8", 35000)(4000);
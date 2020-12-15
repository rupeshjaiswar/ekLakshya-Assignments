var Product = function(name, price) {
    this.name = name;
    this.price = price;
    this.printDetails = function() {
        console.log(`The name of and the price of the product are: ${this.name} = ${this.price}`)

    }
}

var product = new Product("Refrigerator", 20000);
product.printDetails();

Product.prototype.brand = "LG"
Product.prototype.discountedPrice = function() {
    console.log(`The product is of Brand ${product.brand}`)
    console.log(`The new price after discount is ${this.price}-Discount`)
}


product.discountedPrice();
function Shape(length, width, height, side) {
    this.length = length;
    this.width = width;
    this.height = height;
    this.side = side;


}

function Rectangle(length, width) {
    Shape.call(this, length, width)

    this.area = function() {
        console.log("Area of Rectangle is:", this.length * this.width)
    }

    this.perimeter = function() {
        console.log("Perimeter of Rectangle is:", 2 * (this.length + this.width));
    }
}



var rect = new Shape(20, 30);


var rectangle = new Rectangle(20, 30);
rectangle.area();
rectangle.perimeter();

function Triangle(length, width, height, side) {
    Shape.call(this, length, width, height, side)

    this.area = function() {
        console.log("Area of Triangle is:", (this.length * this.height) * 0.5)
    }

    this.perimeter = function() {
        console.log("Perimeter of Triangle is:", this.length + this.width + this.side);
    }
}

var rect = new Shape(20, 30);


var rectangle = new Triangle(20, 30, 50, 10)
rectangle.area();
rectangle.perimeter();
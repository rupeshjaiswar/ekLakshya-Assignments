<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
</head>
<body>

<?php
class Product{
    public $brand;
    public $price;
    public $quantity;

    public function __construct($brand, $price, $quantity)
    {
     $this->brand = $brand;
     $this->price = $price;
     $this->quantity = $quantity;   
    }
    public function __destruct()
    {
        echo "End of Session";
    }
    public function totalCost(){
        echo "Total cost of product is: ".$this->price*$this->quantity."<br>";
    }
    public function printDetails(){
        echo "Brand: ".$this->brand."<br>";
        echo "Price: ".$this->price."<br>";
        echo "Quantity: ".$this->quantity."<br>";

    }
}
class Laptop extends Product{
    public $accessories=array("Charger","Speakers","Mouse","Headphones","Handling Manual");


    function showAccessories(){
        foreach($this->accessories as $acc){
            echo "Accessories: ",$acc."<br>";
        }
        echo "<hr>";
    }
}

$lap1 = new Laptop("HP",60000,2);
$lap1->printDetails();
$lap1->totalCost();
$lap1->showAccessories();


$lap2 = new Laptop("DELL",50000,3);
$lap2->printDetails();
$lap2->totalCost();
$lap2->showAccessories();

?>
    
</body>
</html>
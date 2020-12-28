<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile</title>
</head>
<body>



    <?php
    class Mobile{
        public $brand;
        public $price;
        public $model;
        static $accessories = array("Charger","Earphones","USB Cable");

        function __construct($brand, $price, $model)
        {
            $this->brand = $brand;
            $this->price = $price;
            $this->model = $model;
            
        }
        function __destruct()
        {
            echo "End of Session";

        }

        function printDetails(){
            echo "Brand: ".$this->brand."<br>";
            echo "Price: ".$this->price."<br>";
            echo "Model: ".$this->model."<br>";
            
            foreach(self::$accessories as $values){
                echo "Accessories: ", $values."<br>";

            }


      }
      public function showDiscountedPrice($percent){
          echo "Discounted Price: ".(($this->price*$percent)/100)."<br><hr>";
      }
    }

    $mobile1 = new Mobile("iPhone", 86000, "XS");
    $mobile1->printDetails();
    $mobile1->showDiscountedPrice(20);

    $mobile2 = new Mobile("One+", 35000, "8");
    $mobile2->printDetails();
    $mobile2->showDiscountedPrice(15);




?>




    
</body>
</html>
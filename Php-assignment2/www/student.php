<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student</title>
</head>
<body>

<?php
class Student{
    private $name;
    private $studentid;
    private $dept;
    private $city;

    function set_name($nam){
            $this->name = $nam;
        }

        function set_id($id){
            $this->studentid = $id;
        }

        function set_dept($department){
            $this->dept = $department;

        }
        function set_city($city){
            $this->city = $city;
        }

        function get_name(){
            echo "NAME: ".$this->name."<br>";

        }
        function get_id(){
            echo "ID: ".$this->studentid."<br>";

        }
        function get_dept(){
            echo "DEPARTMENT: ".$this->dept."<br>";
        }
        function get_city(){
            echo "CITY: ".$this->city."<br>";
        }

        public function showGrades($marks1,$marks2,$marks3){
            $avg = ($marks1+$marks2+$marks3)/3;
            echo "The Average marks Scored is: ".$avg."<br>";
            if($avg > 90){
                echo "Grade : A+"."<hr>";
            }
            elseif($avg>80 && $avg<=90){
                echo "Grade : A".",<hr>";
            }
            elseif($avg>70 && $avg<=80){
                echo "Grade : B"."<hr>";
            }
            elseif($avg>60 && $avg<=70){
                echo "Grade : C"."<hr>";
            }
            else
            {
                echo "Fail";
            }
        }

        public function printDetails(){
            $this->get_name();
            $this->get_id();
            $this->get_dept();
            $this->get_city();

        }

        
    }



$stud1 = new Student();
$stud1->set_name("Rupesh");
$stud1->set_id(163035);
$stud1->set_dept("EXTC");
$stud1->set_city("Mumbai");
$stud1->printDetails();
$stud1->showGrades(100,200,300);


$stud2 = new Student();
$stud2->set_name("Rahul");
$stud2->set_id(163039);
$stud2->set_dept("CSE");
$stud2->set_city("Pune");
$stud2->printDetails();
$stud2->showGrades(200,300,400);




?>
    
</body>
</html>
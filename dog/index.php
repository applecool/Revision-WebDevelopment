<!DOCTYPE html>
<html>
	<head>
	  <title> Practice makes perfect! </title>
      <link type='text/css' rel='stylesheet' href='style.css'/>
	</head>
	<body>
      <p>
        <?php
            class Dog{
                public $numLegs = 4;
                public $name;
               public function __construct($name){
                $this->name = $name;
                }
                
                public function bark(){
                return "Woof";
                }
                
            public function greet(){
            return "Greetings! I am ". $this->name ." ". "your loyal dog";
            }
        }
                $dog1 = new Dog("Scooby");
                $dog2 = new Dog("Bruno");
                echo $dog1->bark();
                echo $dog2->greet();
        ?>
      </p>
    </body>
</html>
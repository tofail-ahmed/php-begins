<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>PHP PHP PHP</title>
</head>
<body>
      <h1>php: Hypertext Preprocessor</h1>
      <?php  

$food = "Pizza";
$Food="Burger";
echo 'Hello world. I love to eat ' . $food . '. Please buy me a ' . $food . '. You can buy me a ' . $Food . ' also.';

?>
 <br> 
      <!-- <?php  
      ECHO 'Hello world';
      ?> <br>
      <?php  
      Echo 'Hello world';
      ?> -->
      <?php 
      $age=10; //*valid
      $_age=10; //*valid
      // $7age=10; //*invalid
      $age7=10; //*valid
      //! N.B: Must not use special characters while declaring a variable
      ?>
      <?php 
      $age=25;
      $gender="female";
      $look="insane beauty";
      echo 'I Love Setara. She is '. $age.' years old. She is '.$look.'.';
      ?>
      <br>

      <?php 
$x = 13;
$y = 12;
$sum = $x + $y;
echo 'If x=' . $x . ' and y=' . $y . ' then summation of x and y is x+y=' . $sum . '<br>';
print 'If x=' . $x . ' and y=' . $y . ' then summation of x and y is x+y=' . $sum;
?>
<br>
<?php 
$food='Biriyani';
$drink='Borhani';
$snack='Burger';
 $food1=print $food;
 $drink1=print $drink;
 $snack1=print $snack;
 $snack2=print $snack;
 echo $food1;
 echo $drink1;
 echo $snack1;
 echo $snack2;



 //! diff between print vs echo...


?>
<br>

<hr>
<?php 
$name='Sayem';
$name1="It's me Sayem";
$age=27;
$age1=27.5;
$religious=true;
$fruits=array("apple", "banana", "mango", "orange");
$honesty=null;
var_dump($name);
var_dump($name1);
var_dump($age);
var_dump($age1);
var_dump($religious);
var_dump($fruits);
var_dump($honesty);


?>

<hr>
<?php
class machine {
      var $make;
      var $model;
      var $year;
function machineDetails($prop1,$prop2,$prop3){
     
      global  $make;
      global  $model;
      global  $year;
        $make =$prop1;
        $model= $prop2;
        $year= $prop3;
      echo "This is $make $model $year <br/>";
}
}

$myCar = new machine;
$myCar->machineDetails("Toyota", "Corolla", 2021);
$myPhone = new machine;
$myPhone->machineDetails("Honor", "C21", 2019);
$myPc = new machine;
$myPc->machineDetails("Walton ", "Prelude R9", 2020);




?>

<hr>
<?php 
// echo strlen( "I love to eat Pizza"); //19
// echo str_word_count( "I love to eat Pizza");  //5

// echo strrev( "I love to eat Pizza"); //azziP tae ot evol I
// echo strpos("I love to eat Pizza","eat");  //10
// $test= strpos("I love to eat Pizza","drink");  
// var_dump($test) //boolean false

// $test= strpos("I love to eat Pizza","eat");  
// var_dump($test) //10


// $test=str_replace("Burger","Pizza","I love to eat Pizza");  
// var_dump($test) //string 'I love to eat Pizza' (length=19)


// echo str_replace("Pizza","Burger","I love to eat Pizza");  //I love to eat Burger

?>
</body>
</html>




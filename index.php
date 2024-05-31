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
      //! N.B: Must not use specila characters while declaring a variable
      ?>
      <?php 
      $age=25;
      $gender="female";
      $look="insane beauty";
      echo 'I Love Setara. She is '. $age.' old. She is '.$look.'.';
      ?>
      <br>

      <?php 
      $x=13;
      $y=12;
      echo 'If x='.$x.' and y='.$y.' then summassion of x and y is x+y='.$x+$y;
      ?>
</body>
</html>




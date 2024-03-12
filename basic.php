<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>hi</h1>
   <?php
      echo "hi";

      $var1=5;
      $var2=10;
      echo '<br>';
      echo "The variable1 is : " ;
      echo '<br>';

      echo "The variable is :";
      echo '<br>';
      echo "Are they are equal 1==7";
      echo var_dump(1==7); //used to find type of comparision (true or false)
      echo '<br>';

    $var3=(true xor true);  //xor TT is F and TF is T
    echo var_dump($var3);  
      ?>
    
 <?php
    
      echo '<br>';
      echo "The variable is :";
     echo '<br>';
     echo $var1+$var2;
     
     ?>

</body>
</html>
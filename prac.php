<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="prac.php" method="get">
     <input type="text" name="name" placeholder="Enter your name"><br>
     color:<input type="text" name="color"><br>
     celebrity:<input type="text" name="celebrity"><br>
     love:<input type="text" name="love"> <br>

     <input type="submit" value="Submit">
    


    </form>

    
<!-- 
//   if(isset($_GET["name"])){ //check karo ki user ne name daal hai ya nahi. check value is presnet is not null.
//    $name=$_GET["name"];
//     echo "Hello $name,  welcome to my page!";
//   }

//I want to print user defined color, love, and celebrity name -->
<?php
$color= $_GET["color"];
$celebrity= $_GET["celebrity"];
$love= $_GET["love"];


echo "Roses are $color . <br>";
echo "I $love this $color of rose.<br>";
echo "i love $celebrity .<br>";


?>

</body>
</html>


   

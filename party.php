<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops and Statement</title>
    <style>
        h1::before {  
            transform: scaleX(0);
            transform-origin: bottom right;
        }

        h1:hover::before {
            transform: scaleX(1);
            transform-origin: bottom left;
        }

        h1::before {
            content: " ";
            display: block;
            position: absolute;
            top: 0; right: 0; bottom: 0; left: 0;
            inset: 0 0 0 0;
            background: hsl(200 100% 80%);
            z-index: -1;
            transition: transform .3s ease;
        }

        h1 {
            position: relative;
            font-size: 5rem;
        }

        html {
            height: 100%;
            width: 100%;
        }

        body {
            min-height: 100%;
            min-width: 100%;
            margin: 0;
            box-sizing: border-box;
            display: grid;
            place-content: center;
            font-family: system-ui, sans-serif;
        }

        @media (orientation: landscape) {
            body {
                grid-auto-flow: column;
            }
        }
    </style>
</head>
<body>
    <h1>Check your party status</h1>

    <?php
    //    $age=50;
    //         if ($age > 18) {
    //             echo "You are invited";
    //         } elseif ($age > 50 && $age < 90) {
    //             echo "You will get bored";
    //         } else {
    //             echo "You are invited";
    //         }
        
            //creating the array
            // $arry= array("apple", "orange");
            // echo $arry[0];
            // echo count($arry);
            $a = 0;
            while ($a <= 10) {
                echo  "<br> The value of a is: " . $a;
                $a++;
            }


            function print5($num){
                echo "<br> The numbers are:".$num;
            }
            print5(100);
           

            $str="hello ji";
            echo $str;
            $length= strlen($str);
            echo "<br> the length of string is ". $length;            

    ?>

   
</body>
</html>

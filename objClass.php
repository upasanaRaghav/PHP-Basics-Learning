<?php
//inherihence

include('extra.html');

class Food {
    function createFood(){
        echo "Please create pasta";
    }
}

class Chef extends Food {
    function createChole(){
        echo "This is the chole bhature";
    }
}

$chef1 = new Chef();
$chef1->createFood(); // Inheriting and calling the createFood function

?>

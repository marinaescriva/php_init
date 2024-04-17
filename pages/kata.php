<?php

for ($i=0; $i < 100 ; $i++) { 

if($i%3 === 0 && $i%5 === 0){
    echo "fizzbuzz";
    echo "<br>";
}
   
elseif($i%3 === 0){
    echo "fizz";
    echo "<br>"; #salto de linea
}
elseif( $i%5 === 0){
    echo "buzz";
    echo "<br>"; #salto de linea
}
else {
    echo $i ."<br>";
}
}

?>
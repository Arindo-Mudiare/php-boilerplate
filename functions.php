<!-- function with param -->
<?php

function sayHello($name = 'World'){
  echo "Hello $name<br>";
}

sayHello();

// SWITCH STATEMENTS

$favColor = 'green';

switch($favColor){
  case 'red':
       echo 'Your favourite color is red';
       break;
       case 'blue':
       echo 'Your favourite color is blue';
       break;
       case 'green':
       echo 'Your favourite color is green';
       break;
       default:
       echo 'Your favourite color is offkey';
       break;
}

?>
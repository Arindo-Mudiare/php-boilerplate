<?php
// LOOPS

// For Loop
// for($i = 0;$i < 10;$i++){
//   echo 'Number: '.$i;
//   echo '<br>';
// }

// // While loop
// $i = 0;

// while($i < 10) {
//   echo $i;
//   echo '<br';
//   $i++;
// }
// // do..while loop 
// $i = 0;

// do{
//   echo $i;
//   echo '<br';
//   $i++;
// }

// while($i < 10);

// for each loop
// $mobilebrands = array('Nokia','Samsung','Xiaomi','Apple');

// foreach ($mobilebrands as $brand) {
//   echo $brand;
//   echo '<br>';
// }
// associative for each

$langs = array('Javascript' => '100','Java' => '90','dotnet' => '70','Python' => '65');
// echo $langs[0];
foreach ($langs as $lang => $value) {
  echo $lang.': '.$value;
  echo '<br';
}
?>


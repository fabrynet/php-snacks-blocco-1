<?php

// Snack 4
// Creare un array con 15 numeri casuali, tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta

$randomArray = [];

while (count($randomArray) < 15) {
  $number = rand(0,100);
  if (!in_array($number, $randomArray)) {
    $randomArray[] = $number;
  }
}

 ?>
<h1>Random Array</h1>
<ol>
  <?php
  foreach ($randomArray as $number) {
    echo "<li> => ".$number."</li>";
  }
   ?>
</ol>

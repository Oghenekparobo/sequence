<?php

function sequence()
{

  if (isset($_POST['submit'])) {
    $numbers = $_POST['numbers'];
    $arr1 = explode(",",  $numbers);
    $values = array_count_values($arr1);
 
   foreach($values as $index => $value ){
    echo $index . " - " . $value.'<br>';
   }   
  }
}

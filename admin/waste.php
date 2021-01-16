<?php  
include_once '../product.php';
 
$try = new product();
$me=$try->decode_data();
$row = $me->num_rows;

for($i=0;$i<$row;$i++){
  $resultobj = $me->fetch_assoc();
  $me2=$resultobj['description'];
 
  $decode=json_decode($me2);

 // echo $decode->u.'<br>';
  echo $decode->language.'<br>';

}

 //var_dump(json_decode($me));


 ?>

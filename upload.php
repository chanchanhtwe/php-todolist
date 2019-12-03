<?php

$img=$_FILES['image'];
//print_r($img);

//$img_name=$img['name']; //possible image overwrite
$img_name=date("dymhis")."-".$img['name'];//store with date and image name
$img_tmp=$img['tmp_name'];

move_uploaded_file($img_tmp,"images/$img_name"); //images folder exit in the project folder

header("location:index.php");

?>




























<?php

$name=$_GET['img_name'];

unlink("images/$name");

header("location:index.php");

?>
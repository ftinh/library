<?php
include 'config.php';

//code


$result=mysqli_query($con, $query);
header('location:senarai_buku.php');

?>
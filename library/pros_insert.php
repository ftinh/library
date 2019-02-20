<?php

//code

if (mysqli_query($con,$query)) {
echo"Data berjaya direkod";
header('location:senarai_buku.php');
}
else{
	echo"data tidak berjaya direkod";
}
?>

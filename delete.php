<?php


include 'mydbCon.php';

$query = "DELETE FROM customers WHERE custId='" . $_GET["custId"] . "'"; 

 if (mysqli_query($dbCon, $query)) {
    $msg = 3;
 } else {
    $msg = 4;
 }

header ("Location: customers.php?msg=".$msg."");


?>
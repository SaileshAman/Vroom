<?php 

include 'config.php';
session_start();

$sid = $_POST['sid'];
$custid = "";
$sqlBase = "SELECT * FROM services WHERE servid='$sid'";
$resultBase = mysqli_query($conn, $sqlBase);
if($row = mysqli_fetch_assoc($resultBase)) {
    $cid = $row['custid'];  $mid = $row['mechid'];
    
    $sql1 = "SELECT * FROM customers WHERE custif='$cid'";
	$result1 = mysqli_query($conn, $sql1);
    $row1 = mysqli_fetch_assoc($result1);
    $cnt = $row1['requests']; $cnt--;
    $sql1 = "UPDATE customers SET requests='$cnt' WHERE custid='$cid'";
	$result1 = mysqli_query($conn, $sql1);

    $sql2 = "SELECT * FROM mechanics WHERE mechid='$mid'";
	$result2 = mysqli_query($conn, $sql2);
    $row2 = mysqli_fetch_assoc($result2);
    $cnt = $row2['services']; $cnt--;
    $sql2 = "UPDATE mechanics SET services='$cnt' WHERE mechid='$mid'";
	$result2 = mysqli_query($conn, $sql2);

    $sql3 = "DELETE FROM services WHERE servid='$sid'";
    $result3 = mysqli_query($conn, $sql3);
}

header("Location: cust.php");
?>
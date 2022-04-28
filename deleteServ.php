<?php 

include 'config.php';
session_start();

$sid = $_POST['sid'];
$
$custid = "";
$sqlBase = "SELECT * FROM services WHERE servid='$sid'";
$resultBase = mysqli_query($conn, $sqlBase);
if($row = mysqli_fetch_assoc($resultBase)) {
    $cid = $row['custid'];  $mid = $row['mechid'];
    $sql3 = "DELETE FROM services WHERE servid='$sid'";
    $result3 = mysqli_query($conn, $sql3);
    
    $sql1 = "SELECT * FROM services WHERE custid='$cid'";
	$result1 = mysqli_query($conn, $sql1);
    $cnt = mysqli_num_rows($result1);
    $sql1 = "UPDATE customers SET requests='$cnt' WHERE custid='$cid'";
	$result1 = mysqli_query($conn, $sql1);

    $sql2 = "SELECT * FROM servies WHERE mechid='$mid'";
	$result2 = mysqli_query($conn, $sql2);
    $row2 = mysqli_num_rows($result2);
    $sql2 = "UPDATE mechanics SET services='$cnt' WHERE mechid='$mid'";
	$result2 = mysqli_query($conn, $sql2);
}

if (isset($_SESSION['email']) && $_SESSION['type'] == "customers")
    header("Location: cust.php");
else if (isset($_SESSION['email']) && $_SESSION['type'] == "mechanics")
    header("Location: mech.php");
?>
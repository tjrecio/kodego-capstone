<?php

session_start();
require 'config.php';

if(isset($_POST['mededit']))
{

$storeID = mysqli_real_escape_string($link, $_POST['storeid']);
// $avlpre = mysqli_real_escape_string($link, $_POST['avlpre']);
$medicine = mysqli_real_escape_string($link, $_POST['medicine']);
$avlpost = mysqli_real_escape_string($link, $_POST['avlpost']);

// test only
// echo $storeID . "\r";
// echo $medicine . "\n";
// echo $avlpost . "\n";
//

$query8 = "UPDATE inventory090822 SET `$medicine` = $avlpost WHERE inventory090822.storeid = '$storeID'";

// $query8 = "UPDATE inventory090822 SET `medicine 1` = 0 WHERE inventory090822.storeid = 'CDRR-NCR-DS-100161'";

if($query_run8 = mysqli_query($link, $query8)){
  if($query_run8){
    $errormessage = "Update successful.";
    header("Location: dashboard090622.php");
    exit(0);
  } else{
    $errormessage = "Update failed.";
    header("Location: dashboard090622.php");
    exit(0);
  }

}else{
  $errormessage = "Update failed.";
  header("Location: dashboard090622.php");
  exit(0);
};




}

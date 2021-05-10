<?php

//Connect to db
include "conn.php";
session_start();
//Set $_POST value
$title = $_POST['title'];
$description = $_POST['description'];
$image = $_POST['image'];
$price = $_POST['price'];

//sql query -> add stuff
$sql = "INSERT INTO candles (`title`, `description`, `image`, `price`) VALUES ('".$title."','".$description."','".$image."','".$price."')";

//return to form
if ($conn->query($sql) === TRUE) {
    $_SESSION['addPrompt'] = "Completed successfully";
    if(isset($_REQUEST["destination"])){
      header("Location: {$_REQUEST["destination"]}");
    }else if(isset($_SERVER["HTTP_REFERER"])){
      header("Location: {$_SERVER["HTTP_REFERER"]}");
     }else{
    header("Location:index.php");
    }               
} else {
  $_SESSION['addPrompt'] = "Not successful";
  echo "Error: " . $sql . "<br>" . $conn->error;
}
  $conn->close();
  
?>
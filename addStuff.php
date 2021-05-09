<?php
//Connect to db
include "conn.php";

//Set $_POST value
$title = $_POST['title'];
$description = $_POST['description'];
$image = $_POST['image'];
$price = $_POST['price'];

//Check _POST variables
//if(){
  
//}

//sql query -> add stuff
$sql = "INSERT INTO candles (`title`, `description`, `image`, `price`) VALUES ('".$title."','".$description."','".$image."','".$price."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();
  
?>
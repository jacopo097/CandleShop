<?php
//Connect to db
include "conn.php";

$sql = "INSERT INTO candles (`title`, `description`, `image`, `price`) VALUES (".$_POST['title'].",".$_POST['description'].",".$_POST['image'].",".$_POST['price'].")";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();
  
?>
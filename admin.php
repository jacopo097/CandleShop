<?php
//Connect to db
include "conn.php";
session_start();
?>

<html>
<head>
<!-- add css -->
<link rel="stylesheet" href="styles/style.css">
<!-- add Bootstrap  -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

<meta charset="UTF-8">  

<title>CandleShop</title>

</head>

<body>

<div class="container mw-100 border">
    <?php

        if(isset($_SESSION['addPrompt'])){
            echo $_SESSION['addPrompt'];
            unset($_SESSION['addPrompt']);
        }
    ?>
    <h4>Dodaj towar</h4>
    <!-- Form for adding article -->
    <form action="addStuff.php" method="POST">
        <input type="hidden" name="destination" value="<?php echo $_SERVER["REQUEST_URI"]; ?>"/>
        Nazwa: <input type="text" name="title" required="required" minlength="3" maxlength="950"><br />
        Opis: <textarea name="description" rows="5" required="required" minlength="3" maxlength="1450"></textarea><br />
        Grafika: <input type="text" name="image" required="required" minlength="3" maxlength="95"><br />
        Cena: <input type="text" name="price" required="required" min="0"><br />
        <input type="Submit">
    </form>
</div>
     
<!-- add Bootstrap -->    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
<!-- add jquery -->  
<script src="scripts/jquery-3.6.0.min.js"></script>
<!-- add script file -->
<script src="scripts/main.js"></script>

</body>
</html>
<?php
//Close db
mysqli_close($conn);
?>
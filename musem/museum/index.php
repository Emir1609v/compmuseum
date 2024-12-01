<?php
  require_once("../includes/database.inc.php");
  $sql = "SELECT * FROM tb_museumstukken WHERE status = ?";
  $data = array(1);
  $result = Database::getData($sql, $data);

  $image = $result[0]['image']; 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stylesheet2.css">
    
</head>
<body>
    
</body>
</html>

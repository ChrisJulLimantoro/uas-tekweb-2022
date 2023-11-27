<?php
    $conn = new PDO('mysql:host=localhost;port=3306;dbname=db_uastekweb','root','');
    if ($conn === false){
        echo "Failed to connect!";
    }
?>
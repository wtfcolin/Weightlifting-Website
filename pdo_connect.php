<?php

$user = 'root';
	$pass = ''; 
	$db_info='mysql:host=localhost;dbname=moviestore';
	try {
   	 $moviestore = new PDO($db_info, $user, $pass);

	} catch (PDOException $e) {
    		print "Error!: " . $e->getMessage() . "<br/>";
   		 die();
	}

?>
<?php
$user = 'carlsonca20';
$pass = 'cc7893';
$dsn = 'mysql:host=washington.uww.edu;dbname=lifting-app';

try
{
    $db = new PDO($dsn, $user, $pass);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>

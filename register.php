<?php
include ('settings.php');




if( isset( $_POST['submit'] ) ){
$dbc = new mysqli ( $dbHost, $dbUser, $dbPass, $dbName);

$sql = "INSERT INTO user(fullname, username, password) 
VALUES('{$_POST['fname']}', '{$_POST['usern']}', '{$_POST['pass']}')";

$result = $dbc -> query( $sql );

$dbc -> close();
include ('view/!register.php');

}
else{
    include ('view/register.php');

}
?>

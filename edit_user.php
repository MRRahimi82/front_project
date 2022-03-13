<?php

include ('settings.php');

$id=$_GET['id'];

if( isset( $_POST['submit'] ) ){

$dbc = new mysqli ( $dbHost, $dbUser, $dbPass, $dbName);

$sql = "UPDATE user SET
       fullname = '{$_POST['fname']}',
       username = '{$_POST['usern']}',
       password = '{$_POST['pass']}'
       WHERE id ={$id} ";

$result = $dbc -> query( $sql );

$dbc -> close();
include ('view/!edit_user.php');

}
else{
    include ('view/edit_user.php');

}



?>
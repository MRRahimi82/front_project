<?php

include ('settings.php');
include ('lib/db.php');


$username=$_POST['usern'];
$password=$_POST['pass'];
if( isset( $_POST['submit'] ) ){

$dbc = new DB ( $dbHost, $dbUser, $dbPass, $dbName);
$sql="SELECT * FROM user WHERE username ='$username' and password='$password'";
$result= $dbc -> query($sql);
$row= $result -> fetchArray(); 
if($row)
{
    $_SESSION["state_login"] = true;
    $_SESSION["fullname"] = $row['fullname'];
    $_SESSION["username"] = $row['username'];
    $_SESSION["password"] = $row['password'];
    
    ?>

    <script type="text/javascript">
         location.replace("view/ticket.php");
        </script>
        
        <?php
       
}
    
else{
    echo (" کاربر یافت نشد") ;
}


$dbc -> close();
}
?>


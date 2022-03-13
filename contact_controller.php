  
     
<?php

include ('settings.php');


$dbc = new mysqli($dbHost,$dbUser,$dbPass,$dbName);

$sql = "INSERT INTO message (namee,phone,email,title,textt)
        VALUES('{$_POST['name']}','{$_POST['phone']}','{$_POST['email']}','{$_POST['title']}','{$_POST['textt']}')";

$result = $dbc -> query ($sql);

$dbc -> close();
echo('Thank you for your cooperation');

?>


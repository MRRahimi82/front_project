<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/style.css" type="text/css" rel="stylesheet"> 
    <script src="https://kit.fontawesome.com/8347ab5ff9.js" crossorigin="anonymous"></script>
    <title>کاربران</title>
   
</head>
<body>
    <h1>کاربران</h1>
    <table class = "datatable">
     <thead>
        <tr>
            <th>نام و نام خانوادگی</th>
            <th>شماره تلفن</th>
            <th>ایمیل</th>
            <th>عنوان پیام</th>
            <th>متن پیام </th>
            <th> اعمال </th>
        </tr>
    </thead>
    <tbody>
    <?php
        if( count( $massages ) == 0 ){
            echo '<p>کاربری یافت نشد</p>';
        }
        else{
            foreach( $massages as $massage ){          
                include ('template/massege_row.php');
            }
        }
    ?>
    </tbody>
    </table>
</body>
</html>
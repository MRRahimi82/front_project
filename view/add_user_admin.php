<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="../assets/style.css" type="text/css" rel="stylesheet">
    <link href="../assets/styles.css" type="text/css" rel="stylesheet"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>فرم ثبت نام</title>
    <style>
        
    </style>
</head>
<body>
    <p>فروشگاه کیف و کفش رحیمی</p>
    
    <form action="../add_user_admin.php" method="post">
        <p> فرم ثبت نام کاربر</p>
        <div>
            <label for="fname">نام کامل</label>
            <input type="text" name="fname" id="fname" placeholder="محمد رحیمی" >
        </div>
        <div>
            <label for="usern">نام کاربری</label>
            <input type="text" name="usern" id="usern" placeholder="Mr.rahimi82" >
        </div>
        <div>
            <label for="pass">کلمه عبور</label>
            <input type="password" name="pass" id="pass" placeholder="Mr12345" >
        </div>
        <div>
            <label for = "email">آدرس ایمیل: </label>
            <input type = "email" name = "email" id = "email">
        </div>
        
        <button type="submit" name = "submit" class="btn"> ثبت نام کاربر</button>
    </form>
</body>
</html>
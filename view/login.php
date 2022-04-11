<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="../assets/style.css" type="text/css" rel="stylesheet">
    <link href="../assets/styles.css" type="text/css" rel="stylesheet"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/8347ab5ff9.js" crossorigin="anonymous"></script>
    <title> ناحیه کاربری</title>
    
</head>
<body>
    <p> فروشگاه کیف و کفش رحیمی</p>
    <h1>ناحیه کاربری</h1>
    <form action="../login.php" method="post">

        <div>
            <label for="usern">نام کاربری </label>
            <input type="text" name="usern" id="usern" placeholder="Mr.rahimi82"  >
        </div>

        <div>
            <label for="pass"> رمز عبور </label>
            <input type="password" name="pass" id="pass" placeholder="Mr12345" >
        </div>
        <button type="submit" name="submit" class="btn"><i class="fa-solid fa-heart"></i> ورود</button>
        <button type="reset" name="reset" class="btn"><i class="fa-solid fa-heart"></i> جدید</button>
        <br>
        <a href=""> فراموشی رمز عبور</a>
    </form>
</body>
</html>
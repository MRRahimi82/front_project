<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>فرم ثبت نام</title>
    <style>
        body{
    direction: rtl;
    text-align: center;
    background-image: url("signup.jpg");
    background-size: cover ;
    color: blue;
    font-family: 'B Titr';
    
}
          p{
    font-size: 30px;;        
 }
  form{
    background-color: white;
    border-style: solid;
    border-bottom-left-radius: 30px;
    border-top-right-radius: 30px;
    width: 700px;
    margin-left: auto;
    margin-right: auto;
    
  }
  label{
      display: inline-block;
      width: 100px;
  }

  form div *{

vertical-align: middle;
border-radius: 20px;
height: 30px;
width: 300px;
margin: 5px;
font-family: 'B Titr';
}
#t1{
    font-family: 'B Titr';
    margin: 5px;
    padding: 5px;
    right: 200px;;
}
    </style>
</head>
<body>
    <p>فروشگاه کیف و کفش رحیمی</p>
    
    <form action="../register.php" method="post">
        <p> فرم ثبت نام</p>
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
        <button type="submit" name = "submit" id="t1">ثبت نام</button>
    </form>
</body>
</html>
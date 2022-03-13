<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> ناحیه کاربری</title>
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
    padding: 20px;
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
}
button{
    font-family: 'B Titr';
    margin: 5px;
    padding: 5px;
    right: 200px;;
}
    </style>
</head>
<body>
    <p> فروشگاه کیف و کفش رحیمی</p>
    <h1>ناحیه کاربری</h1>
    <form action="" method="post">

        <div>
            <label for="usern">نام کاربری </label>
            <input type="text" name="usern" id="usern" placeholder="Mr.rahimi82"  >
        </div>

        <div>
            <label for="pass"> رمز عبور </label>
            <input type="text" name="pass" id="pass" placeholder="Mr12345" >
        </div>
        <button type="submit" name="submit" >ورود</button>
        <button type="reset" name="reset">جدید</button>
        <br>
        <a href=""> فراموشی رمز عبور</a>
    </form>
</body>
</html>
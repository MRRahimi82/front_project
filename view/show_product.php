<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/style.css" type="text/css" rel="stylesheet"> 
    <script src="https://kit.fontawesome.com/8347ab5ff9.js" crossorigin="anonymous"></script>
    <title>محصولات</title>
   
</head>
<body>
    <h1>محصولات</h1>
    <div class="cards">
    <?php
        if( count( $products ) == 0 ){
            echo '<p>محصولی یافت نشد</p>';
        }
        else{
            foreach( $products as $product ){          
                include 'product_card.php';
            }
        }
    ?>
    </div>
</body>
</html>
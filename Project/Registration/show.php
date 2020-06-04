<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style1.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="parallax.min.js"></script>
</head>
<body>
    <div class="grid-container">
        <div class="header">
        <div class="parallax" data-parallax="scroll" data-z-index="1" data-image-src="unnamed.png"></div>
        <div class="topnav">
            <a href="">კონტაქტი</a>
            <a href="http://localhost:8084/Project/Registration/login.php">ავტორიზაცია</a>
            <a href="http://localhost:8084/Project/Registration/reg.php">რეგისტრაცია</a>
            <a href="">ავეჯი</a>
            <a href="http://localhost:8084/Project/Repair/Repair.php">რემონტი</a>
            <a href="http://localhost:8084/Project/Us/us.php">ჩვენს შესახებ</a>
            <a href="http://localhost:8084/Project/main/">მთავარი</a>
        </div>
        <img src="capture.png" class="img1">
        </div>
        <div class="body">
            <img src="user.jpg" alt="">
            <form hidden action="reg.php" method="post" class="form">
            <p>რეგისტრაცია</p>
            <input type="text" name="name"  placeholder="სახელი და გვარი">
            <br><br>                
            <input type="number" name="phone" placeholder="ტელეფონის ნომერი">
            <br><br>
            <input type="email" name="email" placeholder="ელ.ფოსტა">
            <br><br>  
            <input type="password" name="pass" placeholder="პაროლი">
            <br><br>
            <input type="password" name="confirm" placeholder="გაიმეორეთ პაროლი">
            <br><br>
            <input type="submit" name="submit" value="Submit">
        </form>
        </div>
        <div class="footer">
        <div class="parallax1" data-parallax="scroll" data-z-index="1" data-image-src="unnamed.png">
            <div class="icons">
                <a href=""><img class="i1" src="facebook.png"></a>
                <a href=""><img class="i2" src="ui.png"></a>
                <a href=""><img class="i3" src="youtube.png"></a>
            </div>
        </div>
    </div>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en" drt="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        <?php

        include '../style.css';
        include '../slideshow.css';
        include '../nav.css';
        include '../welcome.css';
        include '../btn.css';
        include '../catbox.css';
        include '../pages.css';
        include '../cakesl1.css';
        include 'connectionss.php';
        include 'cakesl1stl.css';

        // <link rel="stylesheet" href="../style.css">
        // <link rel="stylesheet" href="../slideshow.css">
        // <link rel="stylesheet" href="../nav.css">
        // <link rel="stylesheet" href="../welcome.css">
        // <link rel="stylesheet" type="text/css" href="../btn.css">
        // <link rel="stylesheet" href="../catbox.css">
        // <link rel="stylesheet" href="pages.css">
        // <link rel="stylesheet" href="cakesl1.css">
        ?>
    </style>
</head>

<body>

    <nav class="navbar he">
        <div class="brand-title"><img src="Background.svg" alt=""></div>
        <a href="#" class="toggle-button">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </a>
        <div class="navbar-links">
            <ul>
                <li class="nv"><a href="../index.html">HOME</a></li>
                <li class="nv"><a href="../menu.html">MENU</a></li>
                <li class="nv"><a href="../contact.html">CONTACT US</a></li>
            </ul>
        </div>
    </nav>
<div class="cont">
    <div class="imges">
    <img src="../images/crop.jpeg" alt="">
    </div>


    <?php
    if (isset($_POST['submit'])) {

        $cakename1 = $_POST['cakename1'];
        echo "cake name:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$cakename1."<br>";
        if (isset($_POST['flavours'])) {
            $flavours = $_POST['flavours'];
            echo "Flavours:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp". $flavours . "<br>";
        }

        $flavours = $_POST['flavours'];

        if (isset($_POST['filling'])) {

            $filling = $_POST['filling'];
            echo "Filling:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp". $filling . "<br>";
        }

        $filling = $_POST['filling'];


        
        $words = $_POST['words'];
        echo "Words:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$words."<br>";
        $size = $_POST['size'];
      


        if ($size == 200) {
            $size_curr = "6 inch";
            echo "Cake size:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp". $size_curr . "<br>";
            
        } else if ($size == 250) {
            $size_curr = "7 inch";
            echo "Cake size:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp". $size_curr . "<br>";
            
        } else if ($size == 300) {
            $size_curr = "8 inch";
            echo "Cake size:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp". $size_curr . "<br>";
           
        } else if ($size == 400) {
            $size_curr = "10 inch";
            echo "Cake size:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp". $size_curr . "<br>";
            
        }

       
        $qty = $_POST['qty'];
        echo "Quantity:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$qty."<br>";
        $price = $_POST['price_hidden'];
        echo "SAR:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$price."<br>";
        $name=$_POST['name'];
        echo "Name:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".  $name."<br>";
       
        $phonenumber=$_POST['phonenumber'];
        echo "Number:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".  $phonenumber."<br>";
        
        $addresss=$_POST['addresss'];
        echo "address:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$addresss."<br>";
        $email=$_POST['email'];
        echo "email:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp". $email."<br>";
   
        
        $insertquery="insert into cakeorders(Name,Phone,Email,Address,cakesname,Flavour,Filling,Words3,Sizeofcake,Qty,Price	) values
        (' $name','$phonenumber','$email',' $addresss',' $cakename1','$flavours',' $filling',' $words ','$size_curr', '$qty','  $price')";
        
        $res=mysqli_query($con,$insertquery);
        
    }


  
    

    ?>


</div><!-- //count -->

<section>
        <div class="orderpage">
            <div>
                <h2 class="light">FOLLOW US </h2>
            </div>
            <div>
               


                <h2 class="number">
                    <i class="fab fa-instagram mi" onclick="location.href='https://www.instagram.com/om_rayan_event/';"></i> 
                    <i class="fab fa-whatsapp mi" onclick="location.href='https://api.whatsapp.com/message/BBQMGZ6ICLMSN1';"></i> 
                    <i class="fas fa-mobile-alt mi"></i> 
                    <!-- 0549366343 -->
                </h2>
            </div>
         
        </div>
    </section>

<script src="https://kit.fontawesome.com/e69b69d2e3.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../nav.js"></script>
    <script type="text/javascript" src="../app.js"></script>
    
</body>

</html>
<?php
session_start();
//Page 1

global $name,$age,$email,$address;

    $_SESSION["address"]=$_POST["test_address"];
$_SESSION["address_time"]=$_POST["time_spent"];


$name=$_SESSION["name"];
$address=$_SESSION["address"];
//$time1=$_SESSION["name_time"];
//$time2=$_SESSION["age_time"];
//$time3=$_SESSION["email_time"];
//$time4=$_SESSION["address_time"];
//echo $name,$age,$address,$email;

$db = new mysqli("playground.eca.ed.ac.uk","s1803591","dS9N11BVf8","s1803591");

$SQL ="insert into privacy (name,address) values ('$name','$address')";

$in_result= $db->query($SQL);
$_SESSION["id"]=mysqli_insert_id($db);
//echo $_SESSION["id"];
//$id ="select id from privacy where name='$name',age='$age',address='$address',email='$email'";
//$id=$db->query($SQL);
//$_SESSION["id"]=$id;


//

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Private Space</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/fontAwesome.css">
    <link rel="stylesheet" href="css/templatemo-style.css">

    <link href="https://fonts.googleapis.com/css?family=Kanit:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

    <!--Form-->
    <!-- //for-mobile-apps -->
    <link href='//fonts.googleapis.com/css?family=Questrial' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/j-forms.css">
    <link href="css/formstyle.css" rel="stylesheet" type="text/css" media="all" />

</head>

<body style="background-image: url(img/game.jpg); background-size: 100% 100%;">

<!--<div class="video-container">-->
<!--    <div class="video-overlay"></div>-->
<!--    <div class="video-content">-->
<!--        <div class="inner">-->
<!--            <h1>Hello,  <em>--><?php //echo $name ?><!--</em></h1>-->
<!--            <p>Let's play a game? </p>-->
<!--            <div class="scroll-icon">-->
<!--                <a class="scrollTo" data-scrollTo="portfolio" href="#"><img src="img/scroll-icon.png" alt=""></a>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--    <video autoplay loop muted>-->
<!--        <source src="public.mp4" type="video/mp4" />-->
<!--    </video>-->
<!--</div>-->


<div class="full-screen-portfolio" id="portfolio">
    <div class="video-container">
        <div class="video-overlay"></div>
        <div class="video-content">
            <div class="inner">
                <h1>Hello,  <em><?php echo $name ?></em></h1>
                                    <p>Game Start </p>
                <div class="scroll-icon">
                    <a class="scrollTo"  href="public_que.php"><img src="img/scroll-icon-next.png" alt=""></a>
                </div>
            </div>
        </div>
        <video autoplay loop muted>
            <source src="img/eye.png" type="video/mp4" />
        </video>
    </div>
</div>


<script src="https://cdn.bootcss.com/jquery/1.11.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

<script src="js/vendor/bootstrap.min.js"></script>

<script src="js/plugins.js"></script>
<script src="js/main.js"></script>


</body>
</html>
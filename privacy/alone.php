<?php session_start();

$_SESSION["murder_video_time"]=$_POST["time_spent"];

$id=$_SESSION["id"];
$time0=$_SESSION["policy"];
$email=$_SESSION["email_time"];
$time1=$_SESSION["name_time"];
$time4=$_SESSION["address_time"];
$time5=$_SESSION["public_video_time"];
$time6=$_SESSION["toilet_que_time"];
$time7=$_SESSION["toilet_video_time"];
$time8=$_SESSION["bath_que_time"];
$time9=$_SESSION["bath_video_time"];
$time10=$_SESSION["bed_que_time"];
$time11=$_SESSION["bed_video_time"];
$time12=$_SESSION["murder_que_time"];
$time13=$_SESSION["murder_video_time"];

$db = new mysqli("playground.eca.ed.ac.uk","s1803591","dS9N11BVf8","s1803591");

$SQL ="update privacy set policy_html='$time0',name_html='$time1',address_html='$time4', public_video='$time5', toilet_que='$time6', toilet_video='$time7',bath_que='$time8',bath_video='$time9',bed_que='$time10',bed_video='$time11', murder_que='$time12',murder_video='$time13' where id=$id";
$in_result= $db->query($SQL);

//echo $SQL;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Privacy Space</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/fontAwesome.css">
    <link rel="stylesheet" href="css/templatemo-style.css">

    <link href="https://fonts.googleapis.com/css?family=Kanit:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <!--    check box-->
    <link rel="stylesheet" href="css/jquery-labelauty.css">
    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

    <!--Form-->
    <!-- //for-mobile-apps -->
    <link href='//fonts.googleapis.com/css?family=Questrial' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/j-forms.css">
    <link href="css/formstyle.css" rel="stylesheet" type="text/css" media="all" />
    <style>
        ul { list-style-type: none;}
        li { display: inline-block;}
        li { margin: 10px 0;}
        input.labelauty + label { font-size: 15px ;}
    </style>

</head>

<body>

<!--<nav>-->
<!--<div class="logo">-->
<!--<a href="index.html">High<em>way</em></a>-->
<!--</div>-->
<!--<div class="menu-icon">-->
<!--<span></span>-->
<!--</div>-->
<!--</nav>-->

<div class="video-container" style="background-image: url(img/public.png); background-size: 100%;">
    <div class="video-overlay"></div>
    <div class="video-content">
        <div class="inner">
            <h1><em>Don't fool yourself,</em> </h1>
            <h1>You are never alone.</h1>
            <div class="scroll-icon"  style="margin-top:40px;">
                <a class="scrollTo" data-scrollTo="portfolio" href="#"><img src="img/scroll-icon.png"
                                                                            alt=""></a>
            </div>
        </div>
    </div>


    <video autoplay loop muted>
            <source src="video2.mp4" type="video/mp4" />
     </video>
</div>

<div class="video-container"  id="portfolio" style="background-image: url(img/eye.png); background-size: 100%;">

    <div class="video-content">
        <div class="inner">
            <h1><em> <?php echo $_SESSION["name"]; ?>,</em> </h1>
            <h1>LOOK BACk.</h1>
<!--            <h1 style="font-weight: bold;" >--><?php //echo $score ?><!--</h1>-->

            <p></p>
            <p></p>
            <div class="scroll-icon">
                <form action="end.html" method="post">
                <!--<a class="scrollTo" href=""><img src="img/next.png" alt=""></a>-->
                <input type="image" name="" src="img/scroll-icon-next.png" Oninclick="document.formName.submit()">
                    </form>
            </div>


        </div>
    </div>
<!--    <video autoplay loop muted>-->
<!--              <source src="highway-loop3.mp4" type="video/mp4"/>-->-->
<!--        <source src="public.mp4" type="video/mp4"/>-->
<!--    </video>-->
</div>










<script src="https://cdn.bootcss.com/jquery/1.11.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

<script src="js/vendor/bootstrap.min.js"></script>

<script src="js/plugins.js"></script>
<script src="js/main.js"></script>
<script src="js/jquery-1.8.3.min.js"></script>
<script src="js/jquery-labelauty.js"></script>
<script>
    $(function(){
        $(':input').labelauty();
    });
</script>
</body>
</html>
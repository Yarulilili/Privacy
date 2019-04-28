<?php session_start();
$name=$_SESSION["username"];
$age=$_SESSION["age"];
$gender=$_SESSION["gender"];

//echo $name.$gender;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Privacy</title>
    <embed src="highway-loop3.mp4" hidden="true" autostart="true"/>
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

<body>

<!--<nav>-->
<!--<div class="logo">-->
<!--<a href="index.html">High<em>way</em></a>-->
<!--</div>-->
<!--<div class="menu-icon">-->
<!--<span></span>-->
<!--</div>-->
<!--</nav>-->

<div class="full-screen-portfolio" style="background:url('img/BG2.jpeg')">
    <div class="content">
        <h1>CONTACT INFORMATION</h1>
        <div class="main w3l">
            <!--<div class="im-g">-->
            <!--<img src="images/img1.jpg" alt="">-->
            <!--</div>-->
            <form action="session.php" method="post" class="contact-forms wthree">
                <!-- end /.header-->

                <!-- start name -->
                <div class="first-line agileits">
                    <div class="span6 main-row">
                        <div class="input">

                            <input type="text" id="email" name="email" placeholder="Email" required="">
                        </div>
                    </div>
                    <div class="span6 main-row">
                        <div class="input">

                            <input type="text" id="Phone" name="phone" placeholder="Phone" >

                        </div>
                    </div>
                </div>
                <div class="main-row">
                    <label class="input select">
                        <select name="country">
                            <option value="none" selected="" disabled="">Select country</option>

                            <option value="Australia">Australia</option>
                            <option value="China">China</option>
                            <option value="New Jersey">New Jersey</option>
                            <option value="Spain">Spain</option>
                            <option value="Switzerland">Switzerland</option>
                        </select>
                        <i></i>
                    </label>
                </div>

                <div class="main-row">
                    <label class="input select">
                        <select name="position">
                            <option value="none" selected="" disabled="">Select your job</option>

                            <option value="student">Student</option>
                            <option value="businessman"> Business</option>
                            <option value="professor">Professor</option>
                            <option value="doctor"> doctor</option>
                        </select>
                        <i></i>
                    </label>
                </div>

                <!-- start country -->

                <i></i>

                <div class="scroll-icon" style="margin-top: 45px;margin-left:45%;">
                    <a class="scrollTo" data-scrollTo="portfolio" href="#"><img src="img/scroll-icon.png" alt=""></a>
                </div>


        </div>

    </div>

</div>

<div class="video-container"  id="portfolio">
    <div class="video-overlay"></div>
    <div class="video-content">
        <div class="inner">
            <h1>Hi,<em><?php echo $name ?></em></h1>
            <p>Do you have anything to hide？</p>
            <p></p>
            <div class="next-icon">
                <!--<a class="scrollTo" href=""><img src="img/next.png" alt=""></a>-->
                <input type="image" name="" src="img/scroll-icon-next.png" Oninclick="document.formName.submit()">
            </div>


        </div>
    </div>
    <video autoplay loop muted>
        <source src="video2.mp4" type="video/mp4"/>
    </video>
</div>

</div>
</form>



<script src="https://cdn.bootcss.com/jquery/1.11.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

<script src="js/vendor/bootstrap.min.js"></script>

<script src="js/plugins.js"></script>
<script src="js/main.js"></script>
<script>
    $(document).ready(function(){

        // Phone masking
        $('#phone').mask('(999) 999-9999', {placeholder:'x'});

        // Post code masking
        $('#post').mask('999-9999', {placeholder:'x'});

    });
</script>

</body>
</html>
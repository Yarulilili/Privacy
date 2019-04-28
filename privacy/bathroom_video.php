<?php session_start();
$name = $_SESSION["name"];
$_SESSION["bath_que_time"]=$_POST["time_spent"];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <!--    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->
    <title>Privacy Space</title>
    <embed src="video/bathroom1.mp4" hidden="true" autostart="true"/>
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
<script language="javascript">

    var ap_name = navigator.appName;
    var ap_vinfo = navigator.appVersion;
    var ap_ver = parseFloat(ap_vinfo.substring(0,ap_vinfo.indexOf('(')));// 获取版本号
    var time_start = new Date();
    var clock_start = time_start.getTime();
    var dl_ok=false;
    function init (){
        if(ap_name=="netscape" && ap_ver>=3.0)
            dl_ok=true;
        return true;
    }
    //已经打开页面多少秒
    function get_time_spent (){
        var time_now = new Date();
        return((time_now.getTime() - clock_start)/1000);
    }
    function show_secs (){  // show the time user spent on the side
        var i_total_secs = Math.round(get_time_spent());
        var i_secs_spent = i_total_secs % 60;
        var i_mins_spent = Math.round((i_total_secs-30)/60);//四舍五入，超60s，大于0.5，四舍五入就是1min
        var s_secs_spent = "" + ((i_secs_spent>9) ? i_secs_spent : "0" + i_secs_spent);//改显示格式：个位数-> 0+个位数，如7->07
        var s_mins_spent ="" + ((i_mins_spent>9) ? i_mins_spent : "0" + i_mins_spent);
        document.fm0.time_spent.value = s_mins_spent + ":" + s_secs_spent;  //把值放入form中name为time_spent的input中
        window.setTimeout('show_secs()',1000);   //每隔1s刷新一次input里的值
    }

</script>
<body onload="init(); window.setTimeout('show_secs()',1);">

<div class="video-container"  id="portfolio">
    <div class="video-overlay"></div>
    <div class="video-content">
<!--        <div class="inner">-->
<!--            <h1>Bathroom <em>?</em></h1>-->
            <!--<p>Someone is watching you.</p>-->
            <p></p>
<!--            <div class="scroll-icon" >-->
                <form action="bathroom_bla.php" method="post" name="fm0" onsubmit="0">
                    <!--<a class="scrollTo" href=""><img src="img/next.png" alt=""></a>-->
                    <input type="image" name="" src="img/scroll-icon-next.png" Oninclick="document.formName.submit()" style="margin-top:25%; margin-left:90%;">
                    <input type="text" name="time_spent" size=7 onfocus="this.blur()" hidden="hidden">
                </form>
<!--            </div>-->


<!--        </div>-->
    </div>
    <video autoplay loop muted>
        <!--        <source src="highway-loop3.mp4" type="video/mp4"/>-->
        <source src="video/bathroom1.mp4" type="video/mp4"/>
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
<?php session_start();
$name = $_SESSION["name"];
$_SESSION["bed_video_time"]=$_POST["time_spent"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body bgcolor="black">
<form action="murder_que.php" method="post">
    <div class="scroll-icon">
        <input type="image" lass="scrollTo" name="" src="img/scroll-icon-next.png"
               Oninclick="document.formName.submit()" style="margin-left:90%; margin-top:30%;">
    </div>
</form>
</body>
</html>
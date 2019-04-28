<?php

session_start();
///SCORE
$score=$_SESSION["score"];
$db = new mysqli("playground.eca.ed.ac.uk","s1803591","dS9N11BVf8","s1803591");
//if($db)
//{
//    echo "success";
//}
//else{
//    echo "fail";


$SQL ="insert into pri_score (score) values ($score) ";
$in_result= $db->query($SQL);
//if($in_result){
//    echo "success";
//}
//else{
//    echo "fail";
//
//}

if ($score<60){
    header("Location:alone.php");

}
if ($score>60){
    header("Location:live.php");

}
$_SESSION["score"]=$score;
?>
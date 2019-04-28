<?php
/**
 * Created by PhpStorm.
 * User: yaruli
 * Date: 2019-03-08
 * Time: 11:44
 */


//if($_POST["first_name"]!="" || $_POST["last_name"]!=""){
//    $name=1;
//}
//else {
//    $name=0;
//}
//if($_POST["age"]!=""){
//    $age=1;
//}
//else{
//    $age=0;
//}
//if(empty($_POST['fgender'])){
//    $gender=0;
//}
//else{
//    $gender=1;
//}
//if($_POST["faddress"]!=""){
//    $address=1;
//}
//else{
//    $address=0;
//}
//if($_POST["email"]!=""){
//    $email=1;
//}
//else{
//    $email=0;
//}
//if($_POST["feducation"]!=""){
//    $education=1;
//}
//else{
//    $education=0;
//}
//if($_POST["job"]!=""){
//    $job=1;
//}
//else{
//    $job=0;
//}
//if($_POST["marital"]!="" || $_POST["children"]!=""){
//    $marital=1;
//}
//else{
//    $marital=0;
//}
//if(empty($_POST['health'])){
//    $health=0;
//}
//else{
//    $health=1;
//}
//if(empty($_POST['house'])){
//    $property=0;
//}
//else{
//    $property=1;
//}
//
//
//if(empty($_POST['cruise']) && empty($_POST['buff'])&&empty($_POST['travel'])){
//    $activities=0;
//}
//else{
//    $activities=1;
//}
//if(empty($_POST['search']) && empty($_POST['cards']) && empty($_POST['products'])&&empty($_POST['mobile'])){
//    $consumer=0;
//}
//else{
//    $consumer=1;
//}
//
//$SQL ="update privacy set name=name+$name, age=age+$age, gender=gender+$gender, address=address+$address, email=email+$email,education=education+$education, job=job+$job, marital=marital+$marital, health=health+$health, property=property+$property, activities=activities+$activities, consumer=consumer+$consumer";
//$in_result= $db->query($SQL);
////echo $SQL;

session_start();


if (empty($_POST["name"])) {
    $name=0;
}
else{
    $name = 1;
}
if (empty($_POST["age"])) {
    $age=0;
}
else{
    $age = 1;
}
if (empty($_POST["gender"])) {
    $gender=0;
}
else{
    $gender = 1;
}
if (empty($_POST["email"])) {
    $email=0;
}
else{
    $email = 1;
}
if (empty($_POST["phone"])) {
    $phone=0;
}
else{
    $phone = 1;
}
if (empty($_POST["code"])) {
    $code=0;
}
else{
    $code = 1;
}
if (empty($_POST["country"])) {
    $country=0;
}
else{
    $country = 1;
}
if (empty($_POST["job"])) {
    $job=0;
}
else{
    $job = 1;
}
if (empty($_POST["education"])) {
    $education=0;
}
else{
    $education = 1;
}
if (empty($_POST["family"])) {
    $family=0;
}
else{
    $family = 1;
}
if (empty($_POST["health"])) {
    $health=0;
}
else{
    $health = 1;
}
if (empty($_POST["property"])) {
    $property=0;
}
else{
    $property = 1;
}

$db = new mysqli("playground.eca.ed.ac.uk","s1803591","dS9N11BVf8","s1803591");
$SQL ="update privacy set name=name+$name, age=age+$age, gender=gender+$gender, address=address+$code, email=email+$email,education=education+$education, job=job+$job, family=family+$family, health=health+$health, property=property+$property,phone=phone+$phone, country=country+$country";
$in_result= $db->query($SQL);
header("Location:toilet_video.html");



//SCORE
global $score;
$score=100;
if($_POST["name"]!= null){
    $score=$score-8;
}
if($_POST["age"]!=null){

    $score=$score-8;
}
if($_POST["gender"]!=null){

    $score=$score-8;
}
if($_POST["email"]!=null){
    $score=$score-5;
}
if($_POST["phone"]!=null){
    $score=$score-8;
}
if($_POST["code"]){
    $score=$score-8;
}
if($_POST["country"]!=null){

    $score=$score-8;
}
if($_POST["job"]!=null){

    $score=$score-8;
}
if($_POST["education"]!=null){
    $score=$score-8;
}
if($_POST["family"]!=null){

    $score=$score-8;
}
if($_POST["health"]!=null){
    $score=$score-8;
}
if($_POST["property"]!=null){

    $score=$score-8;
}

$_SESSION["score"]=$score;





//else if(isset($_POST["marital"])) {
//    header("Location:index4.php");
//}
//$value = 0;

//&& isset($_POST["last_name"]) && isset($_POST["fgender"]) && isset($_POST["birthday"]) && isset($_POST["age"])
//&& isset($_POST["phone"]) && isset($_POST["address"]) && isset($_POST["country"])&& isset($_POST["position"]


//echo $country.$gender;
//$address = $_POST["faddress"];
//$email = $_POST["email"];
//$education = $_POST["feducation"];
//$job = $_POST["job"];
//$marital = $_POST["marital"];
//

//$_SESSION["address"] = $address;
//$_SESSION["email"] = $email;
//$_SESSION["education"] = $education;
//$_SESSION["job"] = "I'm ". $job;
//$_SESSION["marital"] = $marital;
//
//
////family & health
//if (empty($_POST["children"])) {
//    $children="";
//}
//else{
//    $children = $_POST["children"];
//}
//
//
//if (empty($_POST['health'])) {
//    $health = "";
//} else {
//    $health = implode(";", $_POST['health']);
//}
//
//$_SESSION["children"] = $children;
//$_SESSION["health"] = $health;
//
//
////property
//if (empty($_POST["house"])) {
//    $house="";
//}
//else{
//    $house=$_POST["house"];
//}
//if (empty($_POST["change"])) {
//    $change="";
//}
//else{
//    $change=$_POST["change"];
//}
//
//$_SESSION["house"] = $house;
//$_SESSION["change"] = $change;
//
//
////activities
//if (empty($_POST["cruise"])) {
//    $cruise="";
//}
//else{
//    $cruise=$_POST["cruise"];
//}
//
//if (empty($_POST["buff"])) {
//    $buff="";
//}
//else{
//    $buff=$_POST["buff"];
//}
//if (empty($_POST["travel"])) {
//    $travel="";
//}
//else{
//    $travel=$_POST["travel"];
//}
//
//$_SESSION["cruise"]=$cruise;
//$_SESSION["buff"]=$buff;
//$_SESSION["travel"]=$travel;
//
//
////consumer
//if (empty($_POST['search'])) {
//    $search = "";
//} else {
//    $search = implode(";", $_POST['search']);
//}
//
//if (empty($_POST['products'])) {
//    $products = "";
//} else {
//    $products = implode(";", $_POST['products']);
//}
//
//if (empty($_POST["cards"])) {
//    $cards="";
//}
//else{
//    $cards=$_POST["cards"];
//}
//
//if (empty($_POST["mobile"])) {
//    $mobile="";
//}
//else{
//    $mobile=$_POST["mobile"];
//}
//$_SESSION["cards"]=$cards;
//$_SESSION["mobile"]=$mobile;
//$_SESSION["search"]=$search;
//$_SESSION["products"]="I need : " . $products;
?>


<?php
/**
 * Created by PhpStorm.
 * User: yaruli
 * Date: 2019-03-08
 * Time: 11:44
 */

$db = new mysqli("playground.eca.ed.ac.uk","s1803591","dS9N11BVf8","s1803591");
if($_POST["fname"]!=""){
    $name=1;
}
else {
    $name=0;
}
if($_POST["age"]!=""){
    $age=1;
}
else{
    $age=0;
}
if(empty($_POST['fgender'])){
    $gender=0;
}
else{
    $gender=1;
}
if($_POST["faddress"]!=""){
    $address=1;
}
else{
    $address=0;
}
if($_POST["email"]!=""){
    $email=1;
}
else{
    $email=0;
}
if($_POST["feducation"]!=""){
    $education=1;
}
else{
    $education=0;
}
if($_POST["job"]!=""){
    $job=1;
}
else{
    $job=0;
}
if($_POST["marital"]!="" || $_POST["children"]!=""){
    $marital=1;
}
else{
    $marital=0;
}
if(empty($_POST['health'])){
    $health=0;
}
else{
    $health=1;
}
if(empty($_POST['house'])){
    $property=0;
}
else{
    $property=1;
}


if(empty($_POST['cruise']) && empty($_POST['buff'])&&empty($_POST['travel'])){
    $activities=0;
}
else{
    $activities=1;
}
if(empty($_POST['search']) && empty($_POST['cards']) && empty($_POST['products'])&&empty($_POST['mobile'])){
    $consumer=0;
}
else{
    $consumer=1;
}

$SQL ="update privacy set name=name+$name, age=age+$age, gender=gender+$gender, address=address+$address, email=email+$email,education=education+$education, job=job+$job, marital=marital+$marital, health=health+$health, property=property+$property, activities=activities+$activities, consumer=consumer+$consumer";
$in_result= $db->query($SQL);
//echo $SQL;


session_start();

//demographics
$value = 0;
$username = $_POST["fname"];
$age = $_POST["age"];
if (empty($_POST['fgender'])) {
    $gender = "";
}
else{
    $gender = $_POST["fgender"];
}
$address = $_POST["faddress"];
$email = $_POST["email"];
$education = $_POST["feducation"];
$job = $_POST["job"];
$marital = $_POST["marital"];

$_SESSION["name"] = $username;
$_SESSION["age"] = $age;
$_SESSION["gender"] = $gender;
$_SESSION["address"] = $address;
$_SESSION["email"] = $email;
$_SESSION["education"] = $education;
$_SESSION["job"] = "I'm ". $job;
$_SESSION["marital"] = $marital;


//family & health
if (empty($_POST["children"])) {
    $children="";
}
else{
    $children = $_POST["children"];
}


if (empty($_POST['health'])) {
    $health = "";
} else {
    $health = implode(";", $_POST['health']);
}

$_SESSION["children"] = $children;
$_SESSION["health"] = $health;


//property
if (empty($_POST["house"])) {
    $house="";
}
else{
    $house=$_POST["house"];
}
if (empty($_POST["change"])) {
    $change="";
}
else{
    $change=$_POST["change"];
}

$_SESSION["house"] = $house;
$_SESSION["change"] = $change;


//activities
if (empty($_POST["cruise"])) {
    $cruise="";
}
else{
    $cruise=$_POST["cruise"];
}

if (empty($_POST["buff"])) {
    $buff="";
}
else{
    $buff=$_POST["buff"];
}
if (empty($_POST["travel"])) {
    $travel="";
}
else{
    $travel=$_POST["travel"];
}

$_SESSION["cruise"]=$cruise;
$_SESSION["buff"]=$buff;
$_SESSION["travel"]=$travel;


//consumer
if (empty($_POST['search'])) {
    $search = "";
} else {
    $search = implode(";", $_POST['search']);
}

if (empty($_POST['products'])) {
    $products = "";
} else {
    $products = implode(";", $_POST['products']);
}

if (empty($_POST["cards"])) {
    $cards="";
}
else{
    $cards=$_POST["cards"];
}

if (empty($_POST["mobile"])) {
    $mobile="";
}
else{
    $mobile=$_POST["mobile"];
}
$_SESSION["cards"]=$cards;
$_SESSION["mobile"]=$mobile;
$_SESSION["search"]=$search;
$_SESSION["products"]="I need : " . $products;






//VALUE
//demographics
if ($username != "") {
    $value = $value + 5;
}
if ($age != "") {
    $value = $value + 5;
}
if ($gender != "") {
    $value = $value + 5;
}
if ($address != "") {
    $value = $value + 5;
}
if ($email != "") {
    $value = $value + 5;
}
if ($education != "") {
    $value = $value + 5;
}
if ($job != "") {
    if ($job == "others") {
        $value = $value + 0;
    } else if ($job == "non-profit" || $job == "accountant" || $job == "cosmetologist" || $job == "Insurance agent" || $job == "Health professional" || $job == "home") {
        $value = $value + 720;
    } else if ($job == "Manufacturing & Engineering" || $job == "chairman") {
        $value = $value + 760;
    } else if ($job == "attorney" || $job == "Human resources executive") {
        $value = $value + 800;
    } else if ($job == "chief" || $job == "Company Owner") {
        $value = $value + 860;
    } else if ($job == "entrepreneur") {
        $value = $value + 1000;
    }
}
if ($marital != "") {
    if ($marital == "Single") {
        $value = $value + 0;
    } else if ($marital == "Engaged to be married") {
        $value = $value + 1200;
    } else if ($marital == "Married" || $marital == "Divorced" || $marital == "Empty nester") {
        $value = $value + 100;
    }

}
//family & health
if($children!=""){
    if($children=="Have children"){
        $value=$value+50;
    }
    else{
        $value=$value+0;
    }
}
if($health!=""){
    $value=$value+2600;
}

//property
if($house!="")
{
    if($house=="Own a house/flat")
    {
        $value=$value+1050;
    }
    else{
        $value=$value+0;
        $_SESSION["house"] ="";

    }
}
if($change!=""){
    if($change=="Want to change residence"){
        $value=$value+850;
    }
    else{
        $value=$value+0;
        $_SESSION["change"] = "";
    }
}


//activities
if($cruise!="")
{
    if($cruise=="I'm a cruise enthusiast")
    {
        $value=$value+300;
    }
    if($cruise=="no")
    {
        $_SESSION["cruise"] = "";
    }
}
if($buff!="")
{
    if($buff=="I'm a fitness and exercise buff")
    {
        $value=$value+300;
    }
    if($buff=="no")
    {
        $_SESSION["buff"] = "";
    }
}
if($travel!="")
{
    if($travel=="I love travelling")
    {
        $value=$value+300;
    }
    if($travel=="no")
    {
        $_SESSION["travel"] = "";
    }
}

//consumer
if($search!="") {
    $search_value = $_POST["search"];
    foreach ($search_value as $onevalue) {
        if ($onevalue == "auto") {
            $value = $value + 21;
        }
        if ($onevalue == "financial") {
            $value = $value + 10;
        }
        if ($onevalue == "retail") {
            $value = $value + 10;
        }
        if ($onevalue == "travel") {
            $value = $value + 10;
        }
        if ($onevalue == "gossip") {
            $value = $value + 13;
        }
        if ($onevalue == "gaming") {
            $value = $value + 13;
        }
        if ($onevalue == "food") {
            $value = $value + 13;
        }
        if ($onevalue == "education") {
            $value = $value + 13;
        }
        if ($onevalue == "social") {
            $value = $value + 8;
        }
        if ($onevalue == "movie") {
            $value = $value + 30;
        }
        if ($onevalue == "political") {
            $value = $value + 19;
        }
        if ($onevalue == "television") {
            $value = $value + 15;
        }
    }
}
if($products!="") {
    $products_value = $_POST["products"];
    foreach ($products_value as $pro_value) {
        if ($pro_value == "cars") {
            $value = $value + 18;
        }
        if ($pro_value == "goods") {
            $value = $value + 10;
        }
        if ($pro_value == "education") {
            $value = $value + 13;
        }
        if ($pro_value == "financial products") {
            $value = $value + 10;
        }
        if ($pro_value == "vehicles") {
            $value = $value + 11;
        }
        if ($pro_value == "clothes") {
            $value = $value + 11;
        }
        if ($pro_value == "travel") {
            $value = $value + 11;
        }

    }
}


if($cards!="")
{
    if($cards=="I have some loyalty cards")
    {
        $value=$value+10;
    }
    if($cards=="no")
    {
        $_SESSION["cards"] = "";
    }
}
if($mobile!="")
{
    if($mobile=="I want buy something")
    {
        $value=$value+125;
    }
    if($mobile=="no")
    {
        $_SESSION["mobile"] = "";
    }
}


?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
<!--    <link rel="stylesheet" type="text/css" href="css/default.css"/>-->
<!--    <link rel="stylesheet" type="text/css" href="css/component.css"/>-->
    <link rel="stylesheet" href="css/style2.css">
</head>
<body><a href="info.php">
<div class="big">
    <form action="info.php" method="post">
<!--        --><?php //echo $_POST["fname"]; ?><!--</br>-->
<!--        The Price of Your Privacy is: --><?php //echo $value; ?><!-- Pounds</br>-->
        <div id="fly-in">
            <div><?php echo $_POST["fname"]; ?></div>
            <div>The Price of Your Privacy is:</div>
            <div> <?php echo $value; ?> Pounds</div>
            <div>Have you read the Policy?</div>
            <div>Have you accepted the Policy?</div>
            <div>See what will be happened?</div>
            <div>Click the screen to Continue >></div>

        </div>

            <!--<div><span>Very</span>Cinematic</div>-->
            <!--<div>Fade Away<span>into the distance</span></div>-->
            <!--<div>Still Loops <span> for eternity</span></div>-->
            <!--<div><span>Just CSS</span> and HTML</div>-->



            <input type="submit" value="next">
    </form>

</div>
</a>
</body>


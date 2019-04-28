<?php
/**
 * Created by PhpStorm.
 * User: yaruli
 * Date: 2019-03-08
 * Time: 20:44
 */
session_start();
$name=$_SESSION["username"];
$age=$_SESSION["age"];
$gender=$_SESSION["gender"];
//$address=$_SESSION["address"];
$email=$_SESSION["email"];
$position=$_SESSION["position"];
//$job = $_SESSION["job"];
$marital = $_SESSION["marital"];

$children = $_SESSION["children"];
//$health = $_SESSION["health"];

$house=$_SESSION["house"];
//$change=$_SESSION["change"];
//
//$cruise=$_SESSION["cruise"];
//$buff=$_SESSION["buff"];
//$travel=$_SESSION["travel"];
//
//$products=$_SESSION["products"];
//$_SESSION["cards"]=$cards;
//$_SESSION["mobile"]=$mobile;
//$_SESSION["search"]=$search;
//$_SESSION["products"]="I need" . $products;


echo "Click the Screen to Continue";
?>

<html>
<head>
    <meta charset="utf-8">
    <title></title>

    <link rel="stylesheet" href="css/style3.css">
    <style>
        /*body {*/
        /*!*overflow: hidden;*!*/
        /*background-color: #111;*/
        /*!*background-image: radial-gradient(#333, #111);*!*/
        /*background-size: cover;*/
        /*background-repeat: no-repeat;*/
        /*background-attachment: fixed;*/
        /*font-family: 'Montserrat', sans-serif;*/
        /*}*/

        canvas {
            width: 100%;
            height: 100vh;
        }
    </style>

</head>
<body >
<a href="end.html">

    <canvas></canvas>
    <script>
        window.onload = () => {
            const CANVAS = document.getElementsByTagName("canvas")[0];
            const CTX = CANVAS.getContext("2d");
            const CHARS = [];
            const MAX_CHARS = 20;
            const SEPARATION =3;

            let ww, wh, camera;

            class Vector {
                constructor(x, y, z) {
                    this.x = x;
                    this.y = y;
                    this.z = z;
                }

                rotate(dir, ang) {
                    const X = this.x;
                    const Y = this.y;
                    const Z = this.z;

                    const SIN = Math.sin(ang);
                    const COS = Math.cos(ang);

                    if (dir === "x") {
                        this.y = Y * COS - Z * SIN;
                        this.z = Y * SIN + Z * COS;
                    } else if (dir === "y") {
                        this.x = X * COS - Z * SIN;
                        this.z = X * SIN + Z * COS;
                    }
                }

                project() {
                    const ZP = this.z + camera.z;
                    const DIV = ZP / 600;
                    const XP = (this.x + camera.x) / DIV;
                    const YP = (this.y + camera.y) / DIV;
                    const CENTER = getCenter();
                    return [XP + CENTER[0], YP + CENTER[1], ZP];
                }
            }

            class CharName {
                constructor(letter, pos) {
                    <?php if ($name != ""){
                    ?>
                    var datar = <?php echo json_encode($name); ?>;
                    <?php }
                    else{ ?>
                    var datar="";

                    <?php }?>
                    this.letter =datar;
                    this.pos = pos;
                }

                rotate(dir, ang) {
                    this.pos.rotate(dir, ang);
                }

                render() {
                    const PIXEL = this.pos.project();
                    const XP = PIXEL[0];
                    const YP = PIXEL[1];
                    const MAX_SIZE = 50;
                    const SIZE = (1 / PIXEL[2] * MAX_SIZE) | 0;
                    const BRIGHTNESS = SIZE / MAX_SIZE;
                    const COL = `rgb(255,255, ${100 * BRIGHTNESS | 0 + 150})`;

                    CTX.beginPath();
                    CTX.fillStyle = COL;
                    CTX.font = SIZE + "px monospace";
                    CTX.fillText(this.letter, XP, YP);
                    CTX.fill();
                    CTX.closePath();
                }
            }
            class CharAge {
                constructor(letter, pos) {
                    <?php if ($age != ""){
                    ?>
                    var age = <?php echo json_encode($age); ?>;
                    <?php }
                    else{ ?>
                    var age="";

                    <?php }?>
                    this.letter =age;
                    this.pos = pos;
                }

                rotate(dir, ang) {
                    this.pos.rotate(dir, ang);
                }

                render() {
                    const PIXEL = this.pos.project();
                    const XP = PIXEL[0];
                    const YP = PIXEL[1];
                    const MAX_SIZE = 50;
                    const SIZE = (1 / PIXEL[2] * MAX_SIZE) | 0;
                    const BRIGHTNESS = SIZE / MAX_SIZE;
                    const COL = `rgb(255, 255, ${100 * BRIGHTNESS | 0 + 150})`;

                    CTX.beginPath();
                    CTX.fillStyle = COL;
                    CTX.font = SIZE + "px monospace";
                    CTX.fillText(this.letter, XP, YP);
                    CTX.fill();
                    CTX.closePath();
                }
            }
            class CharGender {
                constructor(letter, pos) {
                    <?php if ($gender != ""){
                    ?>
                    var gender = <?php echo json_encode($gender); ?>;
                    <?php }
                    else{ ?>
                    var gender="";

                    <?php }?>
                    this.letter =gender;
                    this.pos = pos;
                }

                rotate(dir, ang) {
                    this.pos.rotate(dir, ang);
                }

                render() {
                    const PIXEL = this.pos.project();
                    const XP = PIXEL[0];
                    const YP = PIXEL[1];
                    const MAX_SIZE = 50;
                    const SIZE = (1 / PIXEL[2] * MAX_SIZE) | 0;
                    const BRIGHTNESS = SIZE / MAX_SIZE;
                    const COL = `rgb(255, 255, ${100 * BRIGHTNESS | 0 + 150})`;

                    CTX.beginPath();
                    CTX.fillStyle = COL;
                    CTX.font = SIZE + "px monospace";
                    CTX.fillText(this.letter, XP, YP);
                    CTX.fill();
                    CTX.closePath();
                }
            }
            //class CharAddress {
            //    constructor(letter, pos) {
            //        <?php //if ($address != ""){
            //        ?>
            //        var address = <?php //echo json_encode($address); ?>//;
            //        <?php //}
            //        else{ ?>
            //        var address="";
            //
            //        <?php //}?>
            //        this.letter =address;
            //        this.pos = pos;
            //    }
            //
            //    rotate(dir, ang) {
            //        this.pos.rotate(dir, ang);
            //    }
            //
            //    render() {
            //        const PIXEL = this.pos.project();
            //        const XP = PIXEL[0];
            //        const YP = PIXEL[1];
            //        const MAX_SIZE = 50;
            //        const SIZE = (1 / PIXEL[2] * MAX_SIZE) | 0;
            //        const BRIGHTNESS = SIZE / MAX_SIZE;
            //        const COL = `rgba(255, 255, ${100 * BRIGHTNESS | 0 + 150}, ${BRIGHTNESS})`;
            //
            //        CTX.beginPath();
            //        CTX.fillStyle = COL;
            //        CTX.font = SIZE + "px monospace";
            //        CTX.fillText(this.letter, XP, YP);
            //        CTX.fill();
            //        CTX.closePath();
            //    }
            //}
            class CharEmail {
                constructor(letter, pos) {
                    <?php if ($email != ""){
                    ?>
                    var email = <?php echo json_encode($email); ?>;
                    <?php }
                    else{ ?>
                    var email="";

                    <?php }?>
                    this.letter =email;
                    this.pos = pos;
                }

                rotate(dir, ang) {
                    this.pos.rotate(dir, ang);
                }

                render() {
                    const PIXEL = this.pos.project();
                    const XP = PIXEL[0];
                    const YP = PIXEL[1];
                    const MAX_SIZE = 50;
                    const SIZE = (1 / PIXEL[2] * MAX_SIZE) | 0;
                    const BRIGHTNESS = SIZE / MAX_SIZE;
                    const COL = `rgba(255, 255, ${100 * BRIGHTNESS | 0 + 150}, ${BRIGHTNESS})`;

                    CTX.beginPath();
                    CTX.fillStyle = COL;
                    CTX.font = SIZE + "px monospace";
                    CTX.fillText(this.letter, XP, YP);
                    CTX.fill();
                    CTX.closePath();
                }
            }
            class CharEducation {
                constructor(letter, pos) {
                    <?php if ($position != ""){
                    ?>
                    var position = <?php echo json_encode($position); ?>;
                    <?php }
                    else{ ?>
                    var position="";

                    <?php }?>
                    this.letter =position;
                    this.pos = pos;
                }

                rotate(dir, ang) {
                    this.pos.rotate(dir, ang);
                }

                render() {
                    const PIXEL = this.pos.project();
                    const XP = PIXEL[0];
                    const YP = PIXEL[1];
                    const MAX_SIZE = 50;
                    const SIZE = (1 / PIXEL[2] * MAX_SIZE) | 0;
                    const BRIGHTNESS = SIZE / MAX_SIZE;
                    const COL = `rgba(255, 255, ${100 * BRIGHTNESS | 0 + 150}, ${BRIGHTNESS})`;

                    CTX.beginPath();
                    CTX.fillStyle = COL;
                    CTX.font = SIZE + "px monospace";
                    CTX.fillText(this.letter, XP, YP);
                    CTX.fill();
                    CTX.closePath();
                }
            }
            //class CharJob {
            //    constructor(letter, pos) {
            //        <?php //if ($job != ""){
            //        ?>
            //        var job = <?php //echo json_encode($job); ?>//;
            //        <?php //}
            //        else{ ?>
            //        var job="";
            //
            //        <?php //}?>
            //        this.letter =job;
            //        this.pos = pos;
            //    }
            //
            //    rotate(dir, ang) {
            //        this.pos.rotate(dir, ang);
            //    }
            //
            //    render() {
            //        const PIXEL = this.pos.project();
            //        const XP = PIXEL[0];
            //        const YP = PIXEL[1];
            //        const MAX_SIZE = 50;
            //        const SIZE = (1 / PIXEL[2] * MAX_SIZE) | 0;
            //        const BRIGHTNESS = SIZE / MAX_SIZE;
            //        const COL = `rgba(255, 255, ${100 * BRIGHTNESS | 0 + 150}, ${BRIGHTNESS})`;
            //
            //        CTX.beginPath();
            //        CTX.fillStyle = COL;
            //        CTX.font = SIZE + "px monospace";
            //        CTX.fillText(this.letter, XP, YP);
            //        CTX.fill();
            //        CTX.closePath();
            //    }
            //}
            class CharMarital {
                constructor(letter, pos) {
                    <?php if ($marital != ""){
                    ?>
                    var marital = <?php echo json_encode($marital); ?>;
                    <?php }
                    else{ ?>
                    var marital="";

                    <?php }?>
                    this.letter =marital;
                    this.pos = pos;
                }

                rotate(dir, ang) {
                    this.pos.rotate(dir, ang);
                }

                render() {
                    const PIXEL = this.pos.project();
                    const XP = PIXEL[0];
                    const YP = PIXEL[1];
                    const MAX_SIZE = 50;
                    const SIZE = (1 / PIXEL[2] * MAX_SIZE) | 0;
                    const BRIGHTNESS = SIZE / MAX_SIZE;
                    const COL = `rgb(255, 255, ${100 * BRIGHTNESS | 0 + 150})`;

                    CTX.beginPath();
                    CTX.fillStyle = COL;
                    CTX.font = SIZE + "px monospace";
                    CTX.fillText(this.letter, XP, YP);
                    CTX.fill();
                    CTX.closePath();
                }
            }
            class CharChildren {
                constructor(letter, pos) {
                    <?php if ($children != ""){
                    ?>
                    var children = <?php echo json_encode($children); ?>;
                    <?php }
                    else{ ?>
                    var children="";

                    <?php }?>
                    this.letter =children;
                    this.pos = pos;
                }

                rotate(dir, ang) {
                    this.pos.rotate(dir, ang);
                }

                render() {
                    const PIXEL = this.pos.project();
                    const XP = PIXEL[0];
                    const YP = PIXEL[1];
                    const MAX_SIZE = 50;
                    const SIZE = (1 / PIXEL[2] * MAX_SIZE) | 0;
                    const BRIGHTNESS = SIZE / MAX_SIZE;
                    const COL = `rgba(255, 255, ${100 * BRIGHTNESS | 0 + 150}, ${BRIGHTNESS})`;

                    CTX.beginPath();
                    CTX.fillStyle = COL;
                    CTX.font = SIZE + "px monospace";
                    CTX.fillText(this.letter, XP, YP);
                    CTX.fill();
                    CTX.closePath();
                }
            }
            //class CharHealth{
            //    constructor(letter, pos) {
            //        <?php //if ($health != ""){
            //        ?>
            //        var health = <?php //echo json_encode($health); ?>//;
            //        <?php //}
            //        else{ ?>
            //        var health="";
            //
            //        <?php //}?>
            //        this.letter =health;
            //        this.pos = pos;
            //    }
            //
            //    rotate(dir, ang) {
            //        this.pos.rotate(dir, ang);
            //    }
            //
            //    render() {
            //        const PIXEL = this.pos.project();
            //        const XP = PIXEL[0];
            //        const YP = PIXEL[1];
            //        const MAX_SIZE = 50;
            //        const SIZE = (1 / PIXEL[2] * MAX_SIZE) | 0;
            //        const BRIGHTNESS = SIZE / MAX_SIZE;
            //        const COL = `rgba(255, 0, ${100 * BRIGHTNESS | 0 + 150}, ${BRIGHTNESS})`;
            //
            //        CTX.beginPath();
            //        CTX.fillStyle = COL;
            //        CTX.font = SIZE + "px monospace";
            //        CTX.fillText(this.letter, XP, YP);
            //        CTX.fill();
            //        CTX.closePath();
            //    }
            //}
            class CharHouse{
                constructor(letter, pos) {
                    <?php if ($house != ""){
                    ?>
                    var house = <?php echo json_encode($house); ?>;
                    <?php }
                    else{ ?>
                    var house="";

                    <?php }?>
                    this.letter =house;
                    this.pos = pos;
                }

                rotate(dir, ang) {
                    this.pos.rotate(dir, ang);
                }

                render() {
                    const PIXEL = this.pos.project();
                    const XP = PIXEL[0];
                    const YP = PIXEL[1];
                    const MAX_SIZE = 50;
                    const SIZE = (1 / PIXEL[2] * MAX_SIZE) | 0;
                    const BRIGHTNESS = SIZE / MAX_SIZE;
                    const COL = `rgb(255, 255, ${100 * BRIGHTNESS | 0 + 150})`;

                    CTX.beginPath();
                    CTX.fillStyle = COL;
                    CTX.font = SIZE + "px monospace";
                    CTX.fillText(this.letter, XP, YP);
                    CTX.fill();
                    CTX.closePath();
                }
            }
            //class CharChange{
            //    constructor(letter, pos) {
            //        <?php //if ($change != ""){
            //        ?>
            //        var change = <?php //echo json_encode($change); ?>//;
            //        <?php //}
            //        else{ ?>
            //        var change="";
            //
            //        <?php //}?>
            //        this.letter =change;
            //        this.pos = pos;
            //    }
            //
            //    rotate(dir, ang) {
            //        this.pos.rotate(dir, ang);
            //    }
            //
            //    render() {
            //        const PIXEL = this.pos.project();
            //        const XP = PIXEL[0];
            //        const YP = PIXEL[1];
            //        const MAX_SIZE = 50;
            //        const SIZE = (1 / PIXEL[2] * MAX_SIZE) | 0;
            //        const BRIGHTNESS = SIZE / MAX_SIZE;
            //        const COL = `rgba(0, 255, ${100 * BRIGHTNESS | 0 + 150}, ${BRIGHTNESS})`;
            //
            //        CTX.beginPath();
            //        CTX.fillStyle = COL;
            //        CTX.font = SIZE + "px monospace";
            //        CTX.fillText(this.letter, XP, YP);
            //        CTX.fill();
            //        CTX.closePath();
            //    }
            //}
            //class CharCruise{
            //    constructor(letter, pos) {
            //        <?php //if ($cruise != ""){
            //        ?>
            //        var cruise = <?php //echo json_encode($cruise); ?>//;
            //        <?php //}
            //        else{ ?>
            //        var cruise="";
            //
            //        <?php //}?>
            //        this.letter =cruise;
            //        this.pos = pos;
            //    }
            //
            //    rotate(dir, ang) {
            //        this.pos.rotate(dir, ang);
            //    }
            //
            //    render() {
            //        const PIXEL = this.pos.project();
            //        const XP = PIXEL[0];
            //        const YP = PIXEL[1];
            //        const MAX_SIZE = 50;
            //        const SIZE = (1 / PIXEL[2] * MAX_SIZE) | 0;
            //        const BRIGHTNESS = SIZE / MAX_SIZE;
            //        const COL = `rgba(100, 100, ${100 * BRIGHTNESS | 0 + 150}, ${BRIGHTNESS})`;
            //
            //        CTX.beginPath();
            //        CTX.fillStyle = COL;
            //        CTX.font = SIZE + "px monospace";
            //        CTX.fillText(this.letter, XP, YP);
            //        CTX.fill();
            //        CTX.closePath();
            //    }
            //}
            //class CharBuff{
            //    constructor(letter, pos) {
            //        <?php //if ($buff != ""){
            //        ?>
            //        var buff = <?php //echo json_encode($buff); ?>//;
            //        <?php //}
            //        else{ ?>
            //        var buff="";
            //
            //        <?php //}?>
            //        this.letter =buff;
            //        this.pos = pos;
            //    }
            //
            //    rotate(dir, ang) {
            //        this.pos.rotate(dir, ang);
            //    }
            //
            //    render() {
            //        const PIXEL = this.pos.project();
            //        const XP = PIXEL[0];
            //        const YP = PIXEL[1];
            //        const MAX_SIZE = 50;
            //        const SIZE = (1 / PIXEL[2] * MAX_SIZE) | 0;
            //        const BRIGHTNESS = SIZE / MAX_SIZE;
            //        const COL = `rgb(100, 100, ${100 * BRIGHTNESS | 0 + 150}})`;
            //
            //        CTX.beginPath();
            //        CTX.fillStyle = COL;
            //        CTX.font = SIZE + "px monospace";
            //        CTX.fillText(this.letter, XP, YP);
            //        CTX.fill();
            //        CTX.closePath();
            //    }
            //}
            //class CharTravel{
            //    constructor(letter, pos) {
            //        <?php //if ($travel != ""){
            //        ?>
            //        var travel = <?php //echo json_encode($travel); ?>//;
            //        <?php //}
            //        else{ ?>
            //        var travel="";
            //
            //        <?php //}?>
            //        this.letter =travel;
            //        this.pos = pos;
            //    }
            //
            //    rotate(dir, ang) {
            //        this.pos.rotate(dir, ang);
            //    }
            //
            //    render() {
            //        const PIXEL = this.pos.project();
            //        const XP = PIXEL[0];
            //        const YP = PIXEL[1];
            //        const MAX_SIZE = 50;
            //        const SIZE = (1 / PIXEL[2] * MAX_SIZE) | 0;
            //        const BRIGHTNESS = SIZE / MAX_SIZE;
            //        const COL = `rgba(100, 100, ${100 * BRIGHTNESS | 0 + 150}, ${BRIGHTNESS})`;
            //
            //        CTX.beginPath();
            //        CTX.fillStyle = COL;
            //        CTX.font = SIZE + "px monospace";
            //        CTX.fillText(this.letter, XP, YP);
            //        CTX.fill();
            //        CTX.closePath();
            //    }
            //}
            //class CharProducts{
            //    constructor(letter, pos) {
            //        <?php //if ($products != ""){
            //        ?>
            //        var products = <?php //echo json_encode($products); ?>//;
            //        <?php //}
            //        else{ ?>
            //        var products="";
            //
            //        <?php //}?>
            //        this.letter =products;
            //        this.pos = pos;
            //    }
            //
            //    rotate(dir, ang) {
            //        this.pos.rotate(dir, ang);
            //    }
            //
            //    render() {
            //        const PIXEL = this.pos.project();
            //        const XP = PIXEL[0];
            //        const YP = PIXEL[1];
            //        const MAX_SIZE = 50;
            //        const SIZE = (1 / PIXEL[2] * MAX_SIZE) | 0;
            //        const BRIGHTNESS = SIZE / MAX_SIZE;
            //        const COL = `rgb(30, 200, ${100 * BRIGHTNESS | 0 + 150})`;
            //
            //        CTX.beginPath();
            //        CTX.fillStyle = COL;
            //        CTX.font = SIZE + "px monospace";
            //        CTX.fillText(this.letter, XP, YP);
            //        CTX.fill();
            //        CTX.closePath();
            //    }
            //}

            function getCenter() {
                return [ww / 2, wh / 2];
            }

            function signedRandom() {
                return Math.random() - Math.random();
            }

            function render() {
                for (let i = 0; i < CHARS.length; i++) {
                    CHARS[i].render();
                }
            }

            let time = 0;
            function update() {
                CTX.clearRect(0, 0, ww, wh);
                for (let i = 0; i < CHARS.length; i++) {
                    const DX = 0.005 * Math.sin(time * 0.001);
                    const DY = 0.005 * Math.cos(time * 0.001);
                    CHARS[i].rotate("x", DX);
                    CHARS[i].rotate("y", DY);
                }
                ++time;
            }

            function loop() {
                window.requestAnimationFrame(loop);
                update();
                render();
            }

            function getRandomInt(min, max) {
                return Math.floor(Math.random() * (max - min + 1)) + min;
            };

            function createChars() {
                for (let i = 0; i < MAX_CHARS; i++) {
                    const CHARACTER = String.fromCharCode((Math.random() * 93 + 34) | 0);
                    const X = signedRandom() * SEPARATION;
                    const Y = signedRandom() * SEPARATION;
                    const Z = signedRandom() * SEPARATION;
                    const POS = new Vector(signedRandom() * SEPARATION, signedRandom() * SEPARATION, Z);
                    const POS2 = new Vector(signedRandom() * SEPARATION, signedRandom() * SEPARATION, Z);
                    const POS3 = new Vector(signedRandom() * SEPARATION, signedRandom() * SEPARATION, Z);
                    const POS4 = new Vector(signedRandom() * SEPARATION, signedRandom() * SEPARATION, Z);
                    const POS5 = new Vector(signedRandom() * SEPARATION, signedRandom() * SEPARATION, Z);
                    const POS6 = new Vector(signedRandom() * SEPARATION, signedRandom() * SEPARATION, Z);
                    const POS7 = new Vector(signedRandom() * SEPARATION, signedRandom() * SEPARATION, Z);
                    const POS8 = new Vector(signedRandom() * SEPARATION, signedRandom() * SEPARATION, Z);
                    const POS9 = new Vector(signedRandom() * SEPARATION, signedRandom() * SEPARATION, Z);
                    const POS10 = new Vector(signedRandom() * SEPARATION, signedRandom() * SEPARATION, Z);
                    const POS11 = new Vector(signedRandom() * SEPARATION, signedRandom() * SEPARATION, Z);
                    const POS12 = new Vector(signedRandom() * SEPARATION, signedRandom() * SEPARATION, Z);
                    const POS13 = new Vector(signedRandom() * SEPARATION, signedRandom() * SEPARATION, Z);
                    const POS14 = new Vector(signedRandom() * SEPARATION, signedRandom() * SEPARATION, Z);
                    const POS15 = new Vector(signedRandom() * SEPARATION, signedRandom() * SEPARATION, Z);
                    const POS16 = new Vector(signedRandom() * SEPARATION, signedRandom() * SEPARATION, Z);
                    const CHARName = new CharName(CHARACTER, POS);
                    const CHARAge = new CharAge(CHARACTER, POS2);
                    const CHARGender = new CharGender(CHARACTER, POS3);
                    // const CHARAddress = new CharAddress(CHARACTER, POS4);
                    const CHAREmail = new CharEmail(CHARACTER, POS5);
                    const CHAREducation = new CharEducation(CHARACTER, POS6);
                    // const CHARJob = new CharJob(CHARACTER, POS7);
                    const CHARMarital = new CharMarital(CHARACTER, POS8);
                    const CHARChildren = new CharChildren(CHARACTER, POS9);
                    // const CHARHealth = new CharHealth(CHARACTER, POS10);
                    const CHARHouse = new CharHouse(CHARACTER, POS11);
                    // const CHARChange = new CharChange(CHARACTER, POS12);
                    // const CHARCruise = new CharCruise(CHARACTER, POS13);
                    // const CHARBuff = new CharBuff(CHARACTER, POS14);
                    // const CHARTravel = new CharTravel(CHARACTER, POS15);
                    // const CHARProducts = new CharProducts(CHARACTER, POS16);
                    CHARS.push(CHARName);
                    CHARS.push(CHARAge);
                    CHARS.push(CHARGender);
                    // CHARS.push(CHARAddress);
                    CHARS.push(CHAREmail);
                    CHARS.push(CHAREducation);
                    // CHARS.push(CHARJob);
                    CHARS.push(CHARMarital);
                    CHARS.push(CHARChildren);
                    // CHARS.push(CHARHealth);
                    CHARS.push(CHARHouse);
                    // CHARS.push(CHARChange);
                    // CHARS.push(CHARCruise);
                    // CHARS.push(CHARBuff);
                    // CHARS.push(CHARTravel);
                    // CHARS.push(CHARProducts);
                }
            }

            function setDim() {
                ww = window.innerWidth;
                wh = window.innerHeight;
                CANVAS.width = ww;
                CANVAS.height = wh;
            }

            function initCamera() {
                camera = new Vector(0, 0, SEPARATION + 1);
            }

            window.onresize = setDim;

            (() => {
                setDim();
                initCamera();
                createChars();
                loop();
            })();
        };
    </script>
</a>
<embed src="highway-loop3.mp4" hidden="true" autostart="true"/>
</body>
</html>


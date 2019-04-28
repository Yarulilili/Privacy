<?php
/**
 * Created by PhpStorm.
 * User: yaruli
 * Date: 2019-03-08
 * Time: 20:44
 */
session_start();
$name=$_SESSION["name"];
$age=$_SESSION["age"];
$address=$_SESSION["address"];
$email=$_SESSION["email"];
//$education=$_SESSION["education"];
//$job = $_SESSION["job"];
//$marital = $_SESSION["marital"];
//
//$children = $_SESSION["children"];
//$health = $_SESSION["health"];
//
//$house=$_SESSION["house"];
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
            height: 85%;
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
                    const MAX_SIZE = 200;
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
            class CharAddress {
                constructor(letter, pos) {
                    <?php if ($address != ""){
                    ?>
                    var address = <?php echo json_encode($address); ?>;
                    <?php }
                    else{ ?>
                    var address="";

                    <?php }?>
                    this.letter =address;
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
                    const POS5 = new Vector(signedRandom() * SEPARATION, signedRandom() * SEPARATION, Z);
                    const POS4 = new Vector(signedRandom() * SEPARATION, signedRandom() * SEPARATION, Z);

                    const CHARName = new CharName(CHARACTER, POS);
                    const CHARAge = new CharAge(CHARACTER, POS2);

                    const CHARAddress = new CharAddress(CHARACTER, POS4);
                    const CHAREmail = new CharEmail(CHARACTER, POS5);
                    // const CHAREducation = new CharEducation(CHARACTER, POS6);
                    // const CHARJob = new CharJob(CHARACTER, POS7);
                    // const CHARMarital = new CharMarital(CHARACTER, POS8);
                    // const CHARChildren = new CharChildren(CHARACTER, POS9);
                    // const CHARHealth = new CharHealth(CHARACTER, POS10);
                    // const CHARHouse = new CharHouse(CHARACTER, POS11);
                    // const CHARChange = new CharChange(CHARACTER, POS12);
                    // const CHARCruise = new CharCruise(CHARACTER, POS13);
                    // const CHARBuff = new CharBuff(CHARACTER, POS14);
                    // const CHARTravel = new CharTravel(CHARACTER, POS15);
                    // const CHARProducts = new CharProducts(CHARACTER, POS16);
                    CHARS.push(CHARName);
                    CHARS.push(CHARAge);

                    CHARS.push(CHARAddress);
                    CHARS.push(CHAREmail);
                    // CHARS.push(CHAREducation);
                    // CHARS.push(CHARJob);
                    // CHARS.push(CHARMarital);
                    // CHARS.push(CHARChildren);
                    // CHARS.push(CHARHealth);
                    // CHARS.push(CHARHouse);
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
</body>
</html>


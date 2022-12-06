<?php
global $fotos;
global $actual;

$actual = 0;

$fotos = array(
    "tostadora.jpg",
    "tostadora.jpg",
    "tostadora.jpg",
    "tostadora.jpg",
    "tostadora.jpg",
    "tostadora.jpg",
);

?>

<head>
    <meta charset="UTF-8">
    <title>77Buy4</title>
    <?php
    require_once (substr(__DIR__ , 0,-22)."app/Controllers/RouteController.php");
        $RouteService = new RouteController();
        echo ("<link rel='stylesheet' href='".$RouteService->routes["home"]["css"]."'>")
    ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body onload="sliderload()">
    <?php
        require_once ("components/Navbar/navbar.php");
    ?>

    <div id="slider" class="slider">
        <div class="slider-content">
            <div class="slider-content-wrapper">

                <div class='slider-content__item' id='image slider' style='background-size: cover;'></div>
            </div>
        </div>
        <div class="slider-content__controls">
            <div class='prev-arrow' onclick="arrows(0), arrowClicked=true">

                <svg viewBox="0 0 256 512">
                    <path fill="currentColor"
                          d="M31.7 239l136-136c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9L127.9 256l96.4 96.4c9.4 9.4 9.4 24.6 0 33.9L201.7 409c-9.4 9.4-24.6 9.4-33.9 0l-136-136c-9.5-9.4-9.5-24.6-.1-34z"></path>
                </svg>
            </div>
            <div class='next-arrow' onclick="arrows(), arrowClicked=true">
                <svg viewBox="0 0 256 512">
                    <path fill="currentColor"
                          d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z"></path>
                </svg>
            </div>
            <div class="dots">
                <?php

                    for ($i = 0; $i < count($fotos); $i++){
                        if($actual == $i){
                            echo ("<div id = '$i punto' class='dot dot--active'></div>");
                        }else{
                            echo ("<div id = '$i punto' class='dot'></div>");
                        }
                    }
                ?>
            </div>
        </div>
    </div>
</body>
<?php
    echo ("<script src='".$RouteService->routes["home"]["js"]."'></script>")
?>

<?php
/*
print ("****INDEX****: Estoy en index.php");
require_once ("../app/start.php");*/
?>
<!DOCTYPE html>
<html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <?php
        require_once (substr(__DIR__ , 0,-6)."app/Controllers/RouteController.php");
        $RouteService = new RouteController();

        echo ("<script src='".$RouteService->routes["index"]["js"]."')'></script>");

        $defalutRoute = substr(__DIR__ , 0);

    ?>
    <script>
        Check()
    </script>

    <?php
        $array =  array_keys($_GET);

        $file = $defalutRoute.$RouteService->routes[array_shift($array)]["php"];

        if(substr($file,strlen($file)-3,strlen($file)) != "php"){
            $file = $defalutRoute.$RouteService->routes["home"]["php"];
        }
        require_once ("$file");
    ?>
</html>
<?php
/*
print ("****INDEX****: Estoy en index.php");
require_once ("../app/start.php");*/
?>
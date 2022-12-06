<?php
    require_once (substr(__DIR__ , 0,-24)."app/Controllers/RouteController.php");
    $RouteService = new RouteController();
    echo ("<link rel='stylesheet' href='".$RouteService->routes["navbar"]["css"]."'>")
?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<section class="navigation" onload="getUrl()">
    <div class="nav-container">
        <div class="brand">
            <?php
            echo (" <a href='".$RouteService->routes["home"]["public"]."'><img src='".$RouteService->routes["navbar"]["images"]."/logo.png' width='35' height='35'><span>77Buy4</span></a>");
            ?>

        </div>
        <nav>
            <div class="nav-mobile"><a id="navbar-toggle" href="#!"><span></span></a></div>
            <ul class="nav-list">
                <li>
                    <?php
                        echo ("<a href='".$RouteService->routes["home"]["public"]."'>Home</a>");
                    ?>
                </li>
                <li>
                    <?php
                        echo ("<a href='".$RouteService->routes["login"]["php"]."'>Products</a>");
                    ?>
                </li>
                <li>
                    <?php
                        echo ("<a id='submenu'>Category</a>");
                    ?>
                    <ul class="navbar-dropdown">
                        <li>
                            <?php
                                echo ("<a id='submenu2' >Components</a>");
                            ?>
                            <ul class="navbar-subdropdown">
                                <li>
                                    <?php
                                        echo ("<a href='".$RouteService->routes["login"]["php"]."'>CPU</a>");
                                    ?>
                                </li>
                                <li>
                                    <?php
                                        echo ("<a href='".$RouteService->routes["login"]["php"]."'>PSU</a>");
                                    ?>
                                </li>
                                <li>
                                    <?php
                                        echo ("<a href='".$RouteService->routes["login"]["php"]."'>RAM</a>");
                                    ?>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <?php
                                echo ("<a href='".$RouteService->routes["login"]["php"]."'>Laptop</a>");
                            ?>
                        </li>
                        <li>
                            <?php
                                echo ("<a href='".$RouteService->routes["login"]["php"]."'>PC</a>");
                            ?>
                        </li>
                    </ul>
                </li>
                <li>
                    <?php
                     echo ("<a href='".$RouteService->routes["login"]["php"]."'>Contact</a>");
                    ?>
                </li>
                <li>
                    <?php
                        echo ("<a href='".$RouteService->routes["login"]["public"]."'>Login <i class='fa fa-user'></i></a>");
                    ?>
                </li>
                <li>
                    <?php
                     echo ("<a href='".$RouteService->routes["login"]["php"]."'>&nbsp <i class='fa fa-shopping-cart'></i></a>");
                    ?>
                </li>
            </ul>
        </nav>
    </div>
</section>
<?php
echo ("<script src='".$RouteService->routes["navbar"]["js"]."'></script>")
?>

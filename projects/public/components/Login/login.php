<?php

    require_once (substr(__DIR__ , 0,-23)."app/Controllers/RouteController.php");
    $RouteService = new RouteController();

?>
<!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>

        <?php
            echo ("<link rel='stylesheet' href='".$RouteService->routes["login"]["css"]."'>");
        ?>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>


   <body onload="setURL()">
    <?php
    $file =  substr(__DIR__ , 0,-6)."/Navbar/navbar.php";
    require_once ($file);
    ?>
        <div class="auth">
            <div class="auth-container">
                <?php
                    $file =substr(__DIR__ , 0,-24).$RouteService->backRoutes["User"]["login"];
                    echo ("<form name ='login' method='POST'  action='".$file."' class='auth-form'>");
                ?>

                    <h1>Sign in</h1>
                    <div id="email" class="auth-input">
                        <label for="email">
                            E-Mail
                        </label>
                        <input type="email" name="email" id="mail" />
                        <p id= "mail-err" hidden class="auth-error">E-Mail is a required field.</p>
                    </div>
                    <div id="pwd"  class="auth-input">
                        <label for="password">
                            Password
                        </label>
                        <input type="password" name="password" id="password" />
                        <p class="auth-error" id= "pwd-err" hidden>Password is a required field.</p>
                    </div>
                    <?php
                    echo ("<a href='".$RouteService->routes["forgotPwd"]["public"]."' class='auth-reset'>Forgot Password?</a>")
                    ?>
                    <button type="button" name="submit" class="auth-btn" onclick="Check()">Sign in</button>
                </form>
                <div class="auth-bottom">
                    Don't have an account yet?
                    <?php
                    echo ("<a href='".$RouteService->routes["register"]["public"]."'>Create Now</a>")
                    ?>
                </div>
            </div>
        </div>
    </body>
    <?php
        echo ("<script src='".$RouteService->routes["login"]["js"]."'></script>")
    ?>
</html>

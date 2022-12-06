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
            echo ("<link rel='stylesheet' href='".$RouteService->routes["changePwd"]["css"]."'>");
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
                <form name ="login" method="post" class="auth-form">
                    <h1>Sign in</h1>
                    <div id="email-div" class="auth-input">
                        <label for="email">
                            E-Mail
                        </label>
                        <input type="email" name="email" id="email" />
                        <p id= "email-err" hidden class="auth-error">E-Mail is a required field.</p>
                    </div>
                    <div id="password-div""  class="auth-input">
                        <label for="password">
                            Password
                        </label>
                        <input type="password" name="password" id="password" />
                        <p class="auth-error" id= "password-err" hidden>Password is a required field.</p>
                    </div>
                    <a href="#" class="auth-reset">Forgot Password?</a>
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
        echo ("<script src='".$RouteService->routes["changePwd"]["js"]."'></script>")
    ?>
</html>

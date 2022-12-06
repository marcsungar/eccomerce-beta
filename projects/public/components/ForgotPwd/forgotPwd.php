<?php

    require_once (substr(__DIR__ , 0,-27)."app/Controllers/RouteController.php");
    $RouteService = new RouteController();

?>
<!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>

        <?php
            echo ("<link rel='stylesheet' href='".$RouteService->routes["forgotPwd"]["css"]."'>");
        ?>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>


   <body onload="setURL()">
    <?php
    $file =  substr(__DIR__ , 0,-10)."/Navbar/navbar.php";
    require_once ($file);
    ?>
        <div class="auth">
            <div class="auth-container">
                <form name ="login" method="post" class="auth-form">
                    <h1>Reset password</h1>
                    <div id="email-div" class="auth-input">
                        <label for="email">
                            Enter your E-Mail registred
                        </label>
                        <input type="email" name="email" id="email" />
                        <p id= "email-err-void" hidden class="auth-error">E-Mail is a required field.</p>
                        <p id= "email-err-notexist" hidden class="auth-error">E-Mail doesn't registred yet.</p>
                        <p id= "email-success" hidden class="auth-success">Mail send, check your E-Mail.</p>
                    </div>
                    <?php
                    echo ("<a href='".$RouteService->routes["login"]["public"]."' class='auth-reset'>Return</a>")
                    ?>
                    <button type="button" name="submit" class="auth-btn" onclick="Check()">Sign in</button>
                </form>
            </div>
        </div>
    </body>
    <?php
        echo ("<script src='".$RouteService->routes["forgotPwd"]["js"]."'></script>")
    ?>
</html>

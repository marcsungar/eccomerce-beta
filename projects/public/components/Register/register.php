<?php

    require_once (substr(__DIR__ , 0,-26)."app/Controllers/RouteController.php");
    $RouteService = new RouteController();
    //$public =  $RouteController->routes['login']['public'];
    //$private =  $RouteController->routes['login']['php'];
    //header("$private: $public ");
?>
<!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <title>Register</title>

        <?php
            echo ("<link rel='stylesheet' href='".$RouteService->routes["register"]["css"]."'>");
        ?>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>


    <body onload='setURL()'>

    <?php
    $file =  substr(__DIR__ , 0,-9)."/Navbar/navbar.php";
    require_once ($file);
    ?>
        <div class="auth">
            <div class="auth-container">
                <form name ="login" method="post" class="auth-form">
                    <h1>Register</h1>
                    <div id="name-div" class="auth-input">
                        <label for="name">
                            Name
                        </label>
                        <input type="text" name="name" id="name"/>
                        <p id= "name-err" hidden class="auth-error">Name is a required field.</p>
                    </div>
                    <div id="surname-div" class="auth-input">
                        <label for="name">
                            Surname
                        </label>
                        <input type="text" name="surname" id="surname"/>
                        <p id= "surname-err" hidden class="auth-error">Surname is a required field.</p>
                    </div>
                    <div id="email-div" class="auth-input">
                        <label for="email">
                            E-Mail
                        </label>
                        <input type="email" name="email" id="email" />
                        <p id= "email-err" hidden class="auth-error">E-Mail is a required field.</p>
                    </div>
                    <div id="address-div" class="auth-input">
                        <label for="address">
                            Address
                        </label>
                        <input type="text" name="address" id="address" />
                        <p id= "address-err" hidden class="auth-error">Address is a required field.</p>
                    </div>
                    <div style="display:flex; flex-direction: row; width: 100%; position: relative; margin-bottom: 18px;">
                        <div id="city-div" class="auth-subinput" style="margin-right: 17%;">
                            <label for="city">
                                City
                            </label>
                            <input type="text" name="city" id="city" />
                            <p id= "city-err" hidden class="auth-error">City is a required field.</p>
                        </div>
                        <div id="state-div" class="auth-subinput">
                            <label for="state">
                                State
                            </label>
                            <input type="text" name="state" id="state" />
                            <p id= "state-err" hidden class="auth-error">State is a required field.</p>
                        </div>
                    </div>
                    <div style="display:flex; flex-direction: row; width: 100%; position: relative; margin-bottom: 18px;">
                        <div id="cp-div" class="auth-subinput" style="margin-right: 17%;">
                            <label for="cp">
                                Postal Code
                            </label>
                            <input type="text" name="cp" id="cp" />
                            <p id= "cp-err" hidden class="auth-error">Postal Code is a required field.</p>
                        </div>
                        <div id="country-div" class="auth-subinput">
                            <label for="country">
                                Country
                            </label>
                            <input type="text" name="country" id="country" />
                            <p id= "country-err" hidden class="auth-error">Country is a required field.</p>
                        </div>
                    </div>
                    <div id="pwd-div"  class="auth-input">
                        <label for="password">
                            Password
                        </label>
                        <input type="password" name="password" id="pwd" />
                        <p class="auth-error" id= "pwd-err-void" hidden>Password is a required field.</p>
                        <p class="auth-error" id= "pwd-err-alfanumeric" hidden>Password must have number, Upper and Lower.</p>
                        <p class="auth-error" id= "pwd-err-length" hidden>Password must have 10 digits or more.</p>
                    </div>
                    <div id="repeat-pwd-div"  class="auth-input">
                        <label for="password">
                            Repeat Password
                        </label>
                        <input type="password" name="repeat-password" id="repeat-pwd" onchange="RepeatPWD(value)"/>
                        <p class="auth-error" id= "repeat-pwd-err" hidden>Password is not the same.</p>
                    </div>
                    <button type="button" name="submit" class="auth-btn" onclick="Check()">Register</button>
                </form>
            </div>
        </div>
    </body>
    <?php
        echo ("<script src='".$RouteService->routes["register"]["js"]."'></script>")
    ?>
</html>

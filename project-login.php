<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" type="text/css" href="assets/css/project-login.css">
</head>

<body>

<!------ Include the above in your HEAD tag ---------->
<?php
  require 'components/header.php';
  
?>

    <div id="login">
    <?php 
    if(isset($_GET['Message']))
    {
        echo $_GET['Message'];
    }
    ?>
        <h3 class="text-center text-white pt-5">Login form</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <!-- <div id="login-box" class="col-md-12"> -->
                    <form id="login-form" class="form" action="loginscript.php" method="post">

                        <div class="form-group">
                            <label for="username" class="text-info text-white">Username:</label><br>
                            <input type="text" name="username" id="username" placeholder="Username"
                                class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password" class="text-info">Password:</label><br>
                            <input type="password" name="password" id="password" placeholder="Password"
                                class="form-control">
                        </div>
                        <p class="mismatch hide-error" id="mismatch-comment">mismatch of Password and Confirm Password
                        </p>
                        
                        <div class="form-group">
                            <label for="showpassword" class="text-info"><span>Show Password</span> <span><input
                                        id="showpassword" name="showpassword" type="checkbox"></span></label><br>
                            <button type="submit" name="submit" class="btn btn-info">Login</button>
                        </div>
                        <div id="register-link" class="text-left">
                            <a href="#" class="text-info">Register here</a>
                        </div>
                    </form>
                    <!-- </div> -->
                </div>
            </div>
        </div>
    </div>


    <script>
    //bind the page elements to these variables...
    let showPassword = document.getElementById("showpassword");
    let password = document.getElementById("password");
    let mismatchError = document.getElementById("mismatch-comment");
    let confirmPassword = document.getElementById("confirm-password");

    function comparePasswordStrings() {
        if ((confirmPassword.value != "") && (password.value === confirmPassword.value)) {
            mismatchError.classList.add("hide-error");
        } else if ((confirmPassword.value != "") && (password.value != confirmPassword.value)) {
            mismatchError.classList.remove("hide-error");
        }
    }

    function showOrHidePassword() {

        if (showPassword.checked) {
            //console.log("on");
            password.setAttribute('type', 'text');
            confirmPassword.setAttribute('type', 'text');
        } else {
            //console.log("off");
            password.setAttribute('type', 'password');
            confirmPassword.setAttribute('type', 'password');
        }
    }

    //Add a click event listener to the SHOW PASSWORD checkbox...
    document.getElementById("showpassword").addEventListener("click", showOrHidePassword);
    //Add an input or focusout event listener to the PASSWORD and CONFIRM PASSWORD fields...
    document.getElementById("password").addEventListener("focusout", comparePasswordStrings);
    document.getElementById("confirm-password").addEventListener("focusout", comparePasswordStrings);
    </script>

    <?php
  require 'components/footer.php'

?>
</body>

</html>
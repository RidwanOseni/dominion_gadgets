<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .input-label,
        .input-field {
            display: block;
        }

        .input-field {
            margin: 0 0 20px 0;
        }

        .input-field,
        button#submit {
            width: 100%;
            height: 2em;
        }

        #login-title {
            margin-bottom: 20px;
        }

        .login-form {
            border: 1px solid grey;
            padding: 10px 50px 20px;
            min-width: 300px;
            max-width: 300px;
        }

        .mismatch {
            margin-bottom: 20px;
            font-style: italic;
            font-size: small;
            background-color: red;
            color: yellow;
            text-align: center;
            padding: 7px 0;
        }

        .hide-error {
            display: none;
        }

        button#submit {
            border-radius: 5px;
            padding: 1em auto;
            background-color: #579e57;
        }
    </style>
</head>

<body>
    <form action="">
            <div class="login-form">
                <h3 id="login-title">LOGIN</h3>
                <label for="username" class="input-label">Username:</label>
                <input type="text" class="input-field" name="username" id="username">

                <label for="password" class="input-label">Password:</label>
                <input type="password" class="input-field" name="password" id="password">

                <label for="xpassword" class="input-label">Confirm Password:</label>
                <input type="password" class="input-field" name="xpassword" id="xpassword">

                <p class="mismatch hide-error" id="mismatch-comment">mismatch of Password and Confirm Password</p>

                <label for="showpassword" class="input-field">
                    <input type="checkbox" name="showpassword" id="showpassword">
                    Show Password
                </label>

                <button type="submit" name="submit" id="submit-btn">SUBMIT</button>
            </div>
    </form>

    <script>
        //bind the page elements to these variables...
        let showPassword = document.getElementById("showpassword");
        let password = document.getElementById("password");
        let mismatchError = document.getElementById("mismatch-comment");
        let confirmPassword = document.getElementById("xpassword");

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
            }
            else {
                //console.log("off");
                password.setAttribute('type', 'password');
                confirmPassword.setAttribute('type', 'password');
            }
        }

        //Add a click event listener to the SHOW PASSWORD checkbox...
        document.getElementById("showpassword").addEventListener("click", showOrHidePassword);
        //Add an input or focusout event listener to the PASSWORD and CONFIRM PASSWORD fields...
        document.getElementById("password").addEventListener("focusout", comparePasswordStrings);
        document.getElementById("xpassword").addEventListener("focusout", comparePasswordStrings);


    </script>
</body>

</html>
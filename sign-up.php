<?php
  require ('components/regscript.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="assets/css/sign-up.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
</head>

<body>
    <?php
  require ('components/header.php');
?>
    <form method="POST" action="sign-up.php" enctype="multipart/form-data">
        <h4 class="text-center mt-5">Register Here</h4>
        <div class="col-md-7 offset-md-2">


            <div class="form-group row">
                <div class="col-md-6">
                    <label for="first_name">First Name</label>
                    <input type="text" class="form-control" id="first_name" name="USER_FIRSTNAME" aria-describedby=""
                        autocomplete="first_name" placeholder="Enter your first name" required>
                </div>

                <div class="col-md-6">
                    <label for="last_name">Last Name</label>
                    <input type="text" class="form-control" id="last_name" name="USER_LASTNAME" aria-describedby=""
                        placeholder="Enter your last name" autocomplete="last_name" required>
                </div>

            </div>
            <div class="form-group">
                <label for="address_name">Address</label>
                <input type="text" class="form-control" id="address_name" name="USER_ADDRESS" placeholder="Home Address"
                    required>
            </div>

            <div class="form-group">
                <label for="phone_num">Phone Number</label>
                <input type="number" class="form-control" id="phone_num" name="USER_PHONE"
                    placeholder="Enter your phone number" required>
            </div>


            <div class="form-group">
                <p>Please select your gender:</p>
                <input type="radio" id="male" name="GENDER" value="male">
                <label for="male">Male</label><br>
                <input type="radio" id="female" name="GENDER" value="female">
                <label for="female">Female</label><br>
                <input type="radio" id="other" name="GENDER" value="other">
                <label for="other">Other</label>
            </div>


            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="USER_EMAIL"
                    aria-describedby="emailHelp" placeholder="Enter your Email Address">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                    else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"
                    name="USER_PASSWORD" required minlength="6">
            </div>




            <div class="col-xs-12">
                <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
                <!-- <button type="button" class="btn-lrg submit-btn" name="regbtn">Submit</button> -->
                <!-- <button class=" btn-lrg submit-btn" name="regbtn">Submit</button> -->
            </div>
        </div>
    </form>





    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>
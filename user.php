<?php
  require 'components/header.php';
  
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="assets/css/admin.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>

<body>
    <div class="header_section">
        <center><i class="fas fa-users" id= "user"></i></center><br>

    </div>

    <div class="row">

        <div class="col-md-5">
            <ul class="sidenav_list sidenav_section">
                <a href="">
                    <li>View Profile</li>
                </a>
                <a href="">
                    <li>View Category</li>
                </a>
                <a href="">
                    <li>View Product</li>
                </a>
                <a href="">
                    <li>Comment</li>
                </a>
                <a href="">
                    <li>View Sold Items</li>
                </a>
                <a href="">
                    <li>Log Off</li>
                </a>
            </ul>
        </div>


        <div class="col-md-7 p-5 justify-content-center body_section">

            <h4>ADMIN DETAILS</h4>

            <form class="adminDetails" action="">
                <label for="adminID" class="input-label">Admin ID:</label>
                <input type="number" class="input-field w-75" name="adminID">

                <label for="firstName" class="input-label">First Name:</label>
                <input type="text" class="input-field w-75" name="firstName">

                <label for="lastName" class="input-label">Last Name:</label>
                <input type="text" class="input-field w-75" name="lastName">

                <label for="email" class="input-label">Email:</label>
                <input type="text" class="input-field w-75" name="email">




                <div class="form-group">
                    <b>
                        <p>Gender:</p>
                    </b>

                    <input type="radio" id="male" name="gender" value="male">
                    <label for="male">Male</label><br>

                    <input type="radio" id="female" name="gender" value="female">
                    <label for="female">Female</label><br>
                </div>





            </form>



        </div>
    </div>

    <?php
  require 'components/footer.php'

?>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</body>

</html>
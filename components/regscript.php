<?php
  require ('dominiondb.php');
?>

<?php 
if (isset($_REQUEST) && !empty($_POST)) {
    $firstname = $_POST['USER_FIRSTNAME'];
    $lastname = $_POST['USER_LASTNAME']; 
    $gender = $_POST['GENDER'];
    $role = 2;
    $phoneNumber = $_POST['USER_PHONE'];
    $password =$_POST['USER_PASSWORD'];
    $address = $_POST['USER_ADDRESS'];
    $email = $_POST['USER_EMAIL'];
    
    $firstname = mysqli_real_escape_string($conn, $firstname);
    $lastname = mysqli_real_escape_string($conn, $lastname);
    $gender = mysqli_real_escape_string($conn, $gender);
    $phoneNumber = mysqli_real_escape_string($conn, $phoneNumber);
    $password = mysqli_real_escape_string($conn, $password);
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $address = mysqli_real_escape_string($conn, $address);
    $email = mysqli_real_escape_string($conn, $email);


    $sql = "INSERT INTO `users` (USER_FIRSTNAME, USER_LASTNAME, GENDER, USER_ROLE, USER_PHONE, USER_EMAIL, USER_PASSWORD, USER_ADDRESS) VALUES ('$firstname', '$lastname', '$gender', '$role', '$phoneNumber', '$email', '$hashedPassword', '$address')";

    if (mysqli_query($conn, $sql)) {
        $msg = "you have succesfully registered... <a href = 'project-login.php'>LOGIN</a> now..";

        echo "<div class = 'echo'>";

        echo $msg;

        echo "</div>";
    } else {
        echo "error" . $sql . mysqli_error($conn);
    }
}
mysqli_close($conn);
    ?>

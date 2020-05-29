<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dominiondb";
//create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

//Check connection
if(!$conn) {
    die("Failed to connect: ". mysqli_connect_error());
}
// } else {
//     echo "Successful Connection";
// }
?>
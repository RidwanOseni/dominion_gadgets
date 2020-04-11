<?php 

require('dominiondb.php');
session_start();

var_dump($_SESSION);

return;

if(isset($_SESSION["sign-in"]))
 {  
   echo "session started"
     $session_email =  $_SESSION['sign-in'];
  $sql = "SELECT *  FROM `users` WHERE `USER_EMAIL`='$session_email'";
  $query = mysqli_query($conn, $sql);
  $num_rows = mysqli_num_rows($query);
  $row = mysqli_fetch_array($query, MYSQLI_ASSOC);
  if($num_rows === 1)
  {
        $firstname = $row['USER_FIRSTNAME'];
       $lastname = $row['USER_LASTNAME'];
       $email = $row['USER_EMAIL'];
        $phone = $row['USER_PHONE'];
        $role = $row['USER_ROLE'];
        $status = $row['USER_STATUS'];
 }else{
      $Message = urlencode("You are not Logged, Pls Fill Your Username and Password Below");
      header("Location:login.php?Message=".$Message);
      die;
      echo "session failed"
 }
}
?>


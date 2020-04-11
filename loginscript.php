<?php
require('components/dominiondb.php');
session_start();

if(isset($_POST["submit"]))
{
      $username = mysqli_escape_string($conn, $_POST['username']);
      $password = mysqli_escape_string($conn, $_POST['password']);
      $sql = "SELECT *  FROM `users` WHERE `USER_EMAIL`='$username'";
      $query = mysqli_query($conn, $sql);
      $num_rows = mysqli_num_rows($query);
      $row = mysqli_fetch_array($query, MYSQLI_ASSOC);
      var_dump($row['USER_PASSWORD']);
      if($num_rows === 1)
      {
                  $hashedPassword = $row['USER_PASSWORD'];
                  /**
                   * Verify the password that the user has entered
                   */
                  if(password_verify($password,$hashedPassword))
                  {
                        // Declare a global session variable and set the fetched email into it.
                        $_SESSION["sign-in"] = $row['USER_EMAIL'];
                        $Message = urlencode("Login Sucessful");
                       
                        if($row['USER_ROLE'] == 2){
                              header("Location:index.php");
                        }else{
                              
                              header('location: admin.php');
                        }
                  }else {
                        $Message = urlencode("Login Failed,, Kindly check your username and password");
                        header("Location:project-login.php?Message=".$Message);
                        die;
                        }
            }
            else{
                  $Message = urlencode("User does not exist,please <a href='reg2.php'>Create an account</a>");
                  header("Location:project-login.php?Message=".$Message);
                  die;  
            }
    }
?>






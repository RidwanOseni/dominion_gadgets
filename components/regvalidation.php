<?php
require 'components/header.php'

//define variables and set to empty values
$firstnameErr = $lastnameErr = $emailErr = $telephoneErr = $passwordErr = $house_addressErr = $billing_addressErr = $usernameErr = $passwordErr = "";

$firstname = $lastname = $email = $telephone = $password = $house_address = $billing_address = $username = $password = "";

if (isset($_POST["regsubmit"])) {
    if (empty($_POST["firstname"])) {
        $firstnameErr = "First Name is required";
      } else {
        $firstname = check_form_input ($_POST["firstname"]);
      }

      // To check if first name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
        $firstnameErr = "Only letters and white space allowed";
      }

}

if (isset($_POST["regsubmit"])) {
    if (empty($_POST["lastname"])) {
        $lastnameErr = "Last Name is required";
      } else {
        $lastname = check_form_input ($_POST["lastname"]);
      }

      // To check if last name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
        $lastnameErr = "Only letters and white space allowed";
      }

}

if (isset($_POST["regsubmit"])) {
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
      } else {
        $email = check_form_input ($_POST["email"]);
      }

      // To check if email is well formed
      if (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $str)) {
        $emailErr = "Email is not well formed";
      }
}

if (isset($_POST["regsubmit"])) {
    if (empty($_POST["telephone"])) {
        $telephoneErr = "Telephone number is required";
      } else {
        $telephone = check_form_input ($_POST["telephone"]);
      }

      // To check if telephone number only contains number and selected signs
      if (!preg_match('/^(?:\+?1[-. ]?)?\(?([2-9][0-8][0-9])\)?[-. ]?([2-9][0-9]{2})[-. ]?([0-9]{4})$/', $_POST['telephone'])) {
        $telephone = "Telephone number not valid";
      }

}

if (isset($_POST["regsubmit"])) {
    if (empty($_POST["house_address"])) {
        $house_addressErr = "House address is required";
      } else {
        $house_address = check_form_input ($_POST["house_address"]);
      }

      // To check if house address is well formed
      if (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $str)) {
        $house_addressErr = "House address is not valid";
      }
    }

    if (isset($_POST["regsubmit"])) {
        if (empty($_POST["billing_address"])) {
            $billing_addressErr = "Billing address is required";
          } else {
            $billing_address = check_form_input ($_POST["billing_address"]);
          }
    
          // To check if billing address is well formed
          if (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $str)) {
            $billing_addressErr = "Billing address is not valid";
          }
        }

        if (isset($_POST["regsubmit"])) {
            if (empty($_POST["username"])) {
                $usernameErr = "Username is required";
              } else {
                $username = check_form_input ($_POST["username"]);
              }
        
            }

        if (isset($_POST["regsubmit"])) {
            if (empty($_POST["password"])) {
                $passwordErr = "Password is required";
              } else {
                $password = check_form_input ($_POST["password"]);
              }
        
            }
        
    

?>
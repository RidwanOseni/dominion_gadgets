<?php
require ('dominiondb.php');
if(isset($_POST['add_cat']))
{
    
    $category_name = mysqli_real_escape_string($conn, $_POST['cat_name']);

    $sql ="INSERT INTO categories (CATEGORY_NAME) VALUES('$category_name')";
    
    if(mysqli_query($conn, $sql)){
       $success ="Category Added Successfully";
    }else{
        $error = "Could not add Category".mysqli_error($conn);
    }

}
?>
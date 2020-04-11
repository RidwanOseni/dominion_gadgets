<?php
require ('dominiondb.php');
if(isset($_POST['add']))
{
    
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $price = mysqli_real_escape_string($conn, $_POST['price']);
    $quantity = mysqli_real_escape_string($conn, $_POST['quantity']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $category = mysqli_real_escape_string($conn, $_POST['category']);
    $status = mysqli_real_escape_string($conn, $_POST['status']);

    $sql ="INSERT INTO `products` (`PRODUCT_CATEGORY`, `PRODUCT_NAME`, `PRODUCT_DESCRIPTION`, `PRODUCT_QUANTITY`, `PRODUCT_PRICE`, `PRODUCT_STATUS`) VALUES(null, '$name', '$description', '$quantity', '$price', '$status')";
    
    if(mysqli_query($conn, $sql)){
       $success ="Product Added Successfully";
    }else{
        $error = "Could not add product".mysqli_error($conn);
    }

}
?>
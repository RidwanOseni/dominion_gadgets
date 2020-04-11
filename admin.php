<?php require 'components/addProduct.php'; ?>
<?php require 'components/addCategory.php'; ?>

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
        <center><i class="fas fa-user-tie" id="admin"></i></center><br>
        <center>
            <p id="admin_text">This is admin panel. Proceed with caution</p>
        </center>

    </div>

    <div class="row">

        <div class="col-md-5">
            <ul class="sidenav_list sidenav_section">
                <a href="">
                    <li>Add</li>
                </a>
                <a href="">
                    <li>Delete</li>
                </a>
                <a href="">
                    <li>Update</li>
                </a>
                <a href="">
                    <li>Search</li>
                </a>
                <a href="">
                    <li>View Sold Items</li>
                </a>
                <a href="">
                    <li>Log Off</li>
                </a>
            </ul>
        </div>


        <div class="col-md-7 p-5 container-fluid justify-content-center body_section">
            <?php
// If there is error message
     if(isset($error)) {  
?>
            <div class="alert alert-danger" role="alert">
                <?php echo $error; ?>
            </div>

            <?php
}
// If there is success message
if(isset($success))
{
?>
            <div class="alert alert-success" role="alert">
                <?php echo $success; ?>
            </div>
            <?php
}
?>
            <h4 class>PRODUCT DETAILS</h4>
            <hr />
            <form class="form" method="post" action="">

                <div class="form-group">
                    <label for="category" class="input-label">Product Category</label>
                    <select class="form-control w-75 text-dark" name="category">
                        <option value="1">Mobile Phones</option>
                        <option value="">Phone Accessories</option>
                        <option value="">Cameras</option>
                        <option value="">Camera Accessories</option>
                    </select>
                </div>


                <div class="form-group">
                    <label for="productName" class="input-label">Product Name</label>
                    <input type="text" class="form-control w-75" name="name">
                </div>

                <div class="form-group">
                    <label for="lastName">Price</label>
                    <input type="number" class="form-control w-75" name="price">
                </div>
                <div class="form-group">
                    <label for="lastName">Quantity</label>
                    <input type="number" class="form-control w-75" name="quantity">
                </div>

                <label for="customRadioInline1">Status</label>
                <div class="form-group">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline1" name="status" value="Active"
                            class="custom-control-input">
                        <label class="custom-control-label" for="customRadioInline1">Active</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline2" name="status" value="InActive"
                            class="custom-control-input">
                        <label class="custom-control-label" for="customRadioInline2">InActive</label>
                    </div>
                </div>

                <div class="form-group">
                    <label for="lastName">Description</label>
                    <textarea class="form-control w-75" name="description"></textarea>
                </div>
                <button type="submit" name="add" class="btn btn-primary">Add</button>

            </form>

            <div class="cat_section">
                <h4 class>CATEGORY DETAILS</h4>

                <form class="form" method="post" action="">
                    <div class="form-group">
                        <label for="productName" class="input-label">Product Name</label>
                        <input type="text" class="form-control w-75" name="cat_name">
                    </div>
            </div>
            <button type="submit" name="add_cat" class="btn btn-primary">Add</button>
            </form>



        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</body>

</html>
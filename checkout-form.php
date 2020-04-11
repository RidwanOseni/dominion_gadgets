<?php
  require 'components/header.php';
  
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="assets/css/checkout_form.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>

<body>
    <!-- <div class="container-fluid"> -->
    <div class="container">

        <div class="order_details">
            <h3>Checkout</h3>
            <hr>
            <h4>Cart <span class="price p-3">
                    <b>4</b></span></h4>
            <hr>

            <!-- <p><a href="#top">Product</a><span class="price">$15</span></p> -->
                
            <p>Product <span class="price p-3 text-right"><b>$30</b></span></p>

            <hr>
            <p>Total <span class="price"><b>$30</b></span></p>
            <hr>


            <div class="container-fluid">
                <form class="form" action="">
                    <div class="row text-white">
                        <div class="col-md-6">
                            <h5>Personal Details</h5>
                            <hr />
                            <div class="form-group">
                                <label for="fname">Full Name</label>
                                <input type="text" id="fname" class="form-control" name="firstname" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" id="email" class="form-control" name="email" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" id="address" class="form-control" name="address" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="city">City</label>
                                <input type="text" id="city" class="form-control" name="city" placeholder="">
                            </div>
                        </div>


                        <div class="col-md-6">
                            <h5>Card Details</h5>
                            <hr />
                            <div class="form-group">
                                <label for="cardnumber">Card number</label>
                                <input type="text" id="cardnumber" class="form-control" name="cardnumber" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="cardname">Name on card</label>
                                <input type="text" id="cardname" class="form-control" name="cardname" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="expdate">Expiry date</label>
                                <input type="text" id="expdate" class="form-control" name="expdate" placeholder="Month/Year">
                            </div>
                            
                            
                            

                            

                            <!-- <label for="cardnumber">Card number</label>
                            <input type="number" id="cardnumber" name="cardnumber" placeholder="">

                            <label for="cardname">Name on card</label>
                            <input type="text" id="cardname" name="cardname" placeholder="">

                            <label for="expdate">Expiry date</label>
                            <input type="text" id="expdate" name="expdate" placeholder="Month/Year">
                            
                            <label for="city">City</label>
                            <input type="text" id="city" name="city" placeholder=""> -->
                        </div>
                    </div>
                    <div class="col-xs-12">
				<div class="btn-lrg submit-btn">Submit</div>
			</div>
                </form>
            </div>


            <!-- <form action=""> -->
            <!-- <div class="container">
                        <!-- <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i>
                                <b>4</b></span></h4>
                        <!-- <p><a href="#">Product 1</a> <span class="price">$15</span></p> -->

                        <!-- <hr>
                        <p>Total <span class="price" style="color:black"><b>$30</b></span></p>
                        <hr>

                        <div class="row">
                            <div class="col-md-6">
                                <h5>Personal Details</h5>
                                <label for="fname">Full Name</label>
                                <input type="text" id="fname" name="firstname" placeholder="">
                                <label for="email">Email</label>
                                <input type="text" id="email" name="email" placeholder="">
                                <label for="adr">Address</label>
                                <input type="text" id="adr" name="address" placeholder="">
                                <label for="city">City</label>
                                <input type="text" id="city" name="city" placeholder="">
                            </div>
                            <div class="col-md-6">
                            <h5>Card Details</h5>
                                <label for="cardnumber">Card number</label>
                                <input type="number" id="cardnumber" name="cardnumber" placeholder="">
                                <label for="cardname">Name on card</label>
                                <input type="text" id="cardname" name="cardname" placeholder="">
                                <label for="expdate">Expiry date</label>
                                <input type="text" id="expdate" name="expdate" placeholder="Month/Year">
                                <label for="city">City</label>
                                <input type="text" id="city" name="city" placeholder="">

                            </div>

                            <button type="button" class="btn ">Small button</button>


                        </div> --> 


            <!-- </div> -->





            <!-- </form> -->


        </div>

    </div>
    <!-- </div> -->
    <?php
  require 'components/footer.php'

?>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</body>

</html>
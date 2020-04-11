<?php
  require 'dominiondb.php'
  
?>
        <div class="header_wrapper bg-dark">
            <a href="index.php"><img src="assets/logo/dominionlogo.png" alt="" id="logo"></a>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
                <ul class="navbar-nav ml-auto ">
                    <li class="nav-item active">
                        <a class="nav-link text-white" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="about-us.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="category.php">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="contact-us.php">Contact Us</a>
                    </li>
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown">
                            Login
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item " href="project-login.php">Login</a>
                            <a class="dropdown-item" href="sign-up.php">Sign Up</a>
                    </li>
                </ul>

            </div>
        </nav>
    </header>

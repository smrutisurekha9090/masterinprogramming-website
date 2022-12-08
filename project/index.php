<?php

session_start();

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!-- favicon  -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <!-- font awesome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Master in programming</title>
    <style>
        *body{

        }
        .fa-code {
            color: #9f8181;
        }

        .navbar-brand {
            font-family: 'Architects Daughter', cursive;
            font-weight: bold;
            font-size: 20px;
        }

        .btn-outline-success {
            width: 30%;
            border-radius: 10px;
        }

        .search-placeholder {
            width: 70%;
            border-radius: 10px;
        }

        .signup-login {
            border-radius: 10px;
        }
        /* .card-container{
            background-color:rgb(92, 92, 104);
        } */
       
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top py-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><i class="fas fa-code"></i>
                <marquee behaviour="alternate">Master in Programming</marquee>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="/account.html" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Accounts
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/login.html">Login</a></li>
                            <li><a class="dropdown-item" href="/logout.html">Log out?</a></li>
                            <li><a class="dropdown-item" href="/support.html">Support</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="/other.html">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="registrationform/form.php" target="_self">Register Here</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#mymodal">Enroll
                            Now</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control search-placeholder mx-3" type="search" placeholder="Search"
                        aria-label="Search">
                    <button class="btn btn-outline-success mx-2" type="submit">Search</button>
                </form>
                <div>
                    <button class="btn btn-danger signup-login mx-2" data-bs-toggle="modal"
                        data-bs-target="#signup">SignUp</button>
                    <button class="btn btn-danger signup-login mx-2" data-bs-toggle="modal"
                        data-bs-target="#login">Login</button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Session setting for Sign up -->

    <?php
   
   if(isset($_SESSION['signup'])){
   if(isset($_SESSION['showAlet'])){

     if($showAlert){
         echo '<div class="alert alert-success alert-dismissible fade show" role="alert"><i class="far fa-check-circle"></i>
         <strong>Success!</strong> You have Signed up successfully.
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>';
         $_SESSION['showAlert']=false;

     }
    }
     else{
         echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
         <strong>Opps!</strong> You are almost done linking your account.
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>';
     }  
    }
    

  ?>
    <!-- Session setting for login -->
    <?php
                    if(isset($_SESSION['signin'])==1)
                    {
                        if($_SESSION['signin'])
                        {
                           echo '<div class="alert alert-success alert-dismissible fade show" role="alert"><i class="far fa-check-circle"></i>
                           <strong>Success!</strong> You are Logged in.
                           <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> </div>';
                        }
                        else
                        {
                           echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                           <strong>Opps!</strong> Login Unsuccessful.
                           <button type="button" class="btn-close" data-bs-dismiss="alert"     aria-label="Close"></button> </div>';
                        }  
                   
                    }  
                ?>


    <!-- carousel -->

    <div class="container my-4">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button t
                ype="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>

            <div class="carousel-inner my-1">
                <div class="carousel-item active">
                    <img src="img1.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>
                            <marquee behaviour="alternate">Welcome to Master in Programming</marquee>
                        </h3>
                        <p>C programming,Web Development,and Many More Language</p>
                        <button type="button" class="btn btn-danger">C programming</button>
                        <button type="button" class="btn btn-primary">Web development</button>
                        <button type="button" class="btn btn-success">Technology</button>
                    </div>
                </div>
                <div class="carousel-item my-1">
                    <img src="img2.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Welcome to Master in Programming</h3>
                        <p>C Programming,Web Development,and Many More Language</p>
                        <button type="button" class="btn btn-danger">C programming</button>
                        <button type="button" class="btn btn-primary">Web development</button>
                        <button type="button" class="btn btn-success">Technology</button>
                    </div>
                </div>
                <div class="carousel-item my-1">
                    <img src="img3.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Welcome to Master in Programming</h3>
                        <p>C Programming,Web Development,and Many More Language</p>
                        <button type="button" class="btn btn-danger">C programming</button>
                        <button type="button" class="btn btn-primary">Web development</button>
                        <button type="button" class="btn btn-success">Technology</button>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>


    <!-- card  -->
    <div class="card-container">
        <div class="container my-5">
            <div class="row mb-2 d-flex justify-content-center align-content-center">
                <!--adjusting elements to centre-->
                <div class="card col-sm-6" style="width: 25rem;">
                    <img src="website-img/cLanguage-img.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">C programming</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                        <a href="#" class="btn btn-primary">C programming</a>
                    </div>
                </div>
                <div class="card col-sm-6 mx-5" style="width: 25rem;">
                    <img src="website-img/c++-img.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">C++</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                        <a href="#" class="btn btn-primary">C++</a>
                    </div>
                </div>
            </div>

        </div>

        <div class="container my-5">
            <div class="row mb-2 d-flex justify-content-center align-content-center">
                <!--adjusting elements to centre-->
                <div class="card col-sm-6" style="width: 25rem;">
                    <img src="website-img/ml-img.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Machine learning</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                        <a href="#" class="btn btn-primary">Machine learning</a>
                    </div>
                </div>
                <div class="card col-sm-6 mx-5" style="width: 25rem;">
                    <img src="website-img/python-img.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Python</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                        <a href="#" class="btn btn-primary">Python</a>
                    </div>
                </div>
            </div>

        </div>

        <div class="container my-5">
            <div class="row mb-2 d-flex justify-content-center align-content-center">
                <!--adjusting elements to centre-->
                <div class="card col-sm-6" style="width: 25rem;">
                    <img src="website-img/webDev-img.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Web Development</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                        <a href="#" class="btn btn-primary">Web Development</a>
                    </div>
                </div>
                <div class="card col-sm-6 mx-5" style="width: 25rem;">
                    <img src="website-img/learning-img.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Learning</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                        <a href="#" class="btn btn-primary">Learning</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- <div class="container">
        <div class="row bg-danger">
            <div class="col">
                1 of 2
            </div>
            <div class="col.md-2 col.sm-6 col-6 border">
                2 of 2
            </div>
        </div>
        <div class="row bg-success">
            <div class="col border">
                1 of 3
            </div>
            <div class="col border">
                2 of 3
            </div>
            <div class="col border">
                3 of 3
            </div>
        </div>
    </div> -->

    <div class="row d-flex justify-content-center align-content-center my-0 border-top text-light bg-dark" id="footer">
        <div class="col-2">
            <a href="#">About</a>
            <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Terms & conditions</a></li>
            </ul>
        </div>
        <div class="col-4 offset-1">
            <form>
                <h5>Contact Us</h5>
                <div class="btn-group btn-block">
                    <a href="sushilkr0147@gmail.com" class="btn btn-success">Email</a>
                    <a href="#" class="btn btn-primary">Call - +91-6209141220 </a>
                </div>
            </form>
        </div>

        <div class="d-flex justify-content-center my-sm-0 bg-opacity-50 bg-opacity-10 ">
            <p>©
                <?php echo date('Y ');?>Masterinprogramming.com-All Rights Reserved-
            </p>
            <a href="#" class="text-decoration-none">Privacy Policy</a>
            <ul class="list-unstyled d-flex">
                <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24">
                            <use xlink:href="#twitter"></use>
                        </svg></a></li>
                <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24">
                            <use xlink:href="#instagram"></use>
                        </svg></a></li>
                <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24">
                            <use xlink:href="#facebook"></use>
                        </svg></a>
                </li>
            </ul>
        </div>
    </div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
        crossorigin="anonymous"></script>

    <Option 2: Separate Popper and Bootstrap JS>

        <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script> -->
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script> -->
    </Option>



    <!-- Modal for Enroll now -->

    <div class="modal fade" id="mymodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="mymodal">Enroll Now!
                    </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">


                    <form class="row g-3" action="enroll.php" method="POST">
                        <div class="col-md-6">
                            <label for="name" class="form-label">First Name</label>
                            <input type="name" name="firstname" class="form-control" id="firstname"
                                placeholder="First Name">
                        </div>
                        <div class="col-md-6">
                            <label for="name" class="form-label">Last Name</label>
                            <input type="name" name="lastname" class="form-control" id="lastname"
                                placeholder="Last Name">
                        </div>
                        <div class="col-12">
                            <label for="inputEmail4" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="email"
                                placeholder="Enter Your Email">
                        </div>
                        <div class="col-12" id="gender">
                            Gender : <input type="radio" name="gender" value="female">Female
                            <input type="radio" name="gender" value="male">Male
                            <input type="radio" name="gender" value="other"> Other
                        </div>
                        <div class="col-12">
                            <label for="Number" class="form-label">Contact Number</label>
                            <input type="number" name="number" class="form-control" id="contactno"
                                placeholder="Contact Number">
                        </div>
                        <div class="col-12">
                            <label for="college">College Name</label>
                            <select class="form-control" name="college" id="college">
                                <option>Indian Institute Of Technology (IIT), Bhubaneswar</option>
                                <option>Gandhi Institute For Technology (GIFT), Bhubaneswar</option>
                                <option>College Of Engineering, Bhubaneswar</option>
                                <option>Silicon Institute of Technology Bhubaneswar</option>
                                <option>Kalinga Institute of Industrial Technology</option>
                                <option>Institute of Technical Education and Research (ITER)</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label for="branch">Branch</label>
                            <select class="form-control" name="branch" id="branch">
                                <option>Mechanical engineering</option>
                                <option>Electrical engineering</option>
                                <option>Civil engineering</option>
                                <option>Chemical engineering</option>
                                <option>Information technology(IT)</option>
                                <option>Computer Science Engineering(CSE)</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="inputCity" class="form-label">City</label>
                            <input type="text" name="city" class="form-control" id="city">
                        </div>
                        <div class="col-md-4">
                            <label for="state" class="form-label">State</label>
                            <select name="state" id="state" class="form-select">
                                <option selected>Andhra Pradesh</option>
                                <option selected>Arunachal Pradesh</option>
                                <option selected>Assam</option>
                                <option selected>Bihar</option>
                                <option selected>Chhattisgarh</option>
                                <option selected>Goa</option>
                                <option selected>Gujarat</option>
                                <option selected>Haryana</option>
                                <option selected>Himachal Pradesh</option>
                                <option selected>Jharkhand</option>
                                <option selected>Karnataka</option>
                                <option selected>Kerala</option>
                                <option selected>Madhya Pradesh</option>
                                <option selected>Maharashtra</option>
                                <option selected>Manipur</option>
                                <option selected>Meghalaya</option>
                                <option selected>Mizoram</option>
                                <option selected>Nagaland</option>
                                <option selected>Odisha</option>
                                <option selected>Punjab</option>
                                <option selected>Rajasthan</option>
                                <option selected>Sikkim</option>
                                <option selected>Tamil Nadu</option>
                                <option selected>Telangana</option>
                                <option selected>Tripura</option>
                                <option selected>Uttar Pradesh</option>
                                <option selected>Uttarakhand</option>
                                <option selected>West Bengal</option>
                                <option selected>Other</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label for="pincode" class="form-label">PIN</label>
                            <input type="number" name="pin" class="form-control" id="pin">
                        </div>
                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="checkbox">
                                <label class="form-check-label" for="checkbox">I agree </label>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal for SignUp -->

    <div class="modal fade" id="signup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="signup">Sign Up
                    </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form class="row g-3" action="signup.php" method="POST">
                        <div class="col-md-6">
                            <label for="name" class="form-label">First name</label>
                            <input type="text" name="firstname" class="form-control" id="firstname"
                                placeholder="First Name" required>
                        </div>
                        <div class="col-md-6">
                            <label for="name" class="form-label">Last name</label>
                            <input type="name" name="lastname" class="form-control" id="lastname"
                                placeholder="Last Name" required>
                        </div>
                        <div class="col-12">
                            <label for="username" class="form-label">User name</label>
                            <input type="text" name="username" class="form-control" id="username"
                                placeholder=" Create user name" required>
                            <h6 id="usererror" style="color:red;">**User name must be in between 6 to 12 character</h6>
                        </div>
                        <div class="col-12">
                            <label for="inputEmail4" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="email"
                                placeholder="Enter Your Email (optional)">
                        </div>
                        <div class="col-12">
                            <label for="contact" class="form-label">Contact Number</label>
                            <input type="tel" name="contact" class="form-control" id="contact"
                                placeholder="Contact Number" required>
                            <h6 id="contactEror" style="color:red;">**Please enter a valid phone number</h6>
                        </div>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" id="password"
                                    placeholder="Create password" required>
                            </div>
                            <div class="col-md-6">
                                <label for="confirmpassword" class="form-label">Confirm Password</label>
                                <input type="password" name="confirmpassword" class="form-control" id="confirmpassword"
                                    placeholder="Confirm password" required>
                                <h6 id="passwordEror" style="color:red;">**Password not matched</h6>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck" required>
                                <label class="form-check-label" for="gridCheck">
                                    I agree
                                </label>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center my-sm-0  border-top bg-opacity-50 bg-opacity-10 ">
                            <p>Already have an account?</p>
                            <a href="login_modal.php" class="text-decoration-none">Login</a>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" name="submit" value="submit"
                                id="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for login -->

    <div class="modal fade" id="login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="login">Login</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form id="myform" action="login.php" method="POST">
                        <div class="mb-3">
                            <label for="email" class="form-label">email</label>
                            <input type="email" name="email" required class="form-control" id="email"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="password" required>
                        </div>
                        <div class="mb-3 form-check">
                            <label class="form-check-label" for="checkbox">Remember me</label>
                            <input type="checkbox" name="checkbox" class="form-check-input" id="checkbox">
                        </div>
                        <button type="submit" class="btn btn-primary" name="submit" value="submit">Login</button>
                        <div class="d-flex justify-content-center my-sm-0  border-top bg-opacity-50 bg-opacity-10 ">
                            <a href="##" class="text-decoration-inline">Forgot Password</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- Validation of Form  -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="validation.js" charset="utf-8"></script>

    <!-- ...................  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>




</body>

</html>
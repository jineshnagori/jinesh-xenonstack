<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modified Bikes Dealer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!--Navbar Start-->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <!-- LOGO -->
            <a class="navbar-brand logo" href="">
                <img src="assets/images/logo.svg" alt="mbd-logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown" data-toggle="collapse"
                data-target=".navbar-collapse">
                <ul class="navbar-nav align-items-center">
                    <li class="nav-item">
                        <a href="#product" class="nav-link close-menu">Product</a>
                    </li>
                    <li class="nav-item">
                        <a href="contact/" class="nav-link close-menu">Contact</a>
                    </li>
                    <li class="nav-item">
                    <?php session_start();
                        if (isset($_SESSION['username']))
                            echo '<a href="logout/" class="nav-link close-menu">Logout</a>';
                        else
                            echo '<a href="login/" class="nav-link close-menu">Login</a>';
                        ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--Navbar End-->

    <!-- hero start -->
    <section class="hero">
        <div class="hero-img">
        </div>
        <div class="container">
            <div class="hero-content">
                <h1>Modified Bikes Dealer</h1>
                <p>We are a bike dealer that sells modified bikes.</p>
                <a href="#product" class="btn btn-primary btn-1">Get Started</a>
            </div>
        </div>
    </section>

    <!-- Product start -->
    <section id="product" class="product">
        <div class="container">
            <div class="product-content">
                <div class="row d-flex align-items-center justify-content-between">
                    <div class="col-lg-6 col-12">
                        <div class="product-img">
                            <img class="img-fluid" src="assets/images/b-1.jpg" alt="product">
                        </div>
                    </div>
                    <div class="product-desc col-lg-6 col-12 mt-50">
                        <div class="text-center">
                            <h1>Sultan</h1>
                            <p>INR 6,00,000</p>
                        </div>
                        <div class="product-btn">
                            <a href="#" class="btn btn-primary btn-2 w-100">Add to cart</a>
                        </div>
                        <div class="product-btn mt-4">
                            <a href="#" class="btn btn-primary btn-3 w-100">Buy it Now</a>
                        </div>
                    </div>
                </div>
                <div class="row d-flex align-items-center justify-content-between">
                    <div class="product-desc col-lg-6 col-12 mt-50">
                        <div class="text-center">
                            <h1>Retro 350</h1>
                            <p>INR 3,00,000</p>
                        </div>
                        <div class="product-btn">
                            <a href="#" class="btn btn-primary btn-2 w-100">Add to cart</a>
                        </div>
                        <div class="product-btn mt-4">
                            <a href="#" class="btn btn-primary btn-3 w-100">Buy it Now</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="product-img">
                            <img class="img-fluid" src="assets/images/b-2.jpg" alt="product">
                        </div>
                    </div>
                </div>
                <div class="row d-flex align-items-center justify-content-between">
                    <div class="col-lg-6 col-12">
                        <div class="product-img">
                            <img class="img-fluid" src="assets/images/b-3.jpg" alt="product">
                        </div>
                    </div>
                    <div class="product-desc col-lg-6 col-12 mt-50">
                        <div class="text-center">
                            <h1>Original Gangster</h1>
                            <p>INR 5,00,000</p>
                        </div>
                        <div class="product-btn">
                            <a href="#" class="btn btn-primary btn-2 w-100">Add to cart</a>
                        </div>
                        <div class="product-btn mt-4">
                            <a href="#" class="btn btn-primary btn-3 w-100">Buy it Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
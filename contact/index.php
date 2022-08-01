<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modified Bikes Dealer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <!--Navbar Start-->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <!-- LOGO -->
            <a class="navbar-brand logo" href="../index.php">
                <img src="../assets/images/logo.svg" alt="mbd-logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown" data-toggle="collapse"
                data-target=".navbar-collapse">
                <ul class="navbar-nav align-items-center">
                    <li class="nav-item">
                        <a href="../#product" class="nav-link close-menu">Product</a>
                    </li>
                    <li class="nav-item">
                        <a href="../contact/" class="nav-link close-menu">Contact</a>
                    </li>
                    <li class="nav-item">
                    <?php session_start();
                        if (isset($_SESSION['username']))
                            echo '<a href="../logout/" class="nav-link close-menu">Logout</a>';
                        else
                            echo '<a href="../login/" class="nav-link close-menu">Login</a>';
                        ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--Navbar End-->

    <!-- Product start -->
    <section id="contact" class="contact">
        <div class="container">
            <div class="contact-content">
                <div class="contact-form">
                    <h1 class="text-center">Contact Us</h1>
                    <form action="contact.php" method="post">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-3">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
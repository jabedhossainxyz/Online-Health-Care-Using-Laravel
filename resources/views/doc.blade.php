<!DOCTYPE html>
<html>

<head>
    <title>Join as a Doctor</title>
    <link rel="stylesheet" href="./assets/css/maicons.css">

<link rel="stylesheet" href="./assets/css/bootstrap.css">

<link rel="stylesheet" href="./assets/vendor/owl-carousel/css/owl.carousel.css">

<link rel="stylesheet" href="./assets/vendor/animate/animate.css">

<link rel="stylesheet" href="./assets/css/theme.css">
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 20px;
    }

    h1 {
        text-align: center;
        font-size: 24px;
        margin-bottom: 20px;
    }
    .navbar-button {
            display: inline-block;
            padding: 10px 20px;
            font-weight: bold;
            font-size: 20px;
            text-decoration: none;
            background-color: #007bff;
            color: black;
            border: none;
            border-radius: 5px;
            cursor: pointer;
    }

    .navbar-button:hover {
        background-color: #0056b3;
    }

</style>
</head>

<body>
<header>
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 text-sm">
                    <div class="site-info">
                        <a href="#"><span class="mai-call text-primary"></span> +00 123 4455 6666</a>
                        <span class="divider">|</span>
                        <a href="https://gmail.google.com"><span class="mai-mail text-primary"></span> one-health@gmail.com</a>
                    </div>
                </div>
                <div class="col-sm-4 text-right text-sm">
                    <div class="social-mini-button">
                        <a href="https://www.facebook.com"><span class="mai-logo-facebook-f"></span></a>
                        <a href="https://www.twitter.com"><span class="mai-logo-twitter"></span></a>
                        <a href="https://www.instagram.com"><span class="mai-logo-instagram"></span></a>
                    </div>
                </div>
            </div> <!-- .row -->
        </div> <!-- .container -->
    </div> <!-- .topbar -->
    @include('user.navbar')
</header>
    <h1>Join as a Doctor</h1>

    <form action="process_form.php" method="POST" enctype="multipart/form-data">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="specialty">Specialty:</label>
        <input type="text" id="specialty" name="specialty" required><br><br>

        <label for="profile_picture">Profile Picture:</label>
        <input type="file" id="profile_picture" name="profile_picture"><br><br>

        <button type="submit" class="navbar-button">Join</button>
        <button type="reset" class="navbar-button">Clear</button>
        
    </form>

    <script src="./assets/js/jquery-3.5.1.min.js"></script>

<script src="./assets/js/bootstrap.bundle.min.js"></script>

<script src="./assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="./assets/vendor/wow/wow.min.js"></script>

<script src="./assets/js/theme.js"></script>
</body>

</html>

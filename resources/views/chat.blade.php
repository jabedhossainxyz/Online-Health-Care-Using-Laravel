<!DOCTYPE html>
<html>

<head>
        <title>Send Message to Doctors</title>
        <meta name="copyright" content="Jabed Hossain">
        <link rel="stylesheet" href="./assets/css/maicons.css">

        <link rel="stylesheet" href="./assets/css/bootstrap.css">

        <link rel="stylesheet" href="./assets/vendor/owl-carousel/css/owl.carousel.css">

        <link rel="stylesheet" href="./assets/vendor/animate/animate.css">

        <link rel="stylesheet" href="./assets/css/theme.css">
        <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.5;
            margin: 20px;
        }
        
        h1 {
            text-align: center;
        }
        
        p {
            text-indent: 20px;
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
        <h1>Send Message to Doctors</h1>

        <form action="/send-message" method="POST">
                <label for="name">Your Name:</label>
                <input type="text" name="name" id="name" required><br><br>

                <label for="email">Your Email:</label>
                <input type="email" name="email" id="email" required><br><br>

                <label for="message">Message:</label><br>
                <textarea name="message" id="message" rows="5" required></textarea><br><br>

                <button type="submit">Send Message</button>
        </form>
        <script src="./assets/js/jquery-3.5.1.min.js"></script>

        <script src="./assets/js/bootstrap.bundle.min.js"></script>

        <script src="./assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

        <script src="./assets/vendor/wow/wow.min.js"></script>

        <script src="./assets/js/theme.js"></script>

</body>

</html>
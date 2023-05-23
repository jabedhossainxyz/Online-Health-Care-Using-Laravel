<!DOCTYPE html>
<html>

<head>
        <title>Send Message to Doctors</title>
        <link rel="stylesheet" href="./assets/css/maicons.css">

        <link rel="stylesheet" href="./assets/css/bootstrap.css">

        <link rel="stylesheet" href="./assets/vendor/owl-carousel/css/owl.carousel.css">

        <link rel="stylesheet" href="./assets/vendor/animate/animate.css">

        <link rel="stylesheet" href="./assets/css/theme.css">
</head>

<body>
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
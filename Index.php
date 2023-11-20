<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salone</title>
    <!-- css cdn  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- animation  -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- google fonts  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Nanum+Gothic&family=Outfit:wght@500&family=Playfair+Display:ital@1&display=swap" rel="stylesheet">
</head>
<style>
    * {
        font-family: 'Lucida Sans';
    }

    .heading {
        font-family: 'Dancing Script', cursive;
        font-family: 'Nanum Gothic', sans-serif;
        font-family: 'Outfit', sans-serif;
        font-family: 'Playfair Display', serif;
    }

    .sliderimg {
        height: 1000px;
        background-size: 100% 100%;
    }

    .heading {
        position: absolute;
        color: white;
        z-index: 1;
    }

    .banner {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 900px;
        background-size: 100% 100%;
        background-image: url('./assets/images/slider6.jpg');
    }

    .bannercontent>h1 {
        font-size: 100px !important;
    }

    .bannercontent>p {
        font-family: 'Dancing Script', cursive;
        font-family: 'Nanum Gothic', sans-serif;
        font-family: 'Outfit', sans-serif;
        font-family: 'Playfair Display', serif;
        font-size: 50px !important;
        color: white;
        position: relative;
        top: 85px;
    }

    .bannercontent {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 900px;
        background-size: 100% 100%;
        background-color: #0000008c;
        backdrop-filter: blur(2px);
        z-index: 10;
        width: 100%;
    }

    .contactcontainer {
        font-size: 20px;
        color: white;
        background-color: #0000008c;

        margin-left: 5px;
        backdrop-filter: blur(2px);
        width: 100%;
    }

    .contactcontainer>.content {
        margin-left: 50px;
        margin-bottom: 50px;

        border-left: 1px solid red;

    }

    .contactcontainer>.content>h1,
    p {
        margin-left: 10px;
        font-family: 'Dancing Script', cursive;
        font-family: 'Nanum Gothic', sans-serif;
        font-family: 'Outfit', sans-serif;
        font-family: 'Playfair Display', serif !important;


    }

    .weworkimg {
        height: 700px;
        width: 100%;
    }

    .introcontent {
        background-color: white;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 200px;
    }

    .introcontent>.content>h1 {
        font-family: 'Dancing Script', cursive;
        font-family: 'Nanum Gothic', sans-serif;
        font-family: 'Outfit', sans-serif;
        font-family: 'Playfair Display', serif !important;
        color: #be8f45;
        font-size: 50px;
    }

    .howeworkcontent {
        background-image: url('./assets/images/texturedimg.jpg');
        background-size: 100% 100%;
        width: 161vh;
    }

    .howeworkcontainer>.content {
        display: flex;
        flex-direction: row;
    }
</style>

<body>
    <?php
    include("./Header.php");
    ?>
    <div class="banner">
        <div class="bannercontent">
            <h1 class="heading " data-aos="fade-down" data-aos-easing="linear" data-aos-delay="200" data-aos-offset="0">GENTLEMAN'S GROOMING</h1>
            <p>Salone & spa</p>
        </div>
        <div class="contactcontainer">
            <div class="content">
                <h1>Contact Us</h1>
                <p>+91 8220298718</p>
            </div>
        </div>
    </div>

    <div class="introcontent">
        <div class="content">
            <h1>
                "Crafting Confidence, One Cut at a Time!"</h1>
        </div>
    </div>

    <div class="howeworkcontainer">
        <div class="content">
            <div class="howeworkimg">
                <img src="./assets/images/slider2.jpg" class="weworkimg" alt="">
            </div>
            <div class="howeworkcontent">
                <h1>cotent</h1>
            </div>
        </div>
    </div>
</body>

</html>
<script>
    AOS.init();
</script>
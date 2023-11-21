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
        background-image: url('./assets/images/slider2.jpg');
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
        height: 250px;
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
        width: 50%;
        height: 700px
    }

    .howeworkcontainer>.content {
        display: flex;
        flex-direction: row;
    }

    .howeworkcontent>.content {
        display: flex;
        flex-direction: column;
        height: 100%;
        background-color: #00000078;
    }


    .howeworkcontent>.content>h3 {
        color: #be8f45;
        font-size: 70px;
        font-family: 'Playfair Display', serif !important;

    }

    .howeworkimg {
        background-image: url("./assets/images/slider1.jpg");
        background-size: cover;
        width: 50%;
    }

    .howeworkimg>.weworkbackground {
        background-color: #00000047;
        width: 100%;
        height: 700px;
        display: flex;
    }

    .stepheadingcontent>h1 {
        color: #be8f45;
        font-size: 70px;
        display: flex;
        justify-content: center;
        font-family: 'Playfair Display', serif !important;

    }

    .stepscontainer {
        display: flex;
        justify-content: center;
        align-self: center;
        flex-direction: column;
        gap: 115px;
        padding: 90px;
    }

    .stepscontainer>h2>span {
        display: flex;
        color: white;
        font-size: 35px;
        background-color: #be8f45;
        font-family: 'Playfair Display', serif !important;
        padding: 0px 15px;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 50%;
    }

    .stepscontainer>h2 {
        color: #a3a3a3;
        display: flex;
        align-items: center;
        font-size: 19px !important;
        gap: 10px;
    }

    .serviceheading>img {
        height: 60px;
        margin-bottom: -23px;
    }

    .serviceheading>p {
        font-size: 65px;
    }

    .serviceheading {
        display: flex;
        justify-content: center;
        flex-direction: column;
        align-items: center;
    }

    .indexservicecontainer {
        display: flex;
        justify-content: center;
        align-self: center;
    }

    .servicecard {
        margin-top: 30px;
    }

    .servicecard>.cardcontainer {
        display: flex;
        justify-content: center;
        gap: 4%;
        margin: 0px 30px;
    }

    .card1 {
        height: 430px;
        width: 350px;
        align-items: center;
        flex-direction: column;
        display: flex;
        overflow: hidden;
        transition-duration: .5s;
    }

    .card1:hover .contentcontainer {
        bottom: 200px;
    }

    .card1:hover .imgcontainer>img {
        filter: none;
    }

    .imgcontainer {
        height: 500px;
    }

    .imgcontainer>img {
        transition-duration: .5s;

        width: 100%;
        filter: brightness(100%) contrast(100%) saturate(0%) blur(0) hue-rotate(0deg);
    }

    .contentcontainer {
        transition-duration: .5s;
        width: 100%;
        position: relative;
        bottom: 75px;
    }

    .contentcontainer>h3 {
        font-size: 50px;
        font-family: 'Playfair Display', serif !important;
        color: #be8f45;
        padding-bottom: 20px;
        font-weight: 400;
    }

    .contentcontainer>p {
        font-size: 25px;
        color: white;
        font-family: 'Playfair Display', serif !important;
    }

    .buttondiv::before {
        content: '';
        border-right: 8px solid transparent;
        position: relative;
        left: 4px;
        border-bottom: 8px solid #BE8F45;
        bottom: -4px;
    }

    .buttondiv::after {
        content: '';
        border-left: 8px solid transparent;
        position: relative;
        right: 4px;
        border-top: 8px solid #BE8F45;
        top: 0px;
    }

    .buttondiv {
        width: fit-content;
        border: 1px solid black;
        color: black;
        transition-duration: .5s;
    }

    .buttondiv:hover {
        background-color: black;
        color: white;
    }

    .buttondiv>.button {
        padding: 10px 25px;
    }

    .buttoncontainer {
        width: 100%;
        justify-content: center;
        align-items: center;
        display: flex;
        gap: 60px;
        height: 150px;
    }

    .divseperator {
        border-bottom: 1px solid black;
        width: 700px;
        height: 1px;
    }

    .whychooseus {
        /* display: flex; */
        justify-content: center;
        align-items: center;
        flex-direction: row;
    }

    .contentcontainer2 {
        display: flex;
        justify-content: center;
        height: 700px;

    }

    .contentcontainer2>.txtcontainer {
        width: 50%;
    }

    .txtcontainer>.content>P {
        font-size: 40px;
        color: #be8f45;
        width: fit-content;
        border-bottom: black 1px solid;

    }

    .txtcontainer>.content {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        height: 100%;
        gap: 30px;
    }

    .content>.innercontent {
        font-size: 30px;
        width: 80vh;
        text-align: center;
    }


    .contentcontainer2>.chooseusimgcontainer {
        width: 50%;
    }


    .chooseusimgcontainer>.img1 {
        left: 40px;
        height: 200px;
        position: relative;
        bottom: 126px;
    }

    .chooseusimgcontainer>.img2 {
        width: 500px;
        position: relative;
        top: 180px;
    }

    .chooseusimgcontainer>.img3 {
        bottom: 170px;
        height: 300px;
        position: relative;
        right: 100px;
    }

    .whychooseheading {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    .whychooseheading>img {
        height: 60px;
        margin-bottom: -23px;
    }

    .whychooseheading>p {
        font-size: 65px;
    }

    .priseingcontainer {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .priseheading {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    .priseheading>img {
        height: 60px;
        margin-bottom: -23px;
    }

    .priseheading>p {
        font-size: 65px;
        color: white;
    }

    .prizeingcontainer {
        height: fit-content;
        background-color: transparent;
        background-image: linear-gradient(180deg, #47322C 0%, #896D36 100%);
    }

    .prisecontent {
        color: white;
        height: 300px;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: justify;
        padding: 0px 161px;
        flex-direction: column;
        gap: 70px;

    }

    .bordercontainer>h3 {
        color: white;
        display: flex;
        justify-content: space-between;
        margin-bottom: 20px;
        width: 100%;
        text-align: justify;
        font-family: 'Playfair Display', serif !important;
    }

    .bordercontainer {
        background-image: url('./assets/images/borderimg.svg');
        width: 75%;
        display: flex;
        height: 1px;
        padding: 15px 0 15px 0;
        background-position: bottom left;
        background-repeat: repeat-x;
        justify-content: space-between;
        align-items: center;
        position: relative;
    }

    .priseimgcontainer {
        position: absolute;
    }

    .priseimgcontainer>.priceimg1 {
        position: absolute;
        height: 190px;
        border-radius: 50px;
        bottom: 210px;
        z-index: 1;
        left: 200px;
    }

    .priseimgcontainer>.priceimg2 {
        position: absolute;
        height: 190px;
        border-radius: 50px;
        bottom: 20px;
        z-index: 1;
        left: 1700px;
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
                "Crafting Confidence, One Cut at a Time!"
            </h1>
        </div>
    </div>

    <div class="howeworkcontainer">
        <div class="content">
            <div class="howeworkimg">
                <div class="weworkbackground"></div>
            </div>
            <div class="howeworkcontent">
                <div class="content">
                    <div class="stepheadingcontent">
                        <h1>How we work</h1>
                    </div>
                    <div class="stepscontainer">
                        <h2><span>1</span> Embrace clients with a warm welcome, engage in
                            detailed consultations, and transform their look with expert barbering.</h2>
                        <h2><span>2</span> Deliver precision haircuts, masterful grooming services,
                            and craft personalized styles for a distinctive and polished appearance.</h2>
                        <h2><span>3</span>Engage clients with friendly conversations, enhance their overall
                            look with skilled services, and excel in providing a satisfying barber shop experience.</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="indexservices">
        <div class="indexservicecontainer">
            <div class="serviceheading">
                <img src="./assets/images/moustache.png" alt="">
                <P>
                    Our Services
                </P>
            </div>
        </div>
        <div class="servicecard ">
            <div class="cardcontainer ">
                <div class="card1">
                    <div class="imgcontainer">
                        <img src="./assets/images/card1.jpg" alt="">
                    </div>
                    <div class="contentcontainer">
                        <h3>Hair Cut</h3>
                        <p>Achieve a Timeless and Polished Look</p>
                    </div>
                </div>
                <div class="card1">
                    <div class="imgcontainer">
                        <img src="./assets/images/card2.jpg" alt="">
                    </div>
                    <div class="contentcontainer">
                        <h3>Hairwash</h3>
                        <p>Our Timeless Shampoo Experience</p>
                    </div>
                </div>
                <div class="card1">
                    <div class="imgcontainer">
                        <img src="./assets/images/card3.jpg" alt="">
                    </div>
                    <div class="contentcontainer">
                        <h3>Beard</h3>
                        <p>Crafting Confidence, One Beard at a Time</p>
                    </div>
                </div>
                <div class="card1">
                    <div class="imgcontainer">
                        <img src="./assets/images/card4.jpg" alt="">
                    </div>
                    <div class="contentcontainer">
                        <h3>Face Massage</h3>
                        <p>Indulge in Luxurious Skincare for a Beautiful You</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="buttoncontainer">
            <div class="divseperator"></div>
            <div class="buttondiv">
                <div class="btn button">Explore</div>
            </div>
            <div class="divseperator"></div>

        </div>
    </div>

    <div class="whychooseus">
        <div class="whychooseheading">
            <img src="./assets/images/moustache.png" alt="">
            <p>Why Choose Us</p>
        </div>
        <div class="contentcontainer2">
            <div class="txtcontainer">
                <div class="content">
                    <p>Choose us for Timeless Elegance</p>
                    <div class="innercontent">
                        <p>Our team of skilled and experienced
                            barbers is dedicated to the craft of
                            hair styling and grooming. With precision
                            cutting techniques and a keen eye for
                            detail, our barbers ensure that every
                            client leaves looking and feeling their
                            absolute best.</p>
                    </div>
                </div>
            </div>
            <div class="chooseusimgcontainer">
                <img src="./assets/images/whychooseusimg2.jpg" class="img1" alt="">
                <img src="./assets/images/whychooseusimg1.jpg" class="img2" alt="">
                <img src="./assets/images/whychooseimg3.jpg" class="img3" alt="">
            </div>
        </div>
    </div>
    <div class="prizeingcontainer">
        <div class="priseheading">
            <img src="./assets/images/moustache.png" alt="">
            <p>Haircut Price's -Men</p>
        </div>
        <div class="prisecontent">
            <div class="bordercontainer">
                <h3>Basic Cut start's from<span>₹ 125</span></h3>
            </div>
            <div class="bordercontainer">

                <h3>Beard Trim & Grooming start's from<span>₹ 70</span></h3>
            </div>
            <div class="bordercontainer">

                <h3>Father & Son Combo start's from<span>₹ 190</span></h3>
            </div>
        </div>
        <div class="priseimgcontainer">
            <img src="./assets/images/pricesbg.jpg" class="priceimg1" alt="">
            <img src="./assets/images/pricebg2.jpg" class="priceimg2" alt="">
        </div>
    </div>
    <?php
    include("./footer.php");
    ?>
</body>

</html>
<script>
    AOS.init();
</script>
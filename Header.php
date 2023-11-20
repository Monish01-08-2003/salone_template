<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/styles/header.css">
   
</head>
<style>
    p {
        margin-bottom: 0px !important;
    }

    .topnav {
        background-color: #e0e0e0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: fit-content;
        font-size: 20px;
        padding: 10px;
    }

    .topnav>p>span {
        color: #cb2022;
        border-bottom: #cb2022 1px solid;
    }

    header {
        width: 100%;
        display: flex;
        background-color: #f6f8f9f2;
        position: absolute;
        z-index: 100;
    }

    ul {
        text-decoration: none;
        list-style-type: none;
    }

    .logo>img {
        height: 100px;
    }

    .headercontent {
        display: flex;
        gap: 30px;
        justify-content: center;
        align-self: center;
        font-size: 20px;
        border-bottom: #cb202300 solid 1px;
    }

    .menu {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .headercontent>li>span {
        color: #cb2022;
        transition-duration: 0.3s;
        background-color: #cb202300;
        border-bottom: #cb202300 solid 1px;
    }

    .headercontent>li>span:hover {
        border-bottom: #cb2022 solid 1px;
    }

    .headercontent>li {
        transition-duration: .3s;
        border-bottom: #cb202300 solid 1px;

    }

    .headercontent>li:hover {
        border-bottom: #cb2022 solid 1px;
    }

    .services {
        display: flex;
        flex-direction: column;
    }

    .servicecontainer {
        left: 325px;
        position: absolute;
        top: 75px;
        border-bottom-left-radius: 10px;
        border-bottom-right-radius: 10px;
        height: 0px;
        overflow: hidden;
        z-index: 100;

        background-color: #cb2022;
        color: #e0e0e0;
        transition-duration: .4s;
    }

    .services:hover .servicecontainer {
        padding: 5px 10px;
        height: 165px;


    }

    .servicecontainer>.content>p:hover {
        color: white;
    }
</style>

<body>
    <div class="topnav">
        <p>
            Our Haircut starts from <span>₹110 </span>onwards
        </p>
    </div>
    <header class="">
        <ul>
            <li class='logo'>
                <img src="./assets/images/logo.png" alt="logo" />
            </li>
        </ul>
        <ul class="headercontent">
            <li class='menu'>HOME</li>
            <li class='menu'>ABOUT</li>
            <li class='services'><span>SERVICES</span>
                <div class="servicecontainer">
                    <div class="content">
                        <p>Hair</p>
                        <p>Spa services</p>
                        <p>Massage</p>
                        <p>Face</p>
                        <p>Nail</p>
                    </div>
                </div>
            </li>
            <li class='menu'>OUR LOCATION</li>
            <li class='menu'><span>FRANCHISE</span></li>
            <li class='menu'>CONTACT</li>
        </ul>
    </header>
</body>

</html>
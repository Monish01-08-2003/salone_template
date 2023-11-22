<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .footer {
        height: 50vh;
        background-color: #221604;
        color: white;
    }


    a {
        text-decoration: none !important;
        color: white;
    }

    .contactsection {
        display: flex;
        justify-content: center;
        align-items: center;
        color: white;
        flex-direction: column;
        height: max-content;
    }

    .contactsection>h1 {

        font-family: 'Playfair Display', serif !important;
        border-bottom: #BE8F45 7px solid;
    }


    .contactsection>.content {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        gap: 10px;
    }


    .contactsectioncontainer {
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .footercontainer {
        height: 100%;
    }

    .middlecontainer>.content {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        gap: 10px;
    }

    .middlecontainer>h1 {

        font-family: 'Playfair Display', serif !important;
        border-bottom: #BE8F45 7px solid;
    }

    .middlecontainer {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        color: white;
        border-left: #FFFFFF26 1px solid;
        gap: 30px;
        border-right: #FFFFFF26 1px solid;

    }

    .middlecontainer>.content {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: row;
    }
</style>

<body>
    <div class="footer">
        <div class="footercontainer">
            <div class="row contactsectioncontainer">
                <div class="col-md-4 contactsection">
                    <h1>Contact</h1>
                    <div class="content">
                        <p> <a href="mailto:someone@example.com">
                                mailto123@gmail.com
                            </a>
                        </p>
                        <p> <a href="#">
                                8220298718
                            </a>
                        </p>
                        <p class="address">
                            8502 Preston Rd. Inglewood
                        </p>
                    </div>
                </div>
                <div class="col-md-4 middlecontainer">
                    <h1>Gentleman's Grooming</h1>
                    <div class="content">
                        <p> <a href="mailto:someone@example.com">
                                <img src="./assets/images/facebook.png" class="facebook" alt="">
                            </a>
                        </p>
                        <p> <a href="#">
                                <img src="./assets/images/instagram.png" class="instagram" alt="">
                            </a>
                        </p>
                        <p class="address">
                            <a href="">
                                <img src="./assets/images/twitter-alt.png" class="twitter" alt="">
                            </a>
                        </p>
                    </div>
                </div>
                <div class="col-md-4 contactsection">
                    <h1>Working Hour's</h1>
                    <div class="content">
                        <p>
                            Working Days: 9AM - 9PM
                        </p>
                        <p>
                            Saturday: 10AM - 8PM
                        </p>
                        <p class="address">
                            Sunday: 9AM-9PM
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
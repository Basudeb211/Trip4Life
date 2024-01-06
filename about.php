<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Trip4Life</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Poppins:wght@200;300&display=swap');

        * {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
            font-family: 'Open Sans', sans-serif;
            font-family: 'Poppins', sans-serif;
            background-color:#fff;
        }

        .top {
            width: 90%;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            text-align: center;
            margin: 20px auto;
        }

        .top h1 {
            font-size: 40px;
            color: #000;
            margin-bottom: 25px;
            position: relative;
        }

        .top h1::after {
            content: "";
            position: absolute;
            width: 100%;
            height: 4px;
            display: block;
            margin: 0 auto;
            background-color: #4caf50;
        }

        .top p {
            font-size: 15px;
            color: #666;
            margin-bottom: 35px;
        }

        .top {
            width: 90%;
            margin: 0 auto;
            padding: 10px 20px;
        }

        .about {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }

        .about-img {
            display: flex;
            align-items: center;
            justify-content: center;
            flex: 1;
            margin-right: 40px;
            overflow: hidden;
        }

        .about-img img {
            max-width: 100%;
            height: auto;
            display: block;
            transition: 0.5s ease;
        }

        #img1 {
            width: 60%;
            height: 50%;
        }

        .about-img:hover img {
            transform: scale(1.2);
        }

        .about-content {
            flex: 1;
        }

        .about-content h2 {
            font-size: 18px;
            line-height: 1.5;
            color: #666;
        }

        .about-content .read-more {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4caf50;
            color: #fff;
            font-size: 19px;
            text-decoration: none;
            border-radius: 25px;
            margin-top: 15px;
            transition: 0.3s ease;
        }

        .about-content .read-more:hover {
            background-color: #3e8e41;
        }

        @media screen and (max-width: 768px) {
            .top {
                padding: 0px 20px;
            }

            .top h1 {
                font-size: 36px;
            }

            .top p {
                font-size: 17px;
                margin-bottom: 0px;
            }

            .buttom {
                padding: opx;
            }

            .about {
                padding: 20px;
                flex-direction: column;
            }

            .about-img {
                margin-right: 0px;
                margin-bottom: 20px;
            }

            .about-content p {
                padding: 0px;
                font-size: 16px;
            }

            .about-content .read-more {
                font-size: 16px;
            }
        }
    </style>
</head>

<body>
    <div id="nav">
        <?php include_once "./navbar.php";  ?>
    </div>
    <div class="top">
        <h1>About Us</h1>
        <p>
        <h2>YOUR TRAVEL COMPANION</h2>
        Welcome to Trip4Life, where your travel dreams become reality. As experts in the travel industry, we specialize in creating unforgettable experiences for adventurers like you. From crafting inspiring travel narratives to providing insightful guides and captivating visuals, we've collaborated with renowned travel brands, ensuring our content resonates with globetrotters worldwide.
        </p>
    </div>
    <div class="buttom">
        <section class="about">
            <div class="about-img">
                <img src="https://images.unsplash.com/photo-1543731068-7e0f5beff43a?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="No photo" id="img1">
            </div>
            <div class="about-content">
                <h2>DISCOVER OUR TRAVEL INSPIRATIONS</h2>
                <p>Our team at Trip4Life has traversed the globe, exploring the vibrant streets of bustling cities and the serene landscapes of hidden gems. We bring unparalleled on-the-ground expertise to our web copy, ensuring your journey with us is nothing short of extraordinary. Explore some of our featured travel stories below, and if you're ready for your own adventure, reach out to us. We're here to turn your travel aspirations into memories.</p>
                <a href="" class="read-more">Read More</a>
            </div>
        </section>
    </div>
    <footer class="bg-black mt-3" style="bottom:0;">
    <p class="text-center bg-black text-light">©2024 basudeb rout all rights reserved.</p>
    </footer>
</body>


</html>
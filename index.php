<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./utils.css">
    <style>
        *{
            list-style: none;
            text-decoration: none;
        }
    </style>
</head>

<body style="background-color:antiquewhite;padding:10px;overflow-x:hidden;">
    <div id="nav">
        <?php 
        include_once "./navbar.php"; 
        if(isset($_GET['id'])){
            $id=$_GET['id'];
        }
         ?>
    </div>
    <form action="navigate.php?id=<?php echo $id; ?>" method="POST">
    <div class="container1" id="container1" style="height:80vh;">
        <div class="row" id="row1" style="height:100%">
            <div class="col-sm-10 col-md-8 col-lg-8 border" id="banner">
                <video autoplay muted loop poster="video-poster.jpg" id="background-video">
                    <source src="./docs/bg1.mp4" type="video/mp4">
                </video>
                <div class="content-overlay">
                <?php
                    require_once "./db-connect.php";
                    // if(isset($_GET['id'])){;
                    //     $id=$_GET['id'];
                    // }
                    $qry="SELECT * FROM userdetails WHERE id=$id";
                    $conn=$connection->query($qry);
                    $res=$conn->fetch_assoc();
                ?>
                    <h1>Hey, <?php echo $res['name']; ?></h1>
                    <h1 class="font-mid">Unleash Your Wanderlust with <br> Travel4Life.com</h1>
                    <p>Embark on a journey of discovery and create timeless memories as you explore the world with Travel4Life.com.</p>
                    <button class="btn btn-dark"><a href="#livings" class="text-decoration-none">Explore Now</a></button>
                </div>
            </div>
        </div>
    </div>
    <h1 style="text-align: center; margin:2rem;">Discover Your Ideal Stay</h1>
<p style="text-align: center;padding:1rem;">Embark on a journey of comfort and luxury. Explore our diverse range of accommodations designed to elevate your travel experience.</p>

<div class="container2" id="livings">
    <div class="left">
        <h1 style="text-align: center;">DELUXE ROOMS</h1>
        <p>Indulge in unparalleled luxury with our Deluxe Rooms. Immerse yourself in comfort and style, making your stay truly memorable.</p>
        <button style="width:25%;margin:auto; height:3rem;" name="itenary">Explore</button>
    </div>
    <div class="right">

    </div>
</div>
<div class="container2 container3">
    <div class="left">
        <h1 style="text-align: center;">VILLAS</h1>
        <p>Experience the epitome of opulence with our exclusive Villas. Each villa is a sanctuary of tranquility, offering an escape like no other.</p>
        <button style="width:25%;margin:auto; height:3rem;" name="itenary">Explore</button>
    </div>
    <div class="right" style="background:url('https://images.unsplash.com/photo-1613490493576-7fde63acd811?q=80&w=1471&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');background-position:center;background-size:center;">
    </div>
</div>
<h1 style="text-align: center; margin-top:1rem">Discover Exclusive Packages</h1><br>
<p style="text-align: center;padding:1rem;">Explore our curated packages designed to add excitement and adventure to your journey. Uncover unique experiences that stay etched in your memory.</p>

<!-- -------------------  -->
<div class="container2" id="services">
    <div class="left" style="background:url('https://images.unsplash.com/photo-1531685250784-7569952593d2?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D;">
        <h1 style="text-align: center;">ADVENTURE PACKAGES</h1>
        <p>Embark on thrilling adventures with our carefully crafted Adventure Packages. From mountain treks to exotic escapades, let the journey begin.</p>
        <button style="width:25%;margin:auto; height:3rem;" name="packages">Explore</button>
    </div>
    <div class="right" style="background:url('https://images.unsplash.com/photo-1696235683834-888c871ef91d?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');background-position:center;background-size:center;">
    </div>
</div>
<div class="container2 container3">
    <div class="left">
        <h1 style="text-align: center;">SPIRITUAL JOURNEYS</h1>
        <p>Embark on a spiritual quest with our curated Spiritual Journeys. Discover serenity and enlightenment in breathtaking destinations.</p>
        <button style="width:25%;margin:auto; height:3rem;" name="packages">Explore</button>
    </div>
    <div class="right" style="background:url('https://images.unsplash.com/photo-1620766182966-c6eb5ed2b788?q=80&w=1496&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');background-position:center;background-size:center;">
    </div>
</div>
    </form>
    <footer id="footer" style="background-color:#000;bottom:0; color:#fff;">
    <p style="text-align:center">©2024 Basudeb Rout all rights reserved.</p>
    </footer>
</body>

</html>

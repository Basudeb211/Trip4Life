<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Trip4Life</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <!-- Include FontAwesome CSS (CDN) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-...your-sha512-hash..." crossorigin="anonymous" />
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div id="nav">
        <?php
        require_once "./db-connect.php";
        include_once "./navbar.php";
        $qry="SELECT * FROM userdetails WHERE id=$id";
        $conn=$connection->query($qry);
        $res=$conn->fetch_assoc();
        ?>
    </div>
    <div class="container p-5 mt-5">
        <div class="upper mt-5 mb-5">
            <div class="text-center">
                <h3 class="text-center">Welcome, <?php echo $res['name']; ?></h3>
                <p class="text-center">Explore the breathtaking wonders of the world with our exclusive travel packages. Immerse yourself in the allure of exotic destinations, where every moment is a new adventure. Uncover hidden gems, savor local cuisines, and create memories that will last a lifetime. Choose from our curated selection of travel packages designed to cater to your wanderlust. Embark on a journey of discovery, where the world becomes your playground. Book your dream escape today and let the exploration begin!"</p>
            </div>
        </div>
        <?php
        include_once "./slider.php";
        ?>
        <div class="buttom mt-5 mb-5 p-5">
            <div class="b1 m-2 p-5">
                <div class="card-group">
                    <div class="card mx-3">
                        <img src="https://images.unsplash.com/photo-1551632811-561732d1e306?q=80&w=1000&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8dHJla2tpbmd8ZW58MHx8MHx8fDA%3D" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Trekkings</h5>
                            <a class="fas fa-map-marker-alt"></a> Kinnaur, Himalchal pradesh <br>
                            <i class="fas fa-briefcase"></i> 4days <br>
                            <i class="fa-solid fa-indian-rupee-sign"></i>10000 onwards.<br>
                            <div>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i> <!-- empty star -->
                            </div> <br>
                            <p>(110 Reviews)</p>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <button class="btn btn-primary" type="button" onclick="confirm()">Button</button>
                            </div>
                        </div>
                    </div>
                    <div class="card mx-3">
                        <img src="https://img.freepik.com/free-photo/tent-by-lake-with-mountain-background_1340-34135.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Campings</h5>
                            <a class="fas fa-map-marker-alt"></a>Spiti Valley,Himachal Pradesh<br>
                            <i class="fas fa-briefcase"></i> 3days <br>
                            <i class="fa-solid fa-indian-rupee-sign"></i>8000 onwards.<br>
                            <div>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i> <!-- empty star -->
                            </div> <br>
                            <p>(100 Reviews)</p>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <button class="btn btn-primary" type="button" onclick="confirm()">Button</button>
                            </div>
                        </div>
                    </div>
                    <div class="card mx-3">
                        <img src="https://t3.ftcdn.net/jpg/01/40/51/56/360_F_140515612_0MMpqpsIvs6xno5YXmPVy9FUmZ4uLnFB.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Hangouts</h5>
                            <a class="fas fa-map-marker-alt"></a> Goa <br>
                            <i class="fas fa-briefcase"></i> 3days <br>
                            <i class="fa-solid fa-indian-rupee-sign"></i>9000 onwards.<br>
                            
                            <div>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i> <!-- empty star -->
                            </div> <br>
                            <p>(110 Reviews)</p>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <button class="btn btn-primary" type="button" onclick="confirm()">Button</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="b2 m-2 p-5">
                <div class="card-group">
                    <div class="card mx-3">
                        <img src="https://images.unsplash.com/photo-1544588440-fc7551331160?q=80&w=1522&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Tirupati and nearby</h5>
                            <a class="fas fa-map-marker-alt"></a> Andhra pradesh <br>
                            <i class="fas fa-briefcase"></i> 3days <br>
                            <i class="fa-solid fa-indian-rupee-sign"></i>9000 onwards.<br>
                            <div>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i> <!-- half-filled star -->
                            </div> <br>
                            <p>(110 Reviews)</p>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <button class="btn btn-primary" type="button" onclick="confirm()">Button</button>
                            </div>
                        </div>
                    </div>
                    <div class="card mx-3">
                        <img src="https://vajiram-prod.s3.ap-south-1.amazonaws.com/Konark_Sun_Temple_13e71cbb6e.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Sun temple</h5>
                            <a class="fas fa-map-marker-alt"></a> Konark,odisha <br>
                            <i class="fas fa-briefcase"></i> 2days <br>
                            <i class="fa-solid fa-indian-rupee-sign"></i>6000 onwards.<br>
                            <div>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i> <!-- half-filled star -->
                            </div> <br>
                            <p>(110 Reviews)</p>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <button class="btn btn-primary" type="button" onclick="confirm()">Button</button>
                            </div>
                        </div>
                    </div>
                    <div class="card mx-3">
                        <img src="https://images.unsplash.com/photo-1544551763-46a013bb70d5?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Diving</h5>
                            <a class="fas fa-map-marker-alt"></a> Goa <br>
                            <i class="fas fa-briefcase"></i> 3days <br>
                            <i class="fa-solid fa-indian-rupee-sign"></i>20000 onwards.<br>
                            <div>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div> <br>
                            <p>(110 Reviews)</p>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <button class="btn btn-primary" type="button" onclick="confirm()">Button</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>
<script>
    function confirm(){
        alert("your tour has confirmed. Thank You : ");
    }
</script>
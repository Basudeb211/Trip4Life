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
                <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum enim repellendus, ipsum quos corrupti nesciunt optio adipisci ad ullam amet?</p>
            </div>
        </div>
        <?php
        include_once "./slider.php";
        ?>
        <div class="buttom mt-5 mb-5 p-5">
            <div class="b1 m-2 p-5">
                <div class="card-group">
                    <div class="card mx-3">
                        <img src="https://images.unsplash.com/photo-1704369671954-88ffd3b8bfa9?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHx0b3BpYy1mZWVkfDJ8NnNNVmpUTFNrZVF8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Hotel A</h5>
                            <a class="fas fa-map-marker-alt"></a> City A, Country A <br>
                            <i class="fas fa-briefcase"></i> Deluxe Room <br>
                            <div>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i> <!-- empty star -->
                            </div> <br>
                            <p>(110 Reviews)</p>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <button class="btn btn-primary" type="button">Book Now</button>
                            </div>
                        </div>
                    </div>
                    <!-- Add more cards with different content -->
                    <div class="card mx-3">
                        <img src="https://images.unsplash.com/photo-1704080668828-5ed22e758590?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHx0b3BpYy1mZWVkfDR8NnNNVmpUTFNrZVF8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Hotel B</h5>
                            <a class="fas fa-map-marker-alt"></a> City B, Country B <br>
                            <i class="fas fa-briefcase"></i> Standard Room <br>
                            <div>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i> <!-- empty star -->
                            </div> <br>
                            <p>(90 Reviews)</p>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <button class="btn btn-primary" type="button">Book Now</button>
                            </div>
                        </div>
                    </div>
                    <div class="card mx-3">
                        <img src="https://images.unsplash.com/photo-1637407520401-9df815f602e6?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHx0b3BpYy1mZWVkfDN8NnNNVmpUTFNrZVF8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Hotel C</h5>
                            <a class="fas fa-map-marker-alt"></a> City C, Country C <br>
                            <i class="fas fa-briefcase"></i> Suite <br>
                            <div>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i> <!-- empty star -->
                            </div> <br>
                            <p>(120 Reviews)</p>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <button class="btn btn-primary" type="button">Book Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="b2 m-2 p-5">
                <div class="card-group">
                    <div class="card mx-3">
                        <img src="https://images.unsplash.com/photo-1704251647476-63620121ad8c?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHx0b3BpYy1mZWVkfDEwfDZzTVZqVExTa2VRfHxlbnwwfHx8fHw%3D" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Hotel D</h5>
                            <a class="fas fa-map-marker-alt"></a> City D, Country D <br>
                            <i class="fas fa-briefcase"></i> Luxury Room <br>
                            <div>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i> <!-- half-filled star -->
                            </div> <br>
                            <p>(150 Reviews)</p>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <button class="btn btn-primary" type="button">Book Now</button>
                            </div>
                        </div>
                    </div>
                    <!-- Add more cards with different content -->
                    <div class="card mx-3">
                        <img src="https://images.unsplash.com/photo-1704243147854-42600928d25f?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHx0b3BpYy1mZWVkfDE0fDZzTVZqVExTa2VRfHxlbnwwfHx8fHw%3D" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Hotel E</h5>
                            <a class="fas fa-map-marker-alt"></a> City E, Country E <br>
                            <i class="fas fa-briefcase"></i> Deluxe Suite <br>
                            <div>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i> <!-- half-filled star -->
                            </div> <br>
                            <p>(130 Reviews)</p>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <button class="btn btn-primary" type="button">Book Now</button>
                            </div>
                        </div>
                    </div>
                    <div class="card mx-3">
                        <img src="https://images.unsplash.com/photo-1704212564942-9f6955e1aea2?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHx0b3BpYy1mZWVkfDE5fDZzTVZqVExTa2VRfHxlbnwwfHx8fHw%3D" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Hotel F</h5>
                            <a class="fas fa-map-marker-alt"></a> City F, Country F <br>
                            <i class="fas fa-briefcase"></i> Standard Suite <br>
                            <div>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div> <br>
                            <p>(140 Reviews)</p>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <button class="btn btn-primary" type="button">Book Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer id="footer" style="background-color:#000;bottom:0; color:#fff;">
    <p style="text-align:center">©2024 sibaprasad mishra all rights reserved.</p>
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>

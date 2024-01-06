<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>navigation</title>
  <link rel="stylesheet" href="./navbar.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
  <div id="navbar">
    <div id="menuHolder">
      <div role="navigation" class="sticky-top border-bottom border-top" id="mainNavigation">
        <div class="flexMain">
          <div class="flex2">
            <button class="whiteLink siteLink" style="border-right:1px solid #eaeaea" onclick="menuToggle()"><i class="fas fa-bars me-2"></i> MENU</button>
          </div>
          <div class="flex3 text-center" id="siteBrand">
            Travel4Life.com
          </div>

          <div class="flex2 text-end d-block d-md-none">
            <button class="whiteLink siteLink"><i class="fas fa-search"></i></button>
          </div>

          <div class="flex2 text-end d-none d-md-block">
            <a href="./login.php ? logg-out"><button class="whiteLink siteLink">LOGOUT</button></a>
          </div>
        </div>
      </div>

      <div id="menuDrawer">
        <div class="p-4 border-bottom">
          <div class='row'>
            <div class="col">
              <select class="noStyle">
                <option value="english">English</option>
                <option value="spanish">Spanish</option>
                <option value="french">French</option>
                <option value="italian">Italian</option>
                <option value="hebrew">Hebrew</option>
              </select>
            </div>
            <div class="col text-end ">
              <i class="fas fa-times" role="btn" onclick="menuToggle()"></i>
            </div>
          </div>
        </div>
        <div>
          <?php
          $id=$_GET['id'];
          $_SESSION['id']=$id;
              
          ?>
          <a href="./index.php ?id=<?php echo $id; ?>" class="nav-menu-item"><i class="fas fa-home me-3"></i>Home</a>
          <a href="./index.php ?id=<?php echo $id; ?>#livings" class="nav-menu-item"><i class="fas fa-search me-3"></i>Explore</a>
          <a href="./index.php ?id=<?php echo $id; ?>#services" class="nav-menu-item"><i class="fas fa-wrench me-3"></i>Services</a>
          <!-- <a href="#" class="nav-menu-item"><i class="fas fa-dollar-sign me-3"></i>Pricing</a> -->
          <!-- <a href="#" class="nav-menu-item"><i class="fas fa-file-alt me-3"></i>Blog</a> -->
          <a href="./about.php? id=<?php echo $id;?>" class="nav-menu-item"><i class="fas fa-building me-3"></i>About Us</a>
        </div>
      </div>
    </div>
  </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script>
  var menuHolder = document.getElementById('menuHolder')
  var siteBrand = document.getElementById('siteBrand')

  function menuToggle() {
    if (menuHolder.className === "drawMenu") menuHolder.className = ""
    else menuHolder.className = "drawMenu"
  }
  if (window.innerWidth < 426) siteBrand.innerHTML = "MAS"
  window.onresize = function() {
    if (window.innerWidth < 420) siteBrand.innerHTML = "MAS"
    else siteBrand.innerHTML = "MY AWESOME WEBSITE"
  }
</script>

</html>
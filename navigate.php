<?php
if(isset($_POST['itenary'])){
    $id = $_GET['id'];
    header("Location: itenary.php?id=$id");
    exit();
}
if(isset($_POST['packages'])){
    $id = $_GET['id'];
    header("Location: packages.php?id=$id");
    exit();
}
?>

<?php

if (isset($_POST['signup'])) {

    require_once "db-connect.php";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $qry = "INSERT INTO userdetails (name,email,password) VALUES ('$name','$email','$password')";
    $conn = $connection->query($qry);
    try {
        if ($conn) {
            header('location:login.php? status=registered');
        } else {
            header('location:login.php? status=registration failed');
        }
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
}

?>

<?php
if (isset($_POST['signin'])) {
    try {
        require_once "db-connect.php";
        $email = $_POST['email'];
        $password = $_POST['password'];

        $qry = "SELECT * FROM userdetails WHERE email='$email' AND password='$password'";
        $result = $connection->query($qry);


        if ($result && $result->num_rows > 0) {
            $vals = $result->fetch_assoc();
            $id = $vals['id'];
            header("location:index.php?status=success&id=$id");
        } else {
            header('location:index.php?status=failed');
        }
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
?>

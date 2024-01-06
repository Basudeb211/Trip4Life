<?php
try{
    $hostname="localhost";
    $username="root";
    $password="";
    $dbname="trip4life";

    $connection=new mysqli($hostname,$username,$password,$dbname);

    if($connection->connect_error){
        echo "connection failure";
    }
    else{
        // echo "connection success";
    }
}
catch(Exception $e){
    echo $e->getMessage()." at line ".$e->getLine();
}

?>
<?php 
    $link = mysqli_connect("localhost", "root", "", "assignment");
    if(!$link){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $pass = $_POST["pass"];
    $username = $_POST["username"];
    $sql = "INSERT INTO loginsystem VALUES ('$fname', '$lname', '$pass', '$username')";
    if(mysqli_query($link, $sql)){
        echo "New Record created successfully";
        header('Location: login.html');
    }
    else{
        echo "Error".mysqli.error($link);
    }

?>
<?php 
    session_start();
    $link = mysqli_connect("localhost", "root", "", "assignment");
    if(!$link){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    $pass = $_POST["pass"];
    $username = $_POST["username"];
    $sql = "SELECT * FROM loginsystem WHERE pass = '$pass' AND username = '$username' ";
    $result = mysqli_query($link, $sql);
    $rows = mysqli_num_rows($result);
    if($rows == 1){
        $_SESSION["username"] = $username;
        header('Location: displayStories.php');
    }
    else{
        echo "ERROR";
    }
?>
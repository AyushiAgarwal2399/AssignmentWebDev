<?php 
    $link = mysqli_connect("localhost", "root", "", "assignment");
    $con = mysqli_connect("localhost","root","","assignment") or die("notconnected");
    
    if(isset($_POST['submit']))
    {
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $pass = $_POST["pass"];
    $username = $_POST["username"];
    $sql = "INSERT INTO loginsystem VALUES ('$fname', '$lname', '$pass', '$username')";
    if(mysqli_query($con,$sql))
    {
	echo "<h3>Data is inserted succesfully </h3>";
	header('Location: login.html');
    }
    else{
        echo "Error".mysqli.error($link);
    }
 
?>

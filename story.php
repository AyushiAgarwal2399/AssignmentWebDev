<?php
    session_start();
    if(isset($_SESSION['username'])){
        echo "
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta http-equi='Content-Type' content='text/html; charsetf 8'/>
    <title>Stories Page</title>
    <link href='story.css' rel='stylesheet' type='text/css'/>
    <link href='http://fonts.googleapis.com/css?family=Play' rel='stylesheet'>
</head>
<body background=pic2.jpeg >
    <form>
        <div class='displayBlogs'>
            <table>
                <tr>
                    <td><label for='one'>Story Number</label></td>
                    <td><input type='text' class='one' id='one' name='one' /></td>
                </tr>
                <tr>
                    <td><label for='two'>Story Title</label></td>
                    <td><input type='text' class='two' id='two' name='two' /></td>
                </tr>
            </table>
            <textarea name='three' id='three' cols='150' rows='20'></textarea>
        </div>
    </form>
    
    <script src='https://code.jquery.com/jquery-3.2.1.slim.min.js' integrity='sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN' crossorigin='anonymous' type='text/javascript'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js' integrity='sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q' crossorigin='anonymous' type='text/javascript'></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js' integrity='sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl' crossorigin='anonymous' type='text/javascript'></script>
    <script type = 'text/javascript' src = 'https://cdn.jsdelivr.net/jquery.cookie/1.3.1/jquery.cookie.js' type='text/javascript'></script>
    <script>
        var ordarr = localStorage.getItem('arra');
        var arr = ordarr.split(',');
        document.getElementById('one').value = arr[0];
        document.getElementById('two').value = arr[1];
        document.getElementById('three').value = arr[2];
    </script>
</body>
</html>
";
    }
$u = isset($_SESSION["username"]);
if($u){
    $user = $_SESSION["username"];
    echo "total views for the page = ".$_SESSION['views'];
}
$users = array();
echo "<br>";
if($u){
    array_push($users, $user);
    echo "Number of users currently reading this story: ".count($users);
    echo "<br>";
    echo "<a href='displayStories.php'>< Go Back To View More/Logout?</a>";
}
if(isset($_SESSION['views'])){
    $_SESSION['views'] = $_SESSION['views'] + 1;
}
else{
    $_SESSION['views'] = 1;
}
?>

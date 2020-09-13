<?php
    session_start();
    $link = mysqli_connect("localhost", "root", "", "assignment");
    if(!$link){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    $sql = "SELECT * FROM storiestable";
    if($result = mysqli_query($link, $sql)){
        if(mysqli_num_rows($result) > 0){
            if(isset($_SESSION['username'])){
                echo "<table>
                        <a href='logout.php'>Logout</a>
                        <h1 style='align-items: center; justify-content: center; display: flex;'>PICK A STORY TO READ</h1>
                    <tr>
                        <th>Storyid</th>
                        <th>Story Title</th>
                        <th>Action</th>
                    </tr>";
                    while($row = mysqli_fetch_array($result)){
                        echo "<tr>
                                <td class='one'>" . $row['storyid'] . "</td>
                                <td class='two'>" . $row['title'] . "</td>
                                <td class='three'>".$row['story']."</td>
                                <td><a href='story.php'><button type='button' class='use-address'>View</button></a></td>
                            </tr>";
                    }
                    echo "</table>";
                    mysqli_free_result($result);
            }
                } else{
                    echo "No records matching your query were found.";
                }
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }
        
        // Close connection
        mysqli_close($link);
?>
<!DOCTYPE html>
<html>
    <head>
        <style>
            table{
                justify-content: center;
                align-items: center;
                margin: auto;
            }
            table, th, td {
                border: 1px solid black;
                border-collapse: collapse;
            }
            .three{
                display:none;
            }
        </style>
    </head>
    <body background=00.jpg>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous" type="text/javascript"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous" type="text/javascript"></script>
        <script type = "text/javascript" src = "https://cdn.jsdelivr.net/jquery.cookie/1.3.1/jquery.cookie.js" type="text/javascript"></script>
        <script>
            $(".use-address").click(function() {
            var orderarr = [];
            var storyid = $(this).closest("tr").find(".one").text();
            var title = $(this).closest("tr").find(".two").text();
            var story = $(this).closest("tr").find(".three").text();
            orderarr.push(storyid);
            orderarr.push(title);
            orderarr.push(story);
            localStorage.setItem('arra', orderarr);
        });
        </script>
    </body>

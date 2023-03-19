
<?php
session_start();
include '../Controllers/feed_controller.php';
// if(isset($_SESSION['EMAIL']))
// {

//     $tweetID = $tweet['user_id'];

// }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twist Feed</title>
    <link rel="stylesheet" href="./signin.css">
    <style>
        form {
            margin-left: 500px;
        }

        input {
            margin-left: 100px;
        }
    </style>
</head>

<body>
    <div class="container">
        <a href="../Views/account_view.php?pseudo=" .<?= $_SESSION['NICKNAME'] ?>>
            <button style='margin-left:700px; height:50px; width:70px;' type="submit" id="account__button">Profile</button>
        </a>
        
        <form id="tweet__form" method="get">
            <label>Explorer</label>
            <input type="text" id="tweet__field" name="message" placeholder="Post a new tweet !">
            <button type="submit" id="tweet__button">Post</button><br>
            <br>
            
        </form>    
        <form method="post" action="../Views/feed_view.php" enctype="multipart/form-data">
                        <input type="file" name="images">

                        <input type="submit" value="Upload">
                    </form>    
            
                    
                    
                    
                    
                    
                    
                    
    <?php


require_once('../Controllers/like_controller.php');



?>            


            
<div class="searchTag">
    <form method="get">
        <input type="text" id="tweet__field" name="searchTag" placeholder="Search a tag">
        <button type="submit" name="search_tag">Search</button>
        <?php require '../Models/Tags.php' ?>
    </form>
    
</div>
</div>

<?php require_once('../Models/Photo.php');    ?>    
</body>
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<script src="../Ajax/tweet_post_ajax.js"></script>
<!-- <script src="../Ajax/like_ajax.js"></script> -->

</html>
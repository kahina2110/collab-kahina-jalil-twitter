<?php
session_start();
include '../Controllers/usersprofile_controller.php'
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Views/account.css">
    <title>Document</title>
</head>

<body>
    <div class="info">
        <div id="ovale"></div>
        <h1><?php foreach (displayUsersProfile() as $userTweets) {
                echo $userTweets['nickname'] . "</br>";
                break;
            }
            ?></h1>
        <p><?php foreach (displayUsersProfile() as $userTweets) {
                echo $userTweets['email'] . "</br>";
                break;
            }
            ?></p>
        <p><?php
            foreach (displayFollows() as $follows) {
                $follows = explode(" ,", $follows);
                if ($follows == "") {
                    echo '0';
                } else {
                    echo count($follows);
                }
            }
            ?>
            Follows</p>
        <p><?php
            foreach (displayFollowers() as $userFollowers) {
                echo $userFollowers;
            }
            ?>
            Followers</p>
        <?php
        foreach (displayUsersProfile() as $userTweets) {
            echo "<form name='follow__form' id='follow__form' method='POST'><button type='submit' id='follow__button' name='follow__button' value='" . $userTweets['nickname'] . "'>Follow</button></form>";
            break;
        }
        ?>
    </div>
    <div class="tweet">
        <?php
        foreach (displayUsersProfile() as $userTweets) {
            echo $userTweets['message'] . "</br>";
        }
        ?>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<script src="../Ajax/users_profile_ajax.js"></script>
<script src="../Ajax/follow_ajax.js"></script>
</html>
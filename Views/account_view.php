<?php
session_start();
// require ("../Controllers/account_controller.php");
// $userId = $_SESSION['user.id'];
if(!isset($_SESSION['EMAIL']))
{
    header('Location: http://localhost/W-PHP-501-LIL-1-1-mymeetic-marie.robertson/view/login.php?');

}

;
// ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="../Views/account.css"> -->
    <link rel="stylesheet" href="../Views/signin.css"> 
    
    <title>PROFILE</title>
    <style>

#ovale {
    width: 150px;
    height: 130px;
    border-radius: 100%;
    background: rgb(122, 106, 75);
    margin-left: 100px;
}

form input {
    display: flex;
}

    </style>
</head>
<body>
<div class="cover">

</div>
<div class="info">
    <div id="ovale">
        <form method="post" action="avatar.php?id=<?php echo $id ?>" enctype="multipart/form-data"  style= "width:50px">
        <input type="file" name="avatar" style= "width:65px">
        </form>
</div>
    <br><br><h1><?php echo $_SESSION['NICKNAME'] ?></h1>
    <p><?php echo $_SESSION['EMAIL'] ?></p>
    <p><b>27</b>Abonnés</p>
    
 
</div>


<div class="tweet">
    <?php 
        include_once('../database/db.php');
        $db = new Database();   
        $connexion = $db->getConnexion();
        $sql = "SELECT message FROM tweets WHERE user_id = $userId ORDER BY id DESC LIMIT 50";
        $result = $connexion->query($sql);

        if($result > 0){

                foreach($result as $row){
                    echo '</br>'. $row['user_id']. $row['message'];
            }}
    ?>


    <h2>
        Qui suivre 
    </h2>
    <a href="../Views/edit_account_view.php">
        <button type="submit" id="edit__button"> Edit Account</button>
    </a>

</div>
<a href="../Views/feed_view.php?user">
            <button type="submit" id="account__button">Feed</button>
        </a>


</body>
</html>
<?php

class Likes
{

    public function CountLike()
    {

        // on récupère l'id du tweet

        $connexion = new PDO('mysql:host=localhost;dbname=tweet_academie', 'root', 'epitech');
        $requestTweet = "SELECT id, message, user_id, images FROM tweets order by id desc;";
        $tweets = $connexion->query($requestTweet);



        $requestId = $connexion->query('SELECT user_id, tweet_id from likes');
        $resultId = $requestId->fetchAll(PDO::FETCH_ASSOC);
        // $userId = $resultId[0]['user_id'];


        foreach ($tweets as $tweet) {
            if ($tweet['id']) {
                $tweet_id =   $tweet['id'];
                $images = $tweet['images'];
                $theuserid =$_SESSION["user_id"];
                echo '</br>' . '</br>' . $tweet['message'] . $tweet['images'].'</br>' . '<button name="like"  id="like_button"> <a href="?action=like&tweet_id=' . $tweet['id'] . '&nickname=' . $_SESSION['NICKNAME'] . '">Like ' . '</button>' . '</a>' . '</br>';


                $connexion = new PDO('mysql:host=localhost;dbname=tweet_academie', 'root', 'epitech');
                $count = $connexion->query("SELECT  count(*) as 'nombre de likes', tweets.message, tweets.images from likes inner join tweets on tweets.id = tweet_id where tweet_id=$tweet_id and tweets.user_id = $theuserid");
                
                while ($count->rowCount() == 1) {
                    $count = $count->fetch();
                    break;
                }
                echo  '<span class="like-count">' . "  " . $count['nombre de likes'] . " " . " J'aime" . '</span>';
            };
        }
            
            // $db = new Database();   
            // $connexion = $db->getConnexion();
            // $requestDisplay = $connexion->query("SELECT message, images FROM tweets");
            // $resultDisplay = $requestDisplay->fetch_all(MYSQLI_ASSOC);
            
            // $target_dir = "assetsUser/";
            // $target_file = $target_dir . basename($_FILES["images"]["name"]);
            // $file =$target_file;
    
            // $req = $connexion->prepare("INSERT INTO tweets (images) VALUES ('$target_file')");
            // $req->execute();
      
            // $postPictures = $connexion->query("SELECT images FROM tweets");
            // echo '<img src='.$file . '>';

            
            // verifie les conditions du bouton
            if (isset($_GET['action']) && $_GET['action'] == 'like' && isset($_GET['tweet_id'])) {
                $tweet_id = $_GET['tweet_id'];
                $connexion = new PDO('mysql:host=localhost;dbname=tweet_academie', 'root', 'epitech');
                $addLike  = $connexion->query("INSERT INTO likes (user_id, tweet_id) values ($theuserid , '$tweet_id') limit 1");

                
                // rediriger l'utilisateur vers la page précédente pour éviter de liker plusieurs fois le même tweet
                header('Location: http://localhost/W-WEB-090-LIL-1-1-academie-marie.robertson/Views/feed_view.php');
                
            }
            
        

    }
}

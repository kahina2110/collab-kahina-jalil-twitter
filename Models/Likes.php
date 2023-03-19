<?php

class Likes
{

    public function CountLike()
    {


        $theuserid = $_SESSION["user_id"];
    

        $connexion = new PDO('mysql:host=localhost;dbname=tweet_academie', 'root', 'epitech');
        $requestTweet = "SELECT * FROM tweets order by id desc ;";
        $tweets = $connexion->query($requestTweet);

        


        $requestId = $connexion->query('SELECT user_id, tweet_id from likes');
        $resultId = $requestId->fetchAll(PDO::FETCH_ASSOC);
        // $userId = $resultId[0]['user_id'];
        
        foreach ($tweets as $tweet) {
            $theuserid = $_SESSION["user_id"];
            $tweet_id =   $tweet['id'];
            // $images = $tweet['images'];
            if($tweet['id']){
            echo '</br>'.'<p style="margin-left:500px">'. $tweet['message'] . $tweet['images'] . '</p>'  . '</br>';
            echo '<form method="POST" action="?action=like">';
            echo '<input type="hidden" name="tweet_id" value="' . $tweet_id . '">';
            echo '<input type="hidden" name="user_id" value="' . $theuserid . '">';};
            if(!empty($tweet['images'])){
            echo '<img src='. $tweet['images']. ' width="150" style="margin-left: 500px;">';
            };
            echo '<button style="margin-left: 500px; border: solid 1px;" type="submit" name="like" id="like_button">Like</button>';
            echo '</form>';
                
                $count = $connexion->query("SELECT  count(*) as 'nombre de likes', tweets.message, tweets.images from likes inner join tweets on tweets.id = tweet_id where tweet_id=$tweet_id and tweets.user_id = $theuserid");
                  
              
                    $count = $count->fetch();
           
                
                echo  '<span style="margin-left: 500px" class="like-count">' . "  " . $count['nombre de likes'] . " " . " J'aime" . '</span>';
           
            }
            if (isset($_POST['like']) && isset($_POST['tweet_id']) && isset($_POST['user_id'])) {
                $tweet_id = $_POST['tweet_id'];
                $user_id = $_POST['user_id'];
    
                $likeExists = $connexion->query("SELECT * from likes where tweet_id=$tweet_id and user_id=$user_id")->rowCount();
    
                if($likeExists) {
                    $deleteLike = $connexion->query("DELETE FROM likes where tweet_id=$tweet_id and user_id=$user_id");
                } else {
                    $addLike = $connexion->query("INSERT INTO likes (user_id, tweet_id) values ($user_id , $tweet_id)");
                }
    
            }
    }
}
           
   

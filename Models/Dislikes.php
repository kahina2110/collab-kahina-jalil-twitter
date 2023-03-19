<!-- <?php

class DisLikes
{

    public function DisLike()
    {

        // on récupère l'id du tweet

        $connexion = new PDO('mysql:host=localhost;dbname=tweet_academie', 'root', 'epitech');
        $requestTweet = "SELECT id, message, user_id, images FROM tweets order by id desc;";
        $tweets = $connexion->query($requestTweet);



        $requestId = $connexion->query('SELECT user_id, tweet_id from likes');
        $resultId = $requestId->fetchAll(PDO::FETCH_ASSOC);
        // $userId = $resultId[0]['user_id'];


        foreach ($tweets as $tweet) {
            $tweet_id =   $tweet['id'];
            $images = $tweet['images'];
            $theuserid =$_SESSION["user_id"];
            if ($tweet['id']) {
                echo '</br>' . '</br>' . $tweet['message'] . $tweet['images'].'</br>' . '<button name="dislike"  id="like_button"> <a href="?action=dislike&tweet_id=' . $tweet['id'] . '&nickname=' . $_SESSION['NICKNAME'] . '">Like ' . '</button>' . '</a>' . '<button name="dislike"  id="like_button"> <a href="?action=dislike&tweet_id=' . $tweet['id'] . '&nickname=' . $_SESSION['NICKNAME'] . '">Dislike ' . '</button>' . '</a>'. '</br>';

                $count = $connexion->query("SELECT  count(*) as 'nombre de likes', tweets.message, tweets.images from likes inner join tweets on tweets.id = tweet_id where tweet_id=$tweet_id and tweets.user_id = $theuserid");
                
                while ($count->rowCount() == 1) {
                    $count = $count->fetch();
                    break;
                }
                echo  '<span class="like-count">' . "  " . $count['nombre de likes'] . " " . " J'aime" . '</span>';
            };
            if (isset($_GET['action']) && $_GET['action'] == 'dislike' && isset($_GET['tweet_id'])) {
                $tweet_id = $_GET['tweet_id'];
                $connexion = new PDO('mysql:host=localhost;dbname=tweet_academie', 'root', 'epitech');
                $deleteLike  = $connexion->query("DELETE FRom likes (user_id, tweet_id) values ($theuserid , '$tweet_id') limit 1");
            
                
                // rediriger l'utilisateur vers la page précédente pour éviter de liker plusieurs fois le même tweet
                header('Location: http://localhost/W-WEB-090-LIL-1-1-academie-marie.robertson/Views/feed_view.php');
                
            }
        }
            
    }
            
        

    }
 -->

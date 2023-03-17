
<?php
require '../database/db.php';

class Feed
{
    public function getTweets()
    {
        $db = new Database();   
        $connexion = $db->getConnexion();
        

        $requestId = $connexion->query('SELECT user_id, tweet_id from likes');
        $resultId = $requestId->fetch_all(MYSQLI_ASSOC);
        $userId = $resultId[0]['user_id'];
        
        

        return $resultId;
        $requestTweet = $connexion->query("SELECT message FROM tweets ORDER BY id DESC LIMIT 50");
        $resultTweet = $requestTweet->fetch_all(MYSQLI_ASSOC);

        if(!empty($resultTweet))
        {
            return $requestTweet;
        } else
        {
            return false;
        }
    }
}
?>
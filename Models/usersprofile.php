<?php
require '../database/db.php';

class UsersProfile
{
    private string $nickname;

    public function __construct()
    {
        $this->nickname = $_POST['users__nickname'];
    }

    // Nickname
    public function setNickname(string $nickname)
    {
        $this->nickname = $nickname;
    }
    public function getNickname()
    {
        return $this->nickname;
    }

    public function usersProfileDisplay()
    {
        $db = new Database();   
        $connexion = $db->getConnexion();

        // get user id
        $requestId = $connexion->query("SELECT id FROM users WHERE nickname = '$this->nickname'");
        $result = $requestId->fetch_all(MYSQLI_ASSOC);
        $userId = $result[0]['id'];

        $requestUsersTweets = $connexion->query("SELECT nickname, email, user_id, message FROM users INNER JOIN tweets WHERE users.id = tweets.user_id AND user_id = '$userId'");
        $resultUsersTweets = $requestUsersTweets->fetch_all(MYSQLI_ASSOC);

        return $resultUsersTweets;
    }

    public function usersFollows()
    {
        $db = new Database();   
        $connexion = $db->getConnexion();

        $requestFollows = $connexion->query("SELECT follows FROM users WHERE nickname = '$this->nickname'");
        $resultFollows = $requestFollows->fetch_all(MYSQLI_ASSOC);

        return $resultFollows;
    }

    public function usersFollowers()
    {
        $db = new Database();   
        $connexion = $db->getConnexion();

        $requestFollowers = $connexion->query("SELECT COUNT(follows) FROM users WHERE follows LIKE '%$this->nickname%'");
        $resultFollowers = $requestFollowers->fetch_all(MYSQLI_ASSOC);

        return $resultFollowers;

    }
}

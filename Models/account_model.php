<?php
require '../database/db.php';

class Account{
    private string $nickname;
    private string $email;

    public function __construct()
    {
        $this->nickname = $_SESSION['NICKNAME'];
        $this->email = $_SESSION['EMAIL'];
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

    // Email
    public function setEmail(string $email)
    {
        $this->email = $email;
    }
    public function getEmail()
    {
        return $this->email;
    }

    public function accountDisplay()
    {
        $db = new Database();   
        $connexion = $db->getConnexion();

        // get user id
        $requestId = $connexion->query("SELECT id FROM users WHERE email = '$this->email' OR nickname = '$this->nickname'");
        $result = $requestId->fetch_all(MYSQLI_ASSOC);
        $userId = $result[0]['id'];

        $requestTweets = $connexion->query("SELECT message FROM tweets WHERE user_id = '$userId' ORDER BY id DESC LIMIT 50");
        $resultTweets = $requestTweets->fetch_all(MYSQLI_ASSOC);

        return $resultTweets;
    }

    public function getFollows()
    {
        $db = new Database();   
        $connexion = $db->getConnexion();

        $requestFollows = $connexion->query("SELECT follows FROM users WHERE nickname = '$this->nickname'");
        $resultFollows = $requestFollows->fetch_all(MYSQLI_ASSOC);

        return $resultFollows;
    }

    public function getFollowers()
    {
        $db = new Database();   
        $connexion = $db->getConnexion();

        $requestFollowers = $connexion->query("SELECT nickname FROM users WHERE follows LIKE '%$this->nickname%'");
        $resultFollowers = $requestFollowers->fetch_all(MYSQLI_ASSOC);

        return $resultFollowers;
    }
}
?>
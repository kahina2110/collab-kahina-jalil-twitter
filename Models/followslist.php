<?php
require '../database/db.php';

class FollowsList
{
    private string $nickname;

    public function __construct()
    {
        $this->nickname = $_SESSION['NICKNAME'];
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

    function getFollowsList()
    {
        $db = new Database();   
        $connexion = $db->getConnexion();

        $requestFollows = $connexion->query("SELECT follows FROM users WHERE nickname = '$this->nickname'");
        $resultFollows = $requestFollows->fetch_all(MYSQLI_ASSOC);

        return $resultFollows;
    }
}
?>
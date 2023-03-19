<?php
require '../database/db.php';

class FollowDisplay
{
    private $nickname;

    function __construct()
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

    function getFollow()
    {
        $db = new Database();   
        $connexion = $db->getConnexion();

        // get user follow
        $request = $connexion->query("SELECT follows FROM users WHERE nickanme = '$this->nickname'");
        $result = $request->fetch_all(MYSQLI_ASSOC);

        return $result;
    }
}
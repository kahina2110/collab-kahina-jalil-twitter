<?php
require '../database/db.php';

class Follow
{
    private $nickname;
    private $userNickname;

    function __construct()
    {
        $this->nickname = $_POST['nickname__user'];
        $this->userNickname = $_SESSION['NICKNAME'];
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

    // User Id
    public function setuserNickname(string $userNickname)
    {
        $this->userNickname = $userNickname;
    }
    public function getuserNickname()
    {
        return $this->userNickname;
    }

    function followUser()
    {
        $db = new Database();   
        $connexion = $db->getConnexion();

        $requestActualFollows = $connexion->query("SELECT follows FROM users WHERE nickname = '$this->userNickname'");
        $result = $requestActualFollows->fetch_all(MYSQLI_ASSOC);
        $resultFollows = $result[0]["follows"];

        if($resultFollows == null)
        {
            $requestNullCase = $connexion->query("UPDATE users SET follows = '$this->nickname' WHERE nickname = '$this->userNickname'");
            return $requestNullCase;
        }
        else {
            $request = $connexion->query("UPDATE users SET follows = '$resultFollows , $this->nickname' WHERE nickname = '$this->userNickname'");
            return [$request, $resultFollows];
        }
    }
}
<?php
session_start();
require '../database/db.php';

class Edit
{
    private string $nickname;
    private string $email;
    private string $pass;

    public function __construct()
    {
        $this->nickname = $_POST['nickname'];
        $this->email = $_POST['email'];
        $this->pass = $_POST['pass'];
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

    // Password
    public function setPass(string $pass)
    {
        $this->pass = $pass;
    }
    public function getPass()
    {
        return $this->pass;
    }

    public function editAccount()
    {
        $db = new Database();   
        $connexion = $db->getConnexion();

        $currentNickname = $_SESSION['NICKNAME'];
        $currentEmail = $_SESSION['EMAIL'];

        // REQUEST ID
        $requestId = $connexion->query("SELECT id FROM users WHERE nickname = '$currentNickname' AND email = '$currentEmail'");
        $result = $requestId->fetch_all(MYSQLI_ASSOC);
        $userId = $result[0]['id'];

        // REQUEST UPDATE
        $requestUpdate = $connexion->query("UPDATE users
        SET nickname = '$this->nickname',
        email = '$this->email',
        password = '$this->pass'
        WHERE id = '$userId'");
        
        $_SESSION['NICKNAME'] = $this->nickname;
        $_SESSION['EMAIL'] = $this->email;
        $_SESSION['PASSWORD'] = $this->pass;
        
        return true;
    }
}
?>
<?php
require '../database/db.php';

class Login
{
    private string $email;
    private string $nickname;
    private string $pass;

    public function __construct()
    {
        $this->email = $_POST['nickname_email'];
        $this->nickname = $_POST['nickname_email'];
        $this->pass = $_POST['pass'];
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

    // Nickname
    public function setNickname(string $nickname)
    {
        $this->nickname = $nickname;
    }
    public function getNickname()
    {
        return $this->nickname;
    }

    // Pass
    public function setPass(string $pass)
    {
        $this->pass = $pass;
    }
    public function getPass()
    {
        return $this->pass;
    }

    public function login()
    {
        $db = new Database();   
        $connexion = $db->getConnexion();
        $password = hash('ripemd160', $this->pass);
        $request = $connexion->query("SELECT * FROM users WHERE email = '$this->email' OR nickname = '$this->nickname' AND password = '$password'"); // password hashé
        

        $result = $request->fetch_all(MYSQLI_ASSOC);
       
        if (password_verify($this->pass, $result[0]['password'])) {
            echo 'Le mot de passe est ok ';
    }


        $requestId = $connexion->query("SELECT id FROM users WHERE email = '$this->email' OR nickname = '$this->nickname'");
        $resultId = $requestId->fetch_all(MYSQLI_ASSOC);
        $userId = $resultId[0]['id'];
        $_SESSION['user_id'] = $userId;
        
        $requestTweet = $connexion->query("SELECT user_id, message FROM tweets WHERE user_id = '$userId'");
        $resultTweet = $requestId->fetch_all(MYSQLI_ASSOC);

        if(!empty($result))
        {
            return $result;

        } else
        {
            return false;
        }
    }

    public function getTweets()
    {
        $db = new Database();   
        $connexion = $db->getConnexion();
        $requestId = $connexion->query("SELECT id FROM users WHERE email = '$this->email' OR nickname = '$this->nickname'");
        $resultId = $requestId->fetch_all(MYSQLI_ASSOC);
        $userId = $resultId[0]['id'];

        $requestTweet = $connexion->query("SELECT user_id, message FROM tweets WHERE user_id = '$userId'");
        $resultTweet = $requestId->fetch_all(MYSQLI_ASSOC);
    }
}
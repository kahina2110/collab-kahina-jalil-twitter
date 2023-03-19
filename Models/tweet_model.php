<?php
require '../database/db.php';

class Tweet
{
    private string $message;
    private string $email;
    private string $nickname;
    private $images;
    

    public function __construct()
    {
        $this->message = $_POST['message'];
        $this->email = $_SESSION['EMAIL'];
        $this->nickname = $_SESSION['NICKNAME'];
        $this->images = $_FILES['images'];
    }


    public function setImages($images)
    {
        $this->images = $images;
    }
    public function getImages()
    {
        return $this->images;
    }
    // Tweet text
    public function setText($message)
    {
        $this->message = $message;
    }
    public function getText()
    {
        return $this->message;
    }

    // User email
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function getEmail()
    {
        return $this->email;
    }

    // User nickname
    public function setNickname($nickname)
    {
        $this->nickname = $nickname;
    }
    public function getNickname()
    {
        return $this->nickname;
    }

    public function postTweet()
    {
        $db = new Database();
        $connexion = $db->getConnexion();

        // get user id
        $requestId = $connexion->query("SELECT id FROM users WHERE email = '$this->email' OR nickname = '$this->nickname'");
        $result = $requestId->fetch_all(MYSQLI_ASSOC);
        $userId = $result[0]['id'];

        // Add tweet to db
        $requestInsert = $connexion->query("INSERT INTO tweets (user_id, message, images)
        VALUE ('$userId', '$this->message', '$this->images')");

        // Display tweet
        $requestDisplay = $connexion->query("SELECT message, images FROM tweets");
        $resultDisplay = $requestDisplay->fetch_all(MYSQLI_ASSOC);
        $target_dir = "assetsUser/";
        $target_file = $target_dir . basename($_FILES["images"]["name"]);
        $file =$target_file;

        // $db = new Database();   
        // $connexion = $db->getConnexion();
        // $req = $connexion->prepare("INSERT INTO tweets (images) VALUES ('$target_file')");
        // $req->execute();
  
        // $postPictures = $connexion->query("SELECT images FROM tweets");
        // echo '<img src='.$file . '>';
        

        return $resultDisplay;
        
    }
}

?>
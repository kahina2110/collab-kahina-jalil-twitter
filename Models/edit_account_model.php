<?php
require '../database/db.php';
session_start();

class Account
{
    private string $pseudo;
    private string $email;
    private string $pass;

    public function __construct()
    {
        $this->nickname = $_POST['nickname'];
        $this->email = $_POST['email'];
        $this->pass = $_POST['password'];
        $password = hash('ripemd160', $this->pass);
    }

    // // Nickname
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
    public function setPass(string $password)
    {
        $this->pass = $password;
    }
    public function getPass()
    {
        return $this->pass;
    }

    public function editAccount()
    {
        $db = new Database();   
        $connexion = $db->getConnexion();

        $currentPseudo = $_SESSION['NICKNAME'];
        $currentEmail = $_SESSION['EMAIL'];
        $currentPass = $_SESSION['PASSWORD'];

        // REQUEST ID
        $requestId = $connexion->query("SELECT id FROM users WHERE nickname = '$currentPseudo' OR email = '$currentEmail' OR password = '$currentPass'");
        $result = $requestId->fetch_all(MYSQLI_ASSOC);
        $userId = $result[0]['id'];

        // REQUEST UPDATE
        $requestUpdate = $connexion->query("UPDATE users SET nickname = '$this->pseudo', email = '$this->email' password = '$this->pass' where id=". $_SESSION['id']);
        $_SESSION['PSEUDO'] = $this->pseudo;
        $_SESSION['EMAIL'] = $this->email;
        $_SESSION['PASSWORD'] = $this->pass;

        $result = $requestUpdate->fetch_all(MYSQLI_ASSOC);

        if($requestUpdate){
            return $result;

        
        }
        
    }

    function editPictures(){
        $db = new Database();   
        $connexion = $db->getConnexion();
    if(isset($_FILES['avatar']) AND !empty($_FILES['avatar']['name'])) {
       $tailleMax = 2097152;
       $extensionsValides = array('jpg', 'jpeg', 'gif', 'png');
       if($_FILES['avatar']['size'] <= $tailleMax) {
           $extensionUpload = strtolower(substr(strrchr($_FILES['avatar']['name'], '.'), 1));
           if(in_array($extensionUpload, $extensionsValides)) {
               $chemin = "membres/avatars/".$_SESSION['id'].".".$extensionUpload;
               $resultat = move_uploaded_file($_FILES['avatar']['tmp_name'], $chemin);
               if($resultat) {
                   $updateavatar = $connexion->prepare('UPDATE membres SET avatar = :avatar WHERE id = :id');
                   $updateavatar->execute(array(
                       'avatar' => $_SESSION['id'].".".$extensionUpload,
                       'id' => $_SESSION['id']
                    ));
                    header('Location: account_view.php?id='.$_SESSION['id']);
                } else {
                    $msg = "Erreur durant l'importation de votre photo de profil";
                }
            } else {
                $msg = "Votre photo de profil doit être au format jpg, jpeg, gif ou png";
            }
        } else {
            $msg = "Votre photo de profil ne doit pas dépasser 2Mo";
        }
    }
}
    
}
?>
<?php

class Photo {

private $images ;



public function setImages($images)
    {
        $this->images = $images;
    }
    public function getImages()
    {
        return $this->images;
    }



  public function Upload(){



  require_once('../database/db.php');
  $db = new Database();   
  $connexion = $db->getConnexion();
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $target_dir = "../Views/assetsUser/";  $target_file = $target_dir . basename($_FILES["images"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  
  // Vérifier si le fichier est une image
  if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["images"]["tmp_name"]);
    if($check !== false) {
      $uploadOk = 1;
    } else {
      echo "Le fichier n'est pas une image.";
      $uploadOk = 0;
    }
  }

  
  // Vérifier la taille du fichier
  if ($_FILES["images"]["size"] > 1000000) {
    echo "Le fichier est trop grand.";
    $uploadOk = 0;
  }
 
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
  && $imageFileType != "gif" ) {
    echo "Seuls les fichiers JPG, JPEG, PNG et GIF sont autorisés." . "</br>";
    $uploadOk = 0;
  }
  // Vérifier si $uploadOk est à 0 à cause d'une erreur
  if ($uploadOk == 0) {
    echo "Le fichier n'a pas été uploadé.";
  // Sinon, uploader le fichier
  } else {
    if (move_uploaded_file($_FILES["images"]["tmp_name"], $target_file))
     {
         $theuserid =$_SESSION["user_id"];
      $file =$target_file;
      $db = new Database();   
      $connexion = $db->getConnexion();
      $req = $connexion->prepare("INSERT INTO tweets (user_id, images) VALUES ('$theuserid','$target_file')");
      $req->execute();

      $postPictures = $connexion->query("SELECT images FROM tweets");
      
      // echo '<img src='. $file . '>';
      
      // echo "Le fichier ". htmlspecialchars( basename( $_FILES["images"]["name"])). " a été uploadé.";
    } else {
      echo "Une erreur est survenue lors de l'upload du fichier.";
    }
  }
}
}

}

$photos = new Photo();
$photos->Upload();



?>
<?php 
session_start();
include '../Controllers/account_controller.php';
?>


<?php





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
  }
  $theuserid =$_SESSION["NICKNAME"];

  $file="";
$file =$target_file;
$db = new Database();   
$connexion = $db->getConnexion();
$req = $connexion->prepare("UPDATE users (picture) SET ()");
$req->execute();

$postPictures = $connexion->query("SELECT picture FROM users");

  
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROFILE</title>
    <script src="https://cdn.tailwindcss.com"></script>
  
<script src="https://kit.fontawesome.com/b87d756cc2.js" crossorigin="anonymous"></script>

<style>.bg-light{
  background-color: #FAECBC;
 
 }

 .bg-black {
  color:white;
 }
 </style>
    <link rel="stylesheet" href="../Views/signin.css">
</head>
    <body class="bg-light">
    
      <nav class="bg-black border-gray-200 px-2 sm:px-4 py-2.5 rounded dark:bg-gray-900">
        <div class="container flex flex-wrap items-center justify-between mx-auto">
          <a href="https://flowbite.com/" class="flex items-center">
              <!-- <img src="https://flowbite.com/docs/images/logo.svg" class="h-6 mr-3 sm:h-9" alt="Flowbite Logo" /> -->
              <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
          </a>
          <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
          </button>
          <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-black ">
              <li>
                <a href="#" class="block py-2 pl-3 pr-4 text-white rounded md:bg-transparent md:p-0 dark:text-white" aria-current="page">Home</a>
              </li>
              <li>
                <a href="#" class="block py-2 pl-3 pr-4 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">About</a>
              </li>
              <li>
                <a href="#" class="block py-2 pl-3 pr-4 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Services</a>
              </li>
              <li>
                <a href="../Views/feed_view.php" class="block py-2 pl-3 pr-4 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Explorer</a>
              </li>
              <li>
                <a href="#" class="block py-2 pl-3 pr-4 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Contact</a>
              </li>
              <li>
                <a href="#"><i class="fa-solid fa-power-off text-white"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa-solid fa-toggle-on text-white" id="dark-mode"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

        <div class="backscreen w-full h-[400px] bg-[#D0C6A2] relative ">
            
        <div class="picture rounded-full bg-black h-[250px] w-[250px] ml-auto mr-auto absolute bottom-[-180px] left-[50%] translate-x-[-50%] translate-y-[-50%] " >
          <?php  
     {


      echo '<img class="rounded-full h-[250px] w-[250px] "  src='. $_SESSION['PICTURE'] . '>';
      
      // echo "Le fichier ". htmlspecialchars( basename( $_FILES["images"]["name"])). " a été uploadé.";
    } ?>
          </div>   
        </div>
        <form method="post" enctype="multipart/form-data">
                    <input type="file" name="images" >
                    <input type="submit" name="submit">
              
          </form>
        <div class="text-center mt-[65px]">
            <button class="absolute left-[80%] w-[60px] rounded-[50px] bg-[#FFD42A]"><i class="fa-regular fa-user-pen"></i></button>
            <h1><?php echo $_SESSION['NICKNAME'] ?></h1>
        <p><?php echo $_SESSION['EMAIL'] ?></p>
        <p><?php
            foreach (displayFollows() as $follows) {
                $follows = explode(" ,", $follows);
                if ($follows == "") {
                    echo '0';
                } else {
                    echo count($follows);
                }
            }
            ?>
            <button id="follows__button" type="submit">Follows</button></p>
        <p><?php
            $count = 0;
            foreach (displayFollowers() as $userFollowers) {
                $count += 1;
            }          
            echo $count;       
        ?>
            <button id="followers__button" type="submit">Followers</button></p>
    </div>
    <div class="tweet">
        <?php
        foreach (displayAccount() as $userTweets) {
            echo $userTweets['message'] . "</br>";
        }
        ?>
            <p class="text-[8pt] mt-2"><b>1023</b> Abonnements <b>122k</b> Abonnés</p>
            <p class="text-[10pt] mt-3">"Les pinkous c'est pour la vie"</p>
        </div>

        <script>
        const darkModeButton = document.getElementById('dark-mode');
        const body = document.body;darkModeButton.addEventListener('click', () => {
          body.classList.toggle('bg-light');
          body.classList.toggle('bg-black');});
          </script>
</body>
<script src="../Ajax/account_ajax.js"></script>
<script src="../Ajax/edit_page_ajax.js"></script>
<script src="../Ajax/followslist_ajax.js"></script>
<script src="../Ajax/followerslist_ajax.js"></script>


</html>
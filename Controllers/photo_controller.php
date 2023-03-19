<?php 
require '../Models/Photo.php';

function displayPhotos()
{
    $photos = new Photo;
    $data = $photos->Upload();
    if($data)
    {
        return  $data;
      

    }
}
?>
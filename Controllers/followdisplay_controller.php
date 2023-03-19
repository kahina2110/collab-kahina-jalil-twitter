<?php 
require '../Models/followdisplay.php';

$follows = new FollowDisplay();
echo $follows->getFollow();
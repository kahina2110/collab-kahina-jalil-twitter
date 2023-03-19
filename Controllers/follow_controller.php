<?php
session_start();
require '../Models/follow.php';

$follow = new Follow();
echo $follow->followUser();
?>
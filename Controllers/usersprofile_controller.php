<?php 
require '../Models/usersprofile.php';

function displayUsersProfile()
{
    $usersProfile = new UsersProfile();
    $data = $usersProfile->usersProfileDisplay();
    if($data)
    {
        return $data;
    }
}
function displayFollows()
{
    $usersProfile = new UsersProfile();
    $follows = $usersProfile->usersFollows();
    if($follows)
    {
        return $follows[0];
    }
}
function displayFollowers()
{
    $usersProfile = new UsersProfile();
    $followers = $usersProfile->usersFollowers();
    if($followers)
    {
        return $followers[0];
    }
}
?>
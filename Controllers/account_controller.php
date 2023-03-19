<?php 
require '../Models/account_model.php';

function displayAccount()
{
    $account = new Account();
    $data = $account->accountDisplay();
    if($data)
    {
        return $data;
    }
}
function displayFollows()
{
    $account = new Account();
    $follows = $account->getFollows();
    if($follows)
    {
        return $follows[0];
    }
}
function displayFollowers()
{
    $account = new Account();
    $followers = $account->getFollowers();
    if($followers)
    {
        return $followers;   
    }
}

?>
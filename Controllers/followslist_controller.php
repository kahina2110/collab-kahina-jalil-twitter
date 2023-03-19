<?php 
session_start();
require '../Models/followslist.php';

$followsList = new FollowsList();
$data = $followsList->getFollowsList();
if($data)
{
    foreach($data[0] as $value)
    {
        $value = explode(" ,", $value);
        foreach($value as $list)
        {
            echo $list;
        }
    }
}


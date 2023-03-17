<?php
require '../Models/edit_account_model.php';

$edited = new Account();
echo $edited->editAccount();

if($edited)
{
    // $_SESSION['NICKNAME'] = $resultLogin[0]['nickname'];
    // $_SESSION['EMAIL'] = $resultLogin[0]['email'];
    // $_SESSION['FOLLOWS'] = $resultLogin[0]['follows'];
    // $_SESSION['PICTURE'] = $resultLogin[0]['picture'];
    //etc
    //voir si on redirige sur le feed ou sur le profil après la connection
    
    echo 'success';
} else{
    echo 'error';
}
?>
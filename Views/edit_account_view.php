<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Account</title>
</head>

<body>
    <form id="edit__form" name="edit__form" method="post">
        <label>Nickname</label>
        <input type="text" name="nickname">
        <label>Email</label>
        <input type="text" name="email">
        <label>Password</label>
        <input type="password" name="pass">
        <button id="edit__button" type="submit">Save</button>
    </form>

    <form method="post" enctype="multipart/form-data">
                    <input type="file" name="images" >
                    <input type="submit" name="submit">
              
          </form>
</body>
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<script src="../Ajax/edit_account_ajax.js"></script>

</html>
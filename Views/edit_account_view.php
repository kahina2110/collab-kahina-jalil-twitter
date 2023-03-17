<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit profile</title>
    <style>
        *{
            width: 100%;
      
         
            
        }
    #edit__button {
       margin-left: 47%;
       margin-right: auto;
       width: 100px;
    }
    label {
        margin-left: 40%;
        margin-right: auto;
    }
    button {
        width: 100px;
        margin-left: 47%;
    }
    </style>
    <link rel="stylesheet" href="../Views/signin.css"> 
    <form id="edit__form" method="post">
             
             <p>
             <input type="text" name="nickname"  value="" placeholder="Edit nickname"><br>
             <input type="text" name="email"  value="" placeholder="Edit email"><br>
             <input type="password" name="password"  value="" placeholder="Edit password"><br>
             
             
                  <br><br><label>Edit picture</label>
                  <input type="file" name="picture" placeholder="Change picture">
                  <a href="edit_account_view.php">
                  <button type="submit" name="submit">UPLOAD FILE</button>
                  </a>

            </p>
        </form>
        
        </form>
        <button type="submit" name="update" id="edit__button" >Register</button>
        </div>
</head>
<body>
   <script src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<script src="../Ajax/edit_account_ajax.js"></script> 
</body>
</html>
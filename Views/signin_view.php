
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../Views/signin.css">
  <title>Inscription</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <img src="../Views/assets/logo.png">
      <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"> -->
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <!-- <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled">Disabled</a>
              </li>
            </ul> -->
      </div>
    </div>
  </nav>
  <div class="oho">
    <h1>Inscription</h1>
    <form id="signin__form" method="post">

      <input type="text" id="signin__fields" name="nickname" placeholder="Enter a pseudo">

      <input type="text" id="signin__fields" name="email" placeholder="Enter a mail address">

      <input type="password" id="signin__fields" name="pass" placeholder="Enter a password">
      
            <button type="submit" id="signin__button">Sign in</button>
          <h4><a href="login_view.php">Connectez-vous</a></h4>
    </form>
    <img src="../Views/assets/Capture_d_écran_2023-02-21_20-01-17-removebg-preview(1).png">
  </div>

  <script src="https://code.jquery.com/jquery-3.6.3.min.js"
    integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
  <script src="../Ajax/signin_ajax.js"></script>
</body>

</html>
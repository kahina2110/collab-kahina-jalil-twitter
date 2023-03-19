<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../Views/signin.css">
    
    
    <title>Document</title>
</head>

<body class="bg-[#FAECBC]">
    
      <nav class="navbar navbar-expand-lg bg-black h-[70px]">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
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
            </ul>
          </div>
        </div>
      </nav>
    
    <div class="container mx-auto justify-center flex mt-[60px] space-x-20 ">
      <img class=" mt-4 w-[18rem] h-[40rem] columns-6   " src="../assets/lemokup.png">
      <div class="row  justify-content-center">
      <!-- <img class="  -left-11 w-[38rem] columns-6  float-left" src="../Views/assets/image3.png"> -->
    <div class=" oho bg-[#FFBF84]  mt-[100px] border-6 border-black rounded-[50px] h-[30rem] w-[25rem] flex p-10 sm:justify-center ">
      <!-- <div class=" oho bg-[#FFBF84] justify-center flex pt-20 mt-[70px] w-[25rem] h-[30rem] border-2 border-black  p-7 rounded-[50px] "> -->
      <form id="signin__form" class ="grid text-center "  method="post">
        <h1 class="text-3xl font-style:Pactua One">Inscription</h1>
            <!-- <label>Pseudo</label> -->
            <input class="h-11 w-[20rem] rounded-full border-2 border-black pl-4" type="text" id="signin__fields" name="nickname" placeholder="pseudo">
            <!-- <label>Email</label> -->
            <input class="h-11 w-[20rem] rounded-full border-2 border-black pl-4" type="email" id="signin__fields" name="email" placeholder="email">
            <!-- <label>Password</label> -->
            <input  class="h-11 rounded-full border-2 border-black pl-4" type="password" id="signin__fields" name="pass" placeholder="password">
            <button class="h-11 w-[8rem] ml-[100px] bg-[#d49a9a] rounded-full border-2 border-black hover:scale-75" type="submit" id="signin__button">Sign in</button>
            <!-- <img class="absolute -bottom-3 -left-11  " src="../Views/assets/Capture_d_écran_2023-02-21_20-01-17-removebg-preview(1).png"> -->
        </form>
    </div>
  </div>
  
</div>
<div class="row">
<footer class="p-4 bg-black text-white sm:p-6 dark:bg-gray-900">
  <div class="md:flex md:justify-between">
      <div class="mb-6 md:mb-0 text-white">
          <a href="" class="flex items-center">
              <img src="./assets/capt1.png" class="h-8 mr-3" alt="FlowBite Logo" />
              <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Twist</span>
          </a>
      </div>
      <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
          <div>
              <h2 class="mb-6 text-sm text-white font-semibold text-gray-900 uppercase dark:text-white">Resources</h2>
              <ul class="text-gray-600 dark:text-gray-400 text-white">
                  <li class="mb-4">
                      <a href="" class="hover:underline">Twist</a>
                  </li>
                  <li>
                      <a href="" class="hover:underline">News</a>
                  </li>
              </ul>
          </div>
          <div>
              <h2 class="mb-6 text-sm text-white font-semibold text-gray-900 uppercase dark:text-white">Follow us</h2>
              <ul class="text-gray-600 dark:text-gray-400 text-white">
                  <li class="mb-4">
                      <a href="" class="hover:underline ">Google Play</a>
                  </li>
                  <li>
                      <a href="" class="hover:underline">AppStore</a>
                  </li>
              </ul>
          </div>
          <div>
              <h2 class="mb-6 text-sm text-white font-semibold text-gray-900 uppercase dark:text-white">Legal</h2>
              <ul class="text-gray-600 dark:text-gray-400 text-white">
                  <li class="mb-4">
                      <a href="#" class="hover:underline">Privacy Policy</a>
                  </li>
                  <li>
                      <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                  </li>
              </ul>
          </div>
      </div>
  </div>
  <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
  <div class="sm:flex sm:items-center sm:justify-between">
      <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="https://flowbite.com/" class="hover:underline">Twist™</a>. All Rights Reserved.
      </span>
      <div class="flex mt-4 space-x-6 sm:justify-center sm:mt-0">
          <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
             
              <span class="sr-only">Facebook page</span>
          </a>
          <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
              
              <span class="sr-only">Instagram page</span>
          </a>
          <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
              
              <span class="sr-only">Twitter page</span>
          </a>
        
      </div>
  </div>
</footer>
</div>

    <script src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="../Ajax/signin_ajax.js"></script>
</body>

</html>
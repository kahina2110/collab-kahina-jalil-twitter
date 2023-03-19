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
    
<nav class="bg-black border-gray-200 px-2 sm:px-4 py-2.5 rounded dark:bg-gray-900">
  <div class="container flex flex-wrap items-center justify-between mx-auto">
    <a href="https://flowbite.com/" class="flex items-center">
        <!-- <img src="https://flowbite.com/docs/images/logo.svg" class="h-6 mr-3 sm:h-9" alt="Flowbite Logo" /> -->
        <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
    </a>
    <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
      <span class="sr-only">Open main menu</span>
      <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
    </button>
    <li>
          <a href="../Views/login_view.php" class="block py-2 pl-3 pr-4 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Connexion</a>
        </li>
  </div>
</nav>
    
    <div class="container mx-auto justify-center flex mt-[60px] space-x-20 ">
      <img class=" mt-4 w-[18rem] h-[40rem] columns-6   " src="../lemokup.png">
      <div class="row  justify-content-center">
      <!-- <img class="  -left-11 w-[38rem] columns-6  float-left" src="../Views/assets/image3.png"> -->
    <div class=" oho bg-[#FFBF84]  mt-[100px] border-6 border-black rounded-[50px] h-[30rem] w-[25rem] flex p-10 sm:justify-center ">
      <!-- <div class=" oho bg-[#FFBF84] justify-center flex pt-20 mt-[70px] w-[25rem] h-[30rem] border-2 border-black  p-7 rounded-[50px] "> -->
      <form id="signin__form" class ="grid text-center "  method="post">
        <h1 class="text-3xl font-style:Pactua One">Inscription</h1>
            <!-- <label>Pseudo</label> -->
            <input class="h-11 w-[20rem] rounded-full border-2 border-black pl-4" type="text" id="signin__fields" name="nickname" placeholder="Pseudo">
            <!-- <label>Email</label> -->
            <input class="h-11 w-[20rem] rounded-full border-2 border-black pl-4" type="email" id="signin__fields" name="email" placeholder="Email">
            <!-- <label>Password</label> -->
            <input  class="h-11 w-[20rem] rounded-full border-2 border-black pl-4" type="password" id="signin__fields" name="pass" placeholder="Password">
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
              <img src="../capt1.png" class="h-8 mr-3" alt="FlowBite Logo" />
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
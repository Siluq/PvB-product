<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.7/dist/flowbite.min.css" />
<script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
<title>Welcome to Finance Portal</title>
</head>
<body>
<div class="min-h-screen"> 
    <nav class="bg-white border-gray-200 px-2 sm:px-4 py-2.5 rounded">
        <div class="container flex flex-wrap justify-between items-center mx-auto">
            <button data-collapse-toggle="mobile-menu" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="mobile-menu" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
            <a href="index.php" class="flex items-center">
                <img src="/assets/images/logo.svg" class="mr-3 h-12 sm:h-9" alt="Logo">
            </a>
            <div class="hidden w-full md:block md:w-auto" id="mobile-menu">
                <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
                    <li>
                        <a href="/" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-200 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Home</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-200 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">About</a>
                    </li>
                    <?php
                    if (isset($_SESSION["naam"])) {
                        echo "<li><a href='calender.php' class='block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-200 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0'>Calender</a></li>";
                        echo "<li><a href='profiel.php' class='block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-200 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0'>Profiel</a></li>";
                        echo "<li><a href='/config/logout.php' class='lock py-2 pr-4 pl-3 text-gray-700 border-b border-gray-200 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0'>Log uit</a></li>";
                    }
                    else {
                        echo "<li><a href='register.php' class='block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-200 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0'>Registreren</a></li>";
                        echo "<li><a href='login.php' class='block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-200 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0'>Login</a></li>";
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>
<div class="bg-repeat h-5" style="background-image: url(/assets/images/redline.svg)"></div>
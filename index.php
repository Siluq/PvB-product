<?php
    include_once 'header.php';
?>

<?php
                    if (isset($_SESSION["naam"])) {
                        echo "<br><p>Hallo daar " . $_SESSION["naam"] . "</p>";
                    }
                    else {
                        echo "
                        <div>
                            <p class='flex items-start justify-center mt-20'>Dit is een systeem voor bewoners van</p>
                            <p class='flex items-start justify-center mt-4 font-bold text-red-500'>Enkeltje Zelfstandig</p>
                            <div class='flex items-start justify-center m-10'>
                                <a href='/login.php' class='content-center px-6 py-2 mt-4 text-white bg-red-600 hover:bg-red-700'>Inloggen</a>
                            </div>
                            <p class='flex items-start justify-center'>-of-</p>
                            <div class='flex items-start justify-center'>
                                <a href='/register.php' class='content-center px-6 py-2 mt-4 bg-gray-100 hover:bg-gray-200'>Registreren</a>
                            </div>
                        </div>
                        ";
                    }
                ?>

</body>
</html>
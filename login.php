<?php
    include_once 'header.php';
?>

    <div class="flex items-start sm:items-center justify-center min-h-screen bg-gray-100">
        <div class="px-8 py-6 mt-4 text-left bg-white shadow-lg">
            <h3 class="text-2xl font-bold text-center">Login tot uw account</h3>
            <form action="login2.php" method="post">
                <div class="mt-4">
                    <div>
                        <label class="block" for="email">Email<label>
                                <input type="text" name="email" placeholder="Email" 
                                    class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                    </div>
                    <div class="mt-4">
                        <label class="block">Wachtwoord<label>
                                <input type="password" name="wachtwoord" placeholder="Wachtwoord" 
                                    class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                    </div>
                    <div class="flex items-baseline justify-between">
                        <button type="submit" name="submit" class="px-6 py-2 mt-4 text-white bg-red-600 hover:bg-red-700">Login</button>
                    </div>
                    <div class="flex items-baseline justify-between">
                        <p class="text-sm font-semibold mt-2 pt-1 mb-0">Nog geen account?
                            <a href="register.php" class="text-sm text-red-500 hover:underline"
                            >Registreer</a>
                        </p>                
                    </div>
                </div>
            </form>
            <?php
            if (isset($_GET["error"])) {
                if ($_GET["error"] == "emptyinput") {
                    echo "<p class='mt-4 px-4 py-2 border rounded-md bg-red-400 text-center'>
                    Vul alle velden in!</p>";
                }
                elseif ($_GET["error"] == "verkeerdelogin") {
                    echo "<p class='mt-4 px-4 py-2 border rounded-md bg-red-400 text-center'>
                    Verkeerde login gegevens!</p>";
                }
            }
            ?>
        </div>
    </div>
</body>
</html>
<?php
    include_once 'header.php';
?>
    <div class="flex items-center justify-center min-h-screen bg-gray-100">
        <div class="px-8 py-6 my-4 text-left bg-white shadow-lg">
            <h3 class="text-2xl font-bold text-center">Registreer uw account</h3>
            <form action="registratie2.php" method="post" enctype="multipart/form-data">
                <div class="mt-4">
                    <div>
                        <label class="block" for="naam">Naam<label>
                                <input type="text" name="naam" placeholder="Voledige naam"
                                    class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                    </div>
                    <div class="mt-4">
                        <label class="block" for="email">Email<label>
                                <input type="text" name="email" placeholder="Email"
                                    class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                    </div>
                    <div class="mt-4">
                        <label class="block">Wachtwoord<label>
                                <input type="password" name="wachtwoord" placeholder="Wachtwoord"
                                    class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                    </div>
                    <div class="mt-4">
                        <label class="block">Wachtwoord herhalen<label>
                                <input type="password" name="wachtwoordR" placeholder="Wachtwoord herhalen"
                                    class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                    </div>
                    <div class="mt-4">
                        <label class="block" for="bday">Geboortedatum<label>
                                <input type="date" name="geboortedatum" placeholder="Geboortedatum"
                                    class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                    </div>
                    <div class="mt-4">
                        <label class="block" for="tell">Telefoonnummer<label>
                                <input type="number" name="tel" placeholder="Telefoonnummer"
                                    class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                    </div>
                    <div class="flex items-baseline justify-between">
                        <button type="submit" name="submit" class="px-6 py-2 mt-4 text-white bg-red-600 hover:bg-red-700">Registreer</button>
                    </div>
                    <div class="flex items-baseline justify-between">
                        <p class="text-sm font-semibold mt-2 pt-1 mb-0">Ik heb al een account?
                            <a href="login.php" class="text-sm text-red-500 hover:underline"
                            >Login</a>
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
                elseif ($_GET["error"] == "invalidemail") {
                    echo "<p class='mt-4 px-4 py-2 border rounded-md bg-red-400 text-center'>
                    Gebruik een geldig email!</p>";
                }
                elseif ($_GET["error"] == "wachtwoordnomatch") {
                    echo "<p class='mt-4 px-4 py-2 border rounded-md bg-red-400 text-center'>
                    Wachtwoorden komen niet overeen!</p>";
                }
                elseif ($_GET["error"] == "invalidtel") {
                    echo "<p class='mt-4 px-4 py-2 border rounded-md bg-red-400 text-center'>
                    Telefoonnummer niet geldig!<br>Format: 0612345678</p>";
                }
                elseif ($_GET["error"] == "emailbestaat") {
                    echo "<p class='mt-4 px-4 py-2 border rounded-md bg-red-400 text-center'>
                    Email is al in gebruik!</p>";
                }
                elseif ($_GET["error"] == "stmtfailed") {
                    echo "<p class='mt-4 px-4 py-2 border rounded-md bg-red-400 text-center'>
                    Er is iets mis gegaan, probeer het later opnieuw!</p>";
                }
                elseif ($_GET["error"] == "none") {
                    echo "<p class='mt-4 px-4 py-2 border rounded-md bg-green-500 text-center'>
                    Uw account is aangemaakt!</p>";
                }
            }
            ?>
        </div>
    </div>
</body>
</html>
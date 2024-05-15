<?php
    include("inc/main.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SJ2Revive</title>
    <style>
        <?php
        if (isset($_COOKIE['theme'])) {
            if($_COOKIE['theme'] == "light")
            {
                load_light_css();
            }
            if($_COOKIE['theme'] == "dark")
            {
                load_dark_css();
            }
        }
        if (!isset($_COOKIE['theme'])) {
            load_dark_css();
        }
        
        ?>
    </style>
</head>
<body>
<?php
    rendertab();
?>
    
    <div class="maindiv">
        <div>
        <h1 style="top: 80%"> FAQ </h1>
        
        <p style="top: 30%"> Co to? </p>
        <p style="top: 30%"> - Jest to projekt w którym Ja(<a href="https://www.youtube.com/channel/UCr5BqK36fL0dx_OFHN0xNuw">Zordon1337</a>) i <a href="https://www.youtube.com/channel/UCZpCDxbAiJCrxgJBMR1cVQA">Qwertyuiop123</a> próbujemy ożywić grę "Symulator Jazdy 2" za pomocą nieoficjalnych modyfikacji, niestandardowego launchera oraz całkiem nowej zawartości do pobrania. </p>
        <p style="top: 30%"> Jak zainstalować Launcher? </p>
        <p style="top: 30%"> - Wypakowujemy plik Launcher.zip do folderu Release w folderze gry. </p>
        <p style="top: 30%"> Jak zainstalować mody? </p>
        <p style="top: 30%"> - Rozpakowujemy plik Zip, czytamy dołączony do niego plik "Poradnik.txt" lub "Readme.txt", i postępujemy zgodnie z zawartą w nich instrukcją. </p>
        <p> Jak zaktualizować Launcher? </p>
        <p> - z racji że już nie aktualizujemy go na stronie musisz użyć Auto Updater'a </p>
        <p> Jak używać auto updater? </p>
        <p> - Po znalezieniu Aktualizacji przez Auto Updater pobierze on aktualizacje do folderu "update", następnie musisz przekopiować zawartość folderu "update" do folderu z launcherem i zamienić starą wersje na nową</p>
    </div>
        
    </div>
</body>
</html>
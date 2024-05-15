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
            <br />
            <br />
            <img src="/img/launcher.png" width="620" height="350" /> <br /> <br />
            <h1>Launcher SJ2R</h1>
            <h4>Tymczasowo jest tylko dostępny launcher w wersji lite(nowy)<br/>
                ponieważ wersja Pełna jest jeszcze nie gotowa, lite ma otwarty kod zródłowy<br/>
                więc jest otwarty na modyfikacje społeczności, ale nie ma co sie bać nadal<br/>
                można pobrać skompilowaną wersje, warto wspomnieć że wersja lite nie jest<br/>
                jeszcze w pełni gotowa i jest wiele rzeczy do dodania, ale launcher jest już<br/>
                w fazie w której można używać już go do podstawowych rzeczy, pamiętaj że<br/>
                launcher może się zmienić o 180 stopni do finalnej wersji<br/>
            </h4>
            <h4>Wymagania wersji Lite</h4>
            <p>System: Powinnien działać na viscie</p>
            <p>runtime: .NET Framework 3.0</p>
            <a href="https://github.com/SJ2Revive/Launcher-CLI/">
                <button>Pobierz wersje lite(link do repozytorium na github)</button>
            </a>
            <h5>Stare wersje launchera zostały wycofane z powodu bycia nie aktualizowanym</h5>
            <h5>przez długi czas, jeśli mimo to chcesz pobrać starą wersje kliknij przycisk poniżej</h5>
            <a href="/old_launcher.php">
                <button>Archiwum</button>
            </a>
            <br/>
            <br/>
        </div>
        
    </div>
</body>
</html>
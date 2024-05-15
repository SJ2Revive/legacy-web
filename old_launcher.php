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
            <h1>Stary Launcher SJ2R</h1>
            <h4>Zalecane używać na Win 10 i Win 11 ale może działać też na Win 7, ale trzeba jest pobrać .NET framework 4.7.2</h4>
            <h4>Wymagania: <a href="https://dotnet.microsoft.com/en-us/download/dotnet-framework/thank-you/net472-offline-installer">.NET Framework 4.7.2</a>(powinnien być już zainstalowany domyślnie w win 10 i 11)</h4>
            <h4> Launcher SJ2R</h4>
            <h4> Funkcje Launchera: </h4>
            <p>- Discord RPC</p>
            <p>- Auto Update</p>
            <br />
            <h4>Możesz Go pobrać na 2 Sposoby</h4>
            <s><h3>-- Za pomocą instalatora --</h3></s>
            <s><a href="https://cdn.zndev.xyz/sj2r/Launcher/Installer_Latest.zip"></s>
            </a></s>
            <p>Launcher przestał działać w przyszłości go może naprawie</p>
            <h3>-- Manualnie --</h3>
            <h1>Poradnik jak zainstalować Manualnie</h1>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/4-GB-qNKrE0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            <br />
            <br />
            <a href="https://cdn.zndev.xyz/sj2r/Launcher/Launcher_Latest.zip">
                <button>Pobierz Launcher</button>
            </a>
            <br />
            <br />
            <br />
            <h1>Legacy Launcher</h1>
            <h4>Idealny na Win XP i Win Vista</h4>
            <h4>Wymagania: <a href="https://www.microsoft.com/pl-pl/download/confirmation.aspx?id=5913">.NET Framework 2.0</a></h4>
            <a href="https://cdn.zndev.xyz/sj2r/Launcher/Legacy_Latest.zip">
                <button>Pobierz Launcher</button>
            </a>
        </div>
        
    </div>
</body>
</html>
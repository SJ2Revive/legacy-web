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
        <h1> SJ2 Aktualizacje (1.0-1.03) </h1>
        <h4> Reupload oficjalnych aktualizacji do SJ2 ponieważ pobranie ich już nie jest możliwe </h4>
        <h4> Opis: </h4>
        <p style='margin-left: 15px;text-align:left;'>
        Archiwum HASŁO: 'chomik almerczak'<br />
        Po kolei podmieniaj pliki z originalnym folderem gry (każda aktualizacja osobno po kolei)<br />
        <a href='https://chomikuj.pl/c7179019/Aktualizacje+Symulator+Jazdy+2,2304492196.rar(archive)'>Źródło</a></br />
        <a href='https://www.youtube.com/watch?v=t_CQVoO1BGE'>PORADNIK WIDEO INSTALACJI AKTUALIZACJI</a><br />
        <br />
        <br />
        <div style="text-align:center;">
        <a style="text-align:center;" href='https://cdn.zndev.pl/sj2r/patch - SJ2Revive.zip'>
            <button style="text-align:center;">Pobierz</button>
        </a>
        <br/>
        <br/>
        </div>
        
        
    </div>
</body>
</html>
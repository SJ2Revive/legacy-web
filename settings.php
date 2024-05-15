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
        
        <h1> Ustawienia </h1>
        <br />
        <br />
        <h4> Motyw </h4>
        <a href="apply.php?category=theme&theme=light">
            <button>Jasny</button>
        </a>
        <br />
        <br />
        <br />
        <a href="apply.php?category=theme&theme=dark">
            <button>Ciemny(domyślny)</button>
        </a>
        <br />
        <br />
        <br />
        </div>
        
    </div>
</body>
</html>
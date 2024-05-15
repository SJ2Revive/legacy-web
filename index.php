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
        <h1 style="top: 80%"> Witaj na stronie projektu SJ2 REVIVE </h1>
        
        <p style="top: 30%"> Co to? Jest to projekt w którym Ja(<a href="https://www.youtube.com/channel/UCr5BqK36fL0dx_OFHN0xNuw">Zordon1337</a>) i <a href="https://www.youtube.com/channel/UCZpCDxbAiJCrxgJBMR1cVQA">Qwertyuiop123</a> próbujemy ożywić grę "Symulator Jazdy 2"</p>
        <p style="top: 30%"> za pomocą nieoficjalnych modyfikacji </p>
        </div>
        
    </div>
</body>
</html>
<?php
    include("inc/main.php");
    include("inc/db.php")
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
    <?php
    if(isset($_COOKIE['tkn']))
    {
        if(checktoken($_COOKIE['tkn']) == 1)
        {
            // todo dodawanie plikow
                $id = $_POST['id'];
                $name = $_POST['name'];
                $shortdesc = $_POST['shortdesc'];
                $longdesc = $_POST['longdesc'];
                $dloadlink = $_POST['dloadlink'];
                $stmt = $conn->prepare('INSERT INTO `Mods`(`id`, `nazwa`, `opis`, `longdesc`, `dloadlink`) VALUES (?, ?, ?, ?, ?)');
                $stmt->bind_param('sssss', $id,$name,$shortdesc,$longdesc,$dloadlink);
                $stmt->execute();
                
                echo "<h1>Dodano!</h1>";
            
        } else {
            echo "<h1>Złe hasło</h1>";
        }
        
    } else {
        echo "<h1>Nie podałeś hasła lub nazwy albo poprostu próbujesz wejść bez uprawnień ŁADNIE TAK!?</h1>";
    }
    
    ?> 
    </div>

</body>
</html>
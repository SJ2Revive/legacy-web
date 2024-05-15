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
  $red = $_GET['redirect'];
  if(isset($_COOKIE['tkn']))
  {
    Header("Location: $red");
    die();
  }
?>
    
    <div class="maindiv">
        <div>
        <h1 style="top: 80%"> Logowanie </h1>
        <?php
        
        echo "<form method='POST' action='/$red'";
        ?>
        <br />
        <p>Nazwa</p>
        <input name="user" />
        <p>Hasło</p>
        <input name="password" />
        <br />
        <br />
        <input type="submit" value="zaloguj" />
        <br />
        <br />
        </form>
        
        </div>
        
    </div>
</body>
</html>
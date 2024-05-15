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
        $tkn = $_COOKIE['tkn'];
        $stmt = $conn->prepare('SELECT * FROM Users WHERE token = ?');
        $stmt->bind_param('s', $tkn);
        $stmt->execute();
        $result = $stmt->get_result();
        if($result->num_rows > 0)
        {   
                
            $row = $result->fetch_assoc();
            $token = $row['token'];
            $username = $row['user'];
            $date = $row['date'];
            setcookie("tkn",$token);
            echo "
                <h1 style='top: 80%'> Panel </h1>
                <br />
                <h2>Witaj $username!</h2>
                <h2>Jesteś juz z nami od $date</h2>
                <br />
            ";
            echo "
            
            <p>Dodaj moda</p>
            <form method='POST' action='addmod.php'>
            <p>ID moda (policz poprostu ilosc modów)</p>
            <input name='id' />
            <p>Nazwa</p>
            <input name='name' />
            <p>krótki opis moda(użyj html plz)</p>
            <textarea name='shortdesc' cols='40' rows='5'></textarea>
            <p>długi opis moda(użyj html plz)</p>
            <textarea name='longdesc' cols='40' rows='5'></textarea>
            <p>link do pobrania moda</p>
            <input name='dloadlink' />
            <br />
            <br />
            <input type='submit' value='dodaj' />
            <br />
            <br /> 
            </form> 
            <p>ps: nie pisz do mnie o błedy pod tym tekstem bo nic z nimi nie moge zrobić próbowałem wszystko co sie da</p>";
        }
    }
    if(isset($_POST['user']) && ($_POST['password']))
    {
        $user = $_POST['user'];
        $password = $_POST['password'];
        $passmd5 = md5($password);
        $stmt = $conn->prepare('SELECT * FROM Users WHERE user = ? && password = ?');
        $stmt->bind_param('ss', $user, $passmd5);
        $stmt->execute();
        $result = $stmt->get_result();
        if($result->num_rows > 0)
        {   
                
            $row = $result->fetch_assoc();
            $token = $row['token'];
            $username = $row['user'];
            $date = $row['date'];
            setcookie("tkn",$token);
            echo "
               <h1 style='top: 80%'> Panel </h1>
               <br />
               <h2>Witaj $username!</h2>
               <h2>Jesteś juz z nami od $date</h2>
               <br />
            ";
            echo "
        
            <p>Dodaj moda</p>
            <form method='POST' action='addmod.php'>
            <p>ID moda (policz poprostu ilosc modów)</p>
            <input name='id' />
            <p>Nazwa</p>
            <input name='name' />
            <p>krótki opis moda(użyj html plz)</p>
            <textarea name='shortdesc' cols='40' rows='5'></textarea>
            <p>długi opis moda(użyj html plz)</p>
            <textarea name='longdesc' cols='40' rows='5'></textarea>
            <p>link do pobrania moda</p>
            <input name='dloadlink' />
            <br />
            <br />
            <input type='submit' value='dodaj' />
            <br />
            <br /> 
            </form> 
            <p>ps: nie pisz do mnie o błedy pod tym tekstem bo nic z nimi nie moge zrobić próbowałem wszystko co sie da</p>";
    } else {
        echo "Złe hasło lub nazwa";
    }
    }
    echo "
    </div>

</body>
</html>
";
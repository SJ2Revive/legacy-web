<?php

function rendertab()
{
    printf("
    <ul>
    <li><a href='/'>Strona Główna</a></li>
    <li><a href='/faq.php'>FAQ</a></li>
    <li><a href='/launcher.php'>Launcher</a></li>
    <li><a href='/modyfikacje.php'>Modyfikacje</a></li>
    <li><a href='/patch.php'>Oficjalne aktualizacje</a></li>
    <li style='float:right !important;'><a href='/logowanie.php?redirect=panel.php'>Panel admina</a></li>
    <li style='float:right !important;'><a href='/settings.php'>Wygląd Strony</a></li>
    
    </ul>
    ");
}
function load_light_css()
{
    printf("@import 'inc/style-light.css'");
}
function load_dark_css()
{
    printf("@import 'inc/style-dark.css'");
}
function loadmods()
{
    include("db.php");
    $sql = "SELECT * FROM Mods";

    $result = $conn->query($sql);

    while($row = mysqli_fetch_array($result)) {
        $id = $row['id'];
        $nazwa = $row['nazwa'];
        $opis = $row['opis'];
        echo "
        <div class=\"mod-div\">
        <img style=\"height:100%;width:100%\" src=\"/img/$id.png\" />
        <a href=\"/getmod.php?id=$id\">$nazwa</a>
        <p>$opis</p>
        </div>    ";
    }
    mysqli_close($conn);
}
function rendermod()
{
    include("db.php");
    $idurl = $_GET['id'];
    $sql = "SELECT * FROM Mods WHERE id=?";

    $stmt = $conn->prepare($sql);
    mysqli_stmt_bind_param($stmt, "s", $idurl);
    $stmt->execute();
    $result = $stmt->get_result();
    while($row = mysqli_fetch_array($result)) {
        $id = $row['id'];
        $nazwa = $row['nazwa'];
        $opis = $row['longdesc'];
        $dload = $row['dloadlink'];
        
        echo "
        <div class='mod-present'>
        <div>
        <img style='height:100%;width:100%' src='/img/$id.png' />
        <h1> $nazwa </h1>
        <h2> Opis: </h2>
        <p style='margin-left: 15px;text-align:left;'>
        $opis
        </p>
        <a href='$dload'>
            <button>Pobierz</button>
        </a>
        <br />
        <br />
        </div>
        <br />
        <br />
        </div>";
    }
    mysqli_close($conn);
}
function checktoken($token)
{
    include("db.php");
    if(isset($_COOKIE['tkn']))
    {
        $stmt = $conn->prepare('SELECT * FROM Users WHERE token = ?');
        $stmt->bind_param('s', $_COOKIE['tkn']);
        $stmt->execute();
        $result = $stmt->get_result();
        if($result->num_rows > 0)
        {
            return 1;
        } else {
            return 0;
        }
    } else {
        return 0;
    }
    
}

    
?>
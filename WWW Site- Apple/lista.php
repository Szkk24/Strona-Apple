<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../style.css">

<meta charset="utf-8">

<meta name="description" content="Polska Strona informacyjna o Apple">
    
<meta name="keywords" content="Apple, Polska, IPhone, IPad, MacBook">
    
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    
 <link rel="icon" href="../Graphic/macbook.png" sizes="16x16">
    
    <title>Koszyk zakupów</title>
</head>

    
    
<body>
<header>
    <div class="container">
    
    <img src="../Graphic/logoApple.png" alt="Logo Strony" class="LogoNawigacja">
    
        <article class="tytul">I-Elektron <br> Apple Premium Reseller&copy</article>
        <nav>
            <ul>
            <li><a href="../index.html">Strona Główna</a></li>
            <li><a href="akcesoria.html">Akcesoria</a></li>
            <li><a href="regulamin.html">Regulamin</a></li>
            <li><a href="koszyk.php"><img src="https://s2.svgbox.net/hero-solid.svg?ic=shopping-cart&color=000" width="25" height="25"></a></li>
            </ul>
        </nav>
        
    </div>
</header>

<p>Lista artykułów</b></p>
<?php
    if (isset($_POST['lista'])) {
        if(!empty($_SESSION['koszyk'])){
            $koszyk = array_unique (
            array_merge(
            unserialize($_SESSION['koszyk']),
                $_POST['lista']
            )
            );
            $_SESSION['koszyk'] = serialize($koszyk);
        } else {
            $_SESSION['koszyk'] = serialize($_POST['lista']);
        }
        echo "<p>Wybrane produkty zostały umieszczone w koszyku</p>";
        }
        ?>
    <form action="lista.php" method="post">
    <p>Wybór produktów: </p>
        <p>
        <select name="lista[]" multiple="multiple" size = "9">
            <option value="iphone11">Iphone 11</option>
            <option value="macbook">Macbook Pro 16</option>
            <option value="applewatch">Apple Watch 6</option>
        </select><p>
        <p>Wybierz produkty, trzymajac wcisniety klawisz Ctrl.</p>
        <p><input type="submit" value="Wyslij"></p>
        </form>
    <p><a href="koszyk.php">Przejdz do koszyka</a></p>

</body>
</html>
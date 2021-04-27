<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../style.css">

<meta charset="utf-8">

<meta name="description" content="Polska Strona informacyjna o Apple">
    
<meta name="keywords" content="Apple, Polska, IPhone, IPad, MacBook">
    
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    
 <link rel="icon" href="../Graphic/macbook.png" sizes="16x16">
    
    <title>Akcesoria</title>
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
            <li><a href="koszyk.html"><img src="https://s2.svgbox.net/hero-solid.svg?ic=shopping-cart&color=000" width="25" height="25"></a></li>
            </ul>
        </nav>
        
    </div>
</header>
    
    <from action="lista.php" method="post">
    <p>Wybór produktów</p>
        <p>
        <select name="lista[]" multiple="multiple" size = "9">
            <option value="iphone11">Iphone 11</option>
            <option value="macbook">Macbook Pro 16</option>
            <option value="applewatch">Apple Watch 6</option>
            </select><p>
          <p input type="submit" value="Wyslij>"></p>
        </from>
    <p><a href="koszyk.php">Przejdz do koszyka</a></p>

</body>
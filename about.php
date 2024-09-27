<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--link css-->
    <link rel="stylesheet" href="css/style.css">
    
    <title>Badwords-about</title>
</head>
<body>
    <header>
        <div class="container">
            <h1>Badwords</h1>
        </div>
    </header>
    <main>
        <div>
            <p>Testo Inserito:</p>
            <p>
                <?php 
                    echo $_GET['paragraph']; 
                ?>
            </p>
        </div>
        <hr>
        <div>
            <p>Lunghezza Testo Inserito:</p>
            <p>
                <?php
                    echo strlen($_GET['paragraph']);
                ?>
            </p>
        </div>
        <hr>
        <div>
            <p>Paragrafo con testo censurato:</p>
            <p>
                <?php 
                    $censoredPar = str_replace($_GET['badWord'], '***', $_GET['paragraph']);
                    echo $censoredPar;
                ?>
            </p>
        </div>
        <hr>

        <hr>
        <div class="container">
            <a href="./index.php">Torna alla home</a>
        </div>
    </main>
    <!--link js-->
    <script type="text/javascript" src="js/script.js"></script>
</body>
</html>
<?php
    $paragraph = '';
    $baWord = '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--link css-->
    <link rel="stylesheet" href="css/style.css">
    
    <title>Badwords</title>
</head>
<body>
    <header>
        <div class="container">
            <h1>Badwords</h1>
        </div>
    </header>
    <main>
        <div class="container">
            <form action="./about.php" method="GET">
                <div>
                    <div>                        
                        <label for="badWord">
                            testo:
                        </label>
                    </div>
                    <div>                        
                        <input
                        id="paragraph"
                        name="paragraph"
                        type="text"
                        placeholder="inserisci testo..."
                        value="<?php echo $paragraph; ?>">
                    </div>
                </div>
                <div>
                    <div>                        
                        <label for="badWord">
                            Parola da censurare:
                        </label>
                    </div>
                    <div>                        
                        <input
                        id="badWord"
                        name="badWord"
                        type="text"
                        placeholder="parola da censurare"
                        value="<?php echo $badWord; ?>">
                    </div>
                </div>
                <div>
                    <button type="submit">
                        Invia
                    </button>
                </div>
            </form>
        </div>
    </main>
    <!--link js-->
    <script type="text/javascript" src="js/script.js"></script>
</body>
</html>
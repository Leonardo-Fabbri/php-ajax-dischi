<?php 
 include __DIR__."./partials/database.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>
    <!-- Stampiamo i dischi solo con l’utilizzo di PHP, che stampa direttamente i dischi in pagina:
    al caricamento della pagina ci saranno tutti i dischi. -->
    <div class="contenitore">
        <header>
            <div id="logo">
                <img src="./img/logo-small.svg" alt="">
            </div>
        </header>

        <main class="contenitore_dischi"> 
           <div class="contenitore">
                <?php foreach ($database as $disco) { ?>
                    <div class="disco"> 
                        <img src= "<?php echo $disco['poster']?>" alt="">
                        <h2><?php echo $disco['title']?></h2>
                        <h3><?php echo $disco['author']?></h3>
                        <p><?php echo $disco['year']?></p>
                    </div>       
                <?php } ?>
            </div>
        
        </main>
    </div>
    
</body>
</html>
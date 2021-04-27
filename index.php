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
    <div  id="app"class="container">
        <header>
            <div id="logo">
                <img src="./img/logo-small.svg" alt="">
            </div>
        </header>
        <main class="contenitore_dischi"> 
        <?php
            $database = [
                [
                    'title' => 'New Jersey',
                    'author' => 'Bon Jovi',
                    'year' => 1988,
                    'poster' => 'https://images-na.ssl-images-amazon.com/images/I/51sBr4IWDwL.jpg'
                ],
                [
                    'title' => 'Live at Wembley 86',
                    'author' => 'Queen',
                    'year' => 1992,
                    'poster' => 'https://images-na.ssl-images-amazon.com/images/I/71g40mlbinL._SX355_.jpg'
                ],
                [
                    'title' => 'Ten\'s Summoner\'s Tales',
                    'author' => 'Sting',
                    'year' => 1993,
                    'poster' => 'https://images-na.ssl-images-amazon.com/images/I/411BQR6BHRL.jpg'
                ],
                [
                    'title' => 'Steve Gadd band',
                    'author' => 'Steve Gadd Band',
                    'year' => 2018,
                    'poster' => 'https://m.media-amazon.com/images/I/81UtLzBDoEL._SS500_.jpg'
                ],
                [
                    'title' => 'Brave new World',
                    'author' => 'Iron Maiden',
                    'year' => 2000,
                    'poster' => 'https://img.ibs.it/images/0190295567620_0_0_0_75.jpg'
                ],
                [
                    'title' => 'One more car, one more rider',
                    'author' => 'Eric Clapton',
                    'year' => 2002,
                    'poster' => 'https://images-na.ssl-images-amazon.com/images/I/81MDAIdh78L._SY355_.jpg'
                ]
            ];

            foreach ($database as $element) {
                echo "<h2>$element[title]</h2>";
                echo "<p>$element[author]</p>";
                echo "<p>$element[year]</p>";
                echo "img src="".[poster];
        
            };

        
    
        ?>
        
            
            
           

                

            
           
        </main>
        
        

    </div>
</body>
</html>
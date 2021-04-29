
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
</head>
<body>
    <div id="app" class="container">
        <div class="container">
            <header>
                <div id="logo">
                    <img src="./img/logo-small.svg" alt="">
                </div>
            </header>

           <main class="contenitore_dischi"> 
                <div v-for="disco in cds" class="disco">
                    <img :src="disco.poster" alt=""> 
                    <h3>{{disco.title}}</h3>
                    <p>{{disco.author}}</p>
                    <p>{{disco.year}}</p>
                </div>
        
            </main>
    </div>
   
        

        
    </div>
    
   


    <script src="./javascript.js"></script>
</body>
</html>

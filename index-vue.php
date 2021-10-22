<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <title>Document</title>
    </head>
    <body>
        <div id="root">
        <header>
            <img src="spotify-logo.png" alt="" class=" logo m-2">
            <select class="mx-5">   
            <option value="">Tutti i generi</option>
            <option value="pop">Pop</option>
            <option value="rock">Rock</option>
            <option value="jazz">Jazz</option>
            <option value="metal">Metal</option>


            </select>
        </header>


        <main>
            <div class="container my-5"> 
        
    
                    <div class="row row-cols-5">

                                <div v-for ="(disco, index) in dischi" :key="index" class=" text-center">
                                
                                    <div class="container album" >
                                        <img class="py-3 " :src= "disco.poster" alt="disco.title">
                                        <h3>{{disco.title}}</h3>
                                        <div class="text_author">
                                        {{disco.author}}
                                        <div>{{disco.year}}</div>
                                        </div>
                                        </div>
                                    
                                    
                                </div>
                            
                    </div>
                

            </div>
        </main>


        </div>



        <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
<!-- Prima Milestone:
Stampiamo i dischi solo con l’utilizzo di PHP, che stampa direttamente i dischi in pagina: al caricamento della pagina ci saranno tutti i dischi. -->
<?php 
require __DIR__ . "/database.php"

?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header>
            <img src="spotify-logo.png" alt="" class=" logo m-2">
            <form class="mx-5">
            <label for="musical-genre">Choose a Genre:</label>

            </form>
        </header>

        <main>
        <div class="container my-5"> 
    
                
                <div class="row row-cols-5">
                            <?php foreach($database as $disco) {?>
                            <div class=" text-center">
                            
                            <div class="container album" >
                                <img class="py-3 " src= "<?php echo $disco['poster']?>" alt="<?php echo $disco['title']?>">
                                <h3><?php echo $disco['title']?></h3>
                                <div class="text_author">
                                <?php echo $disco['author']?>
                                <div><?php echo $disco['year']?></div>
                                </div>
                                </div>
                                
                                
                            </div>
                            <?php }?>
                        <!-- <div class="col mb-3" v-for= "(elm, index) in musicFiltered" :key="index"> 
                            <Album :info="elm" />
                        </div> -->
                        
                </div>
            

        </div>
        </main>
    </body>
</html>
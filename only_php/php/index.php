<?php

require __DIR__ . '/database.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>
<body>

    <header>
        <div class="img-container">yuyjmyitn
            <img src="../logo.png" alt="spoty logo">
        </div>
    </header>

    <main>

        <div class="container col-8 offset-2 d-flex">

            <div class="row col-4 d-flex">

                <div class="card d-flex">

                    <?php foreach ($database as $item) { ?>

                        <!-- <div class="card"> -->

                            <h3><?php echo $item['title']?></h3> <br>
                            <p><?php echo $item['author']?></p><br> 
                            <p><?php echo $item['year']?></p><br> 
                            <img src="<?php echo $item['poster']?>" alt=""><br> 
                            <p><?php echo $item['genre']?></p><br>
                        
                        <!-- </div> -->

                    <?php } ?>

            
                </div>

        </div>

    </main>


</body>
</html>
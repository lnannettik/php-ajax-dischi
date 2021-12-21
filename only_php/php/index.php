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

    <header class="container-fluid p-3">
        <img class="" src="../logo.png" alt="spoty logo">
    </header>

    <main>

        <div class="container p-3">

            <div class="row">

                <?php foreach ($database as $item) { ?>
                    <div class="col-4">

                        <div class="card-container mb-3 p-3">

                            <img src="<?php echo $item['poster']?>" alt=""><br> 
                            <h3><?php echo $item['title']?></h3> <br>
                            <span class="d-block" ><?php echo $item['author']?></span>
                            <span class="d-block" ><?php echo $item['year']?></span> 
                            <span class="d-block" ><?php echo $item['genre']?></span>
                        
                        </div>
                    </div>
                <?php } ?>

        </div>

    </main>


</body>
</html>
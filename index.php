<?php include 'dischi.php' ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <!-- css -->
        <link rel="stylesheet" href="dist/app.css">
        <!-- fontawesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
        <!-- font -->
        <link rel="preconnect" href="https://fonts.gstatic.com"><link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600&display=swap" rel="stylesheet">
        <title>Dischi - PHP</title>
    </head>
    <body>
        <header>
            <i class="fab fa-napster"></i>
            <h1>Dischi - PHP</h1>
        </header>
        <main>
            <div class="container">
                <div class="container-dischi">
                    <?php foreach ($dischi as $disco) { ?>
                        <div class="card">
                            <img src="<?php echo $disco['poster'] ?>" alt="">
                            <h5 class="title"><?php echo $disco['title'] ?></h5>
                            <p class="author"><?php echo $disco['author'] ?></p>
                            <p class="genre"><?php echo $disco['genre'] ?></p>
                            <p class="year"><?php echo $disco['year'] ?></p>
                        </div>
                <?php } ?>


                </div>
            </div>
        </main>
    </body>
</html>

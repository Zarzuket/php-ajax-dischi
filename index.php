<?php
include __DIR__ . "/db.php";
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <title>PHP-AJAX-DISCHI</title>
    </head>
    <body>
        <?php
        include __DIR__ . "/header.php";
        ?>
        <main>
            <section>
            <?php foreach($database as $data) { ?>
                <div class="card">
                    <div class="container_img">
                        <img src="<?php echo $data['poster']; ?>" alt="">
                    </div>
                    <div class="container_info">
                        <h3 class="title"><?php echo $data['author'] ?></h3>
                        <p><?php echo $data['title'] ?></p>
                        <p><?php echo $data['year'] ?></p>
                    </div>      
                </div>
            <?php } ?>    
            </section>
        </main>
    </body>
</html>
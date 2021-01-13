<?php

include_once("helpers/url.php");


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php $BASE_URL?>styles/styles.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <title>Blog Codar</title>
</head>
<body>
    <?php include_once("templates/header.php");?>
     <main class="main">
      
        <h1>
            <strong>
                Blog Codar - Seu Blog de Programação
            </strong>
        </h1>

        <div class="post-box">

            <?php foreach($posts as $post): ?>
         
                    <div>
                        <h2 class="post_title"> <?=$post['title']?> </h2>
                        <img src="<?=$BASE_URL."img/".$post['img'];?>" />
                        <p><?=$post['description']?></p>
                        <a href="<?= $BASE_URL ?>post.php?id=<?= $post['id'] ?>">Leia Mais</a>
                     
                    </div>

            <?php endforeach; ?>

        </div>

        </div>
             

     </main>

    <?php include_once("templates/footer.php");?>
    
</body>
</html>
<?php

include_once("helpers/url.php");
include_once("templates/header.php");

if(isset($_GET['id'])){

    $postId = $_GET['id'];
    $currentPost;

    foreach($posts as $post){
       
        if($post['id'] == $postId){
            $currentPost = $post;
        }

    }

}

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

    <div class="post">
                <h2 class="post_title"> <?=$currentPost['title']?> </h2>
                <img class="post-img" src="<?=$BASE_URL."img/".$currentPost['img'];?>" />
                <p><?=$currentPost['description']?></p>

                <?php foreach($currentPost['tags'] as $tags): ?>
         
                 <a href="<?= $BASE_URL ?>post.php?id=<?= $post['id'] ?>"><?=$tags?></a>
                
                <?php endforeach; ?>
                     
    </div>

    <?php include_once("templates/footer.php");?>

</body>
</html>
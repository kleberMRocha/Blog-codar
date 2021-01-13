<?Php
include_once('./helpers/url.php');
include_once('./data//categories.php');
include_once('./data/posts.php');
?>

<header class="header">
   <nav>
       <a href="<?Php $BASE_URL?>index.php" id="logo">
            <img src="<?Php $BASE_URL?>img/logo.svg" />
       </a>
       <ul>
           <li><a href="index.php">Home</a></li>
           <li><a href="#">Categorias</a></li>
           <li><a href="#">Sobre</a></li>
           <li><a href="contato.php">Contato</a></li>
       </ul>
   </nav>
</header>
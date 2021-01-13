<?Php
include_once('./helpers/url.php');
include_once('./data//categories.php');
include_once('./data/posts.php');
?>


<header class="header">
   <nav >
       <a href="<?Php $BASE_URL?>index.php" id="logo">
            <img class="logo" src="<?Php $BASE_URL?>img/logo.svg" />
       </a>
       <button id="toggler">
           <img src="<?Php $BASE_URL?>img/menu.png" />
        </button>
       <ul id="menu">
           <li><a href="index.php">Home</a></li>
           <li><a href="#">Categorias</a></li>
           <li><a href="#">Sobre</a></li>
           <li><a href="contato.php">Contato</a></li>
       </ul>
   </nav>
</header>

<script>

    const nav = document.querySelector('#menu');
    const toggler = document.querySelector('#toggler');
    let trogled = false;

    toggler.addEventListener('click', () => {

       if(!trogled){
        nav.style = "display:block";
        trogled = true;
        return;
       }
    
       nav.style = "display:none" 
       trogled = false;
        
    
    });
    

</script>
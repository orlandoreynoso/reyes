<div class="facebook">
    <h1 class="titulo">Síguenos</h1>
    <?php// dynamic_sidebar('facebook'); ?>
    <?php include (TEMPLATEPATH.'/libs/facebook.php') ?>
</div>  
<div class="friends">
    <h1 class="titulo">Enlaces de interes</h1>
    <?php // dynamic_sidebar('friends'); ?>
    <?php include TEMPLATEPATH.'/libs/friends.php' ?>
</div> 
<div class="friends">
    <h1 class="titulo">Entradas recientes</h1>
    <div id="recientes">
        <?php ultimas_paginas(); ?>
    </div>
    <?php // dynamic_sidebar('friends'); ?>
    <?php include TEMPLATEPATH.'/libs/anuncios.php' ?>                    
</div>  
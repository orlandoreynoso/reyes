
<div id="titulo">
	<div class="mapeo"><?php the_breadcrumb(); ?></div>
</div>    

<div id="descripcion_categoria">
<div id="name_cat">
<!-- span>&nbsp;</span -->
<!-- a class="cat"><?php the_category (); ?></a -->
</div>    
<div id="fecha">
<span class="icon">&raquo;</span>    
<span class="date"><?php the_time('j F, Y'); ?></span>  
</div>
</div>

<div id="m-page-home">


    <?php if (is_page(6)): ?>
    <?php include TEMPLATEPATH.'/template/pagefoto.php'; ?>        
    <?php else: ?>
    <?php include TEMPLATEPATH.'/template/pageall.php' ?>
    <?php endif ?>

</div>                 

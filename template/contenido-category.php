<article  id="contenido" class="grid">
  <div class="mapeo"><?php the_breadcrumb(); ?></div>

  <div id="descripcion_categoria">
    <div id="name_cat">
      <span>Categoria</span>
      <span>&raquo;</span>
      <span class="cat"><?php the_category (', '); ?></span>      
    </div>
    <!-- div id="fecha">
      <span class="icon">&raquo;</span>    
      <span class="date"><?php  //the_time('j F, Y'); ?></span>  
    </div -->
  </div>

    <?php // echo  'estoy en category';      ?>
  <div id="m-entradas-home">

  <!-- *********************************** -->      
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <article class="post resume">
    <div class="post-title">
      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <!-- div class="meta">
        <span class="label-cat"> Categoría </span> 
        <span class="icon-cat"> &raquo <?php // the_category(', '); ?> </span> 
        <span class="label-fecha"><?php // the_time(get_option('date_format')); ?></span> 
      </div -->
    </div><!-- /header -->
    <div class="cont-all">
      <div class="linkit"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a></div>                     
      <div class="the-content"><?php the_excerpt();  ?></div>
      <!-- div class="continuar-read"><a href="<?php the_permalink(); ?>" class="readmore"><?php // _e('Continuar leyendo &rarr;','apk'); ?></a></div -->
    </div>  
  </article>
  <?php endwhile; ?>
  <div class="pagination">
  <span class="in-left"><?php next_posts_link('« Entradas antiguas'); ?></span>
  <span class="in-right"><?php previous_posts_link('Entradas más recientes »'); ?></span>
  </div>
  <?php else : ?>
  <p><?php _e('Ups!, no hay entradas.'); ?></p>
  <?php endif; ?>
  <!-- **************************************** -->                  
  </div>

</article>

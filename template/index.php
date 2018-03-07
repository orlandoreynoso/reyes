

    <div id="m-entradas-home">
    <?php if (have_posts()): while(have_posts()): the_post();  ?>
    <article class="post resume">
      <div class="post-title">
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        
        <div class="meta">
          <span class="label-cat"> Categoría </span> 
          <span class="icon-cat"> &raquo <?php the_category(', '); ?> </span> 
          <span class="label-fecha"><?php the_time(get_option('date_format')); ?></span> 
          </div>
      </div><!-- /header -->
      <div class="cont-all">
        <div class="linkit"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a></div>                     
        <div class="the-content"><?php the_excerpt();  ?></div>
        <div class="continuar-read"><a href="<?php the_permalink(); ?>" class="readmore"><?php _e('Continuar leyendo &rarr;','apk'); ?></a></div>
      </div>  
    </article>
    <?php endwhile; ?>
        <div class="navigation"><?php if(function_exists('pagenavi')) { pagenavi(); } ?></div>
    <?php else: ?>
    <article class="post resume">
      <div class="post-title">
        <h2><?php _e('No hay contenidos disponibles','apk' ) ?></h2>
      </div>
      <div class="post-content">
        <p><?php _e('No hay contenidos que correspondan con esta pagina, por favor revizar la busqueda para encontrar lo que desea','apk' ) ?></p>
        <?php get_search_form(); ?>
      </div>
    </article>
    <?php endif; ?>
</div>
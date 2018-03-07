
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

                <div id="m-page-home">

                        <?php // echo 'Single' ?>                        
          <?php

          while ( have_posts() ) : the_post();
          //          get_template_part( 'content', 'page' );
          the_content();           
          endwhile;

          ?>
          <?php // comments_template(); ?>
          <!-- address>Por <?php the_author_posts_link() ?></address -->


          </div>                 

</article>          
                


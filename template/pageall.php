 
<?php // echo 'PAGE all'; ?>
<?php

while ( have_posts() ) : the_post();
//          get_template_part( 'content', 'page' );
the_content();           
endwhile;

?>
<?php // comments_template(); ?>
<!-- address>Por <?php the_author_posts_link() ?></address -->


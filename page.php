<?php get_header(); ?>
    <div class="container">
      <div class="row">
        <div class="col-sm-12 blog-main">
        <?php
            if ( have_posts() ) : while ( have_posts() ) : the_post();

                get_template_part( 'content', get_post_format() );

            endwhile; endif;
        ?>
        </div><!-- /.blog-main -->
      </div><!-- /.row -->
    </div><!-- /.container -->
<?php get_footer(); ?>
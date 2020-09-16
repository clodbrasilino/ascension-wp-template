<?php get_header(); ?>
    <div class="container">
      <div class="row">
        <div class="col-sm-8 blog-main">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <!-- contents of the loop -->
            <?php endwhile; endif; ?>
        </div><!-- /.blog-main -->
        <?php get_sidebar(); ?>
      </div><!-- /.row -->
    </div><!-- /.container -->
    <?php get_footer(); ?>
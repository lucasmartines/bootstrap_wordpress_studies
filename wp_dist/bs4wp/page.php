<?php get_header(); ?>

      <section class="row ">
        <main class="col-md-8 col-sm-12">

          <?php if(have_posts()) : while(have_posts()): the_post(); ?>
            <h3 class="mb-3  "> <?php the_title() ?></h3>
            <?php the_content() ?>
          <?php endwhile;?>
          
          <?php get_404_template(); endif ?>
        </main><!-- ./col-8 --> 
          <?php get_sidebar() ?>
      </section><!-- ./section ./row -->
    
    </div>

<?php get_footer() ?>
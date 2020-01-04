<?php get_header(); ?>

      <section class="row ">
        <main class="col-md-8 col-sm-12">
          <?php if(have_posts()) : while(have_posts()): the_post(); ?>
              <?php get_template_part( 'content' ); ?>
          <?php endwhile; ?>
          <div class="blog-pagination mb-5">
            <?php next_posts_link('Mais Antigos') ?>
            <?php previous_posts_link('Mais Novos') ?>
         </div>
          <?php else: get_404_template(); ?>

          <?php endif; ?>
        </main><!-- ./col-8 --> 
          <?php get_sidebar() ?>
      </section><!-- ./section ./row -->
    
    </div>

<?php get_footer() ?>
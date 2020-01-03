<?php get_header(); ?>

      <section class="row ">
        <main class="col-md-8 col-sm-12">
          <?php if(have_posts()) : while(have_posts()): the_post(); ?>
           <?php the_post_thumbnail('post-thumbnail',['class'=>'img-fluid rounded']) ?>
            <h3 class="mb-3 mt-4 pt-2 pb-2 border-bottom"> <?php the_title() ?></h3>
            
            <?php the_content() ?>
            <p class="text-muted"> Publicado em <span class="badge-my-color-2 rounded" style="padding:0 2px">  <?php echo get_the_date('d/m/y') ?> </span>    </p>  
            
            <hr>

            <?php comments_template( ) ; ?>
          <?php endwhile; ?>
          
          <?php else: get_404_template(); ?>
         


          <?php endif; ?>
        </main><!-- ./col-8 --> 
          <?php get_sidebar() ?>
      </section><!-- ./section ./row -->
    
    </div>

<?php get_footer() ?>
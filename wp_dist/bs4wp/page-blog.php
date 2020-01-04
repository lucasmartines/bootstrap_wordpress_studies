<?php 
/*Template Name: Blog Page*/
get_header(); ?>

<?php 
$my_args = array(  
  'post_type'      => 'post',
  'posts_per_page' => 3,
  'category_name'  => 'destaque'
);

$my_query = new WP_Query($my_args);

?>
<section class="front-page-principal row mb-4 ">

  <?php if( $my_query->have_posts()): while($my_query->have_posts()): $my_query->the_post() ?>
  <article class="col-sm-12 col-md-4">
    <div class="card">
      <?php the_post_thumbnail( 'post-thumbnail', [ 'class'=> 'img-fluid card-img-top'] ); ?>
      
      <div class="card-body">
        <h5 class="card-title">
          <?php the_title() ?>
        </h5>
        <a href="<?php the_permalink(); ?>" class="btn btn-my-color-5">Ler Mais</a>
      </div>
    </div>
  </article> <?php endwhile; ?> 
</section> <?php endif ?>

<?php wp_reset_query();
$my_args = array(  
  'post_type'      => 'post',
  'posts_per_page' => 3,
);

$my_query = new WP_Query($my_args);
 ?>


<section class="row ">
  <main class="col-md-8 col-sm-12">
    <?php if($my_query->have_posts()) : while($my_query->have_posts()): $my_query->the_post(); ?>
       <?php get_template_part( 'content' , get_post_format( ) ); ?>
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
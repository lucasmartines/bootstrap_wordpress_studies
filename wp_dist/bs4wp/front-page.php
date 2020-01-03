<?php get_header(); ?>

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
<?php wp_reset_query(); ?>


<section class="row ">
  <main class="col-md-8 col-sm-12">
    <?php if(have_posts()) : while(have_posts()): the_post(); ?>
    <div class="blog-post">
      <h3 class="mb-3 pb-2 border-bottom"> <a href="<?php the_permalink() ?>"> <?php the_title() ?> </a></h3>
      <div class="row">
        <div class="col-md-12 col-lg-6 mb-3">
          <a href="#">
            <?php the_post_thumbnail('post-thumbnail',['class'=>'img-fluid']) ?>
          </a>
        </div>
        <div class="col-md-12 col-lg-6 mb-3">
           <?php the_excerpt() ?>
        </div>
    
       
      </div>
       <p class="text-muted"> Publicado em <span class="badge-my-color-2 rounded" style="padding:0 2px">  <?php echo get_the_date('d/m/y') ?> </span>    </p>  
    </div><!-- ./blog-post -->
   
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
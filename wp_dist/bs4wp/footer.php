    <footer class="w-100 bg-secondary border-top border-dark mt-5">
      <div class="container">
        <div class="row text-white">
          <div class="col py-5 text-center">
            <h5><?php echo get_theme_mod('footer_title','Meu Primeiro Tema de Wordpress') ?></h5>
            <p class="mb-0"><?php echo get_theme_mod('footer_text','Feito por mim com muita dedicação e esforço') ?></p>
          </div>
        </div>
      </div>
    </footer>


    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php bloginfo('template_url') ?>/js/jquery.min.js"  ></script>
    <script src="<?php bloginfo('template_url') ?>/js/popper.min.js" ></script>
    <script src="<?php bloginfo('template_url') ?>/js/bootstrap.min.js" ></script>
        <?php wp_footer() ?>
  </body>
</html>
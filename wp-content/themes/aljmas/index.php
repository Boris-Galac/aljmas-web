<?php get_header() ?>
<main class="main događaji-main">
      <div class="container">
        <div class="događaji pt-section">
        <a href="<?php echo site_url('') ?>" class="back-btn"><img src="/wp-content/themes/aljmas/src/assets/icons/btn-left.svg" aria-hidden="true"> Povratak na naslovnu stranicu</a>
          <div class="događaji__header-wrapper">
            <h1 class="događaji__heading mb-64">Najava događaja</h1>
          </div>
          <div class="događaji__body-wrapper ">
            <div class="događaji-article__wrapper col">
                <?php
                     $args = array(
                        'post_type'=> 'post',
                       );
                       $the_query = new WP_Query($args);
                    if($the_query->have_posts()){
                    while( $the_query->have_posts()){
                        $the_query->the_post();
                    get_template_part('template-parts/content', 'najava-card');
                    }
                }
                ?>
            </div>
          </div>
      </div>
    </main>
<?php get_footer() ?>
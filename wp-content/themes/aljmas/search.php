<?php get_header() ?>
<main class="main događaji-main">
      <div class="container">
        <div class="događaji pt-section">
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
              if(have_posts()){
                while(have_posts()){
                  the_post();
                  get_template_part('template-parts/content', 'najava-card');
                }
              }else{
                echo "<h2 class='h2--heading grid-center mt-8'>Nema traženih rezultata...</h2>";
              }
              ?>
            </div>
          </div>
      </div>
    </main>
<?php get_footer() ?>
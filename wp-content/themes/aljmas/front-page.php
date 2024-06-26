<?php get_header() ?>
<main class="main home">
    <!-- hero section -->
    <section class="hero second-image">
        <div class="hero__headline-msg">
            <div class="row">
                <figure class="logo-wrapper">
                    <img src="/wp-content/themes/aljmas/src/assets/icons/logo-aljmas.svg" class="hero__logo"
                        alt="logo aljmas" />
                </figure>
                <div class="overflow-wrapper">
                    <h1 class="hero__haadline hero__haadline--animation">
                        <strong>Svetište</strong> Gospe od Utočišta u Aljmašu
                    </h1>
                </div>
            </div>
            <div class="hero-subheadline-wrapper">
                <p class="hero__subhaadline--animation">
                    Dobro došli na mrežne stranice svetišta Gospe od Utočišta u Aljmašu
                </p>
                <!-- <div class="hero-line"></div> -->
                <img class="ornament" src="wp-content/themes/aljmas/src/assets/images/ornament.png" aria-hidden="true">
            </div>
            <!-- <a href="#zupnik" class="hero-cta">Vidi više</a> -->
        </div>
        <a href="#najave" class="scroll-down-btn"><img
                src="wp-content/themes/aljmas/src/assets/icons/scroll-down-icon.svg"
                aria-label="scroll down button"></a>
        <a aria-label="facebook link" class="fb-btn" target="_blank"
            href="https://www.facebook.com/profile.php?id=100085318912280"><img
                src="wp-content/themes/aljmas/src/assets/icons/fb-icon.svg" aria-hidden="true">Posjetite nas i na
            Facebooku</a>
    </section>
    <!-- najava događanja section -->
    <section class="najave" id="najave">
        <div class="container">
            <div class="najave__headline">
                <h2 class="h2--heading mb-16">Najave događanja</h2>
            </div>
            <?php
                     $args = array(
                        'post_type'=> 'post',
                        'post_status'=>'publish',
                        'posts_per_page'=>'1',
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
        <a href="<?php echo site_url('blog') ?>" class="see-more">
            <span>Pogledaj ostale objave</span>
            <img src="wp-content/themes/aljmas/src/assets/icons/arrow-right-icon.svg" aria-hidden="true" />
        </a>
    </section>
    <!-- zupnik section -->
    <section class="zupnik" id="zupnik">
        <div class="container">
            <div class="zupnik__headline mb-64">
                <h2 class="h2--heading zupnik__heading">vlč. dr. Tomislav Ćurić</h2>
                <p class="zupnik__subheading">župnik i upravitelj svetišta</p>
            </div>
            <div class="zupnik__wrapper">
                <div class="zupnik__profile-img hidden-left">
                    <img src="/wp-content/themes/aljmas/src/assets/images/zupnik-img.png" alt="vlc. Tomislav Curic" />
                </div>
                <p class="zupnik__paragraph hidden-right">
                    Vlč. dr. Tomislav Ćurić rođen je 1980. u Osijeku. Za svećenika Đakovačko-osječke nadbiskupije
                    zaređen je 2005. u Đakovu. Najveći dio dosadašnje
                    svećeničke službe proveo je kao prvi župnik Župe bl. Alojzija Stepinca u
                    Slavonskom Brodu. Za aljmaškog župnika i upravitelja svetišta Gospe od
                    Utočišta imenovan je 30. kolovoza 2022. Uz župničku službu zaposlen je na
                    Filozofskom fakultetu u Osijeku na znanstveno-nastavnom radnom mjestu
                    docenta. Predsjednik je Katedre za povijest umjetnosti istog Fakulteta.
                </p>
            </div>
        </div>
    </section>
    <!-- video section -->
    <section class="video">
        <div class="container">
            <div class="video__headline mb-64">
                <h2 class="h2--heading">Video</h2>
            </div>
            <div>
                <div class="promo-video__main-video">
                    <iframe width="644" height="362" src="https://www.youtube.com/embed/jVc6BTkWchU"
                        title="Svetište Aljmaš - Gospa od Utočišta" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>
                <div class="swiper mySwiper promo-video__inner-wrapper">
                    <div class="swiper-wrapper promo-video__sub-video d-flex
               ">
                        <img data-link="https://www.youtube.com/embed/izpIycS3zlU" class="swiper-slide video-clip"
                            src="/wp-content/themes/aljmas/src/assets/images/thumbnails/7.jpg">
                        <img data-link="https://www.youtube.com/embed/jVc6BTkWchU" class="swiper-slide video-clip"
                            src="/wp-content/themes/aljmas/src/assets/images/thumbnails/6.jpg">
                        <img data-link="https://www.youtube.com/embed/xyNuKhL0NhI" class="swiper-slide video-clip"
                            src="/wp-content/themes/aljmas/src/assets/images/thumbnails/5.jpg">
                        <img data-link="https://www.youtube.com/embed/EsagHKYY4GU" class="swiper-slide video-clip"
                            src="/wp-content/themes/aljmas/src/assets/images/thumbnails/4.jpg">
                        <img data-link="https://www.youtube.com/embed/PEwhAqP3_oY" class="swiper-slide video-clip"
                            src="/wp-content/themes/aljmas/src/assets/images/thumbnails/3.jpg">
                        <img data-link="https://www.youtube.com/embed/DALYvqPxdYU" class="swiper-slide video-clip"
                            src="/wp-content/themes/aljmas/src/assets/images/thumbnails/2.jpg">
                        <img data-link="https://www.youtube.com/embed/oTFnWA1Ev1k" class="swiper-slide video-clip"
                            src="/wp-content/themes/aljmas/src/assets/images/thumbnails/1.jpg">
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
    </section>
    <!-- galerija section -->
    <section class="galerija-section">
        <div class="container">
            <div class="galerija-section__wrapper">
                <div class="galerija-section__headline mb-32">
                    <h2 class="h2--heading">Galerija</h2>
                </div>
                <div class="galerija-section__content">
                    <p class="galerija-section__paragraph mb-32">
                        Dragi posjetitelji, pogledajte našu bogatu galeriju slika
                    </p>
                    <a href="<?php echo site_url('galerija') ?>" class="see-more">
                        <span>Galerija slika</span>
                        <img src="wp-content/themes/aljmas/src/assets/icons/arrow-right-icon.svg" aria-hidden="true" />
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer() ?>
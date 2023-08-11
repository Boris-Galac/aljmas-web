<?php get_header() ?>
<main class="main">
    <div class="container">
        <div class="događaj pt-section">
            <a href="<?php echo site_url('blog') ?>" class="back-btn"><img
                    src="/wp-content/themes/aljmas/src/assets/icons/btn-left.svg" aria-hidden="true"> Povratak na
                najave</a>
            <div class="događaj__header-wrapper">
                <img src="/wp-content/themes/aljmas/src/assets/images/gospa-img-vijest.jpg" alt="događaj__banner-img"
                    class="mb-48">
            </div>
            <div class="događaj__body-wrapper mb-64">
                <div class="događaj-article__wrapper col">
                    <h1 class="događaj__heading mb-48"><?php the_title() ?></h1>
                    <p class="događaj__paragraph">
                        <?php the_content() ?>
                    </p>
                </div>
            </div>
        </div>
</main>
<?php get_footer() ?>
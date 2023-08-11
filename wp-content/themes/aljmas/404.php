<?php get_header() ?>
<main class="main pt-section error-page">
    <div class="container">
        <div class="error__wrapper">
            <img src="/wp-content/themes/aljmas/src/assets/images/error-img.png" alt="error image">
            <h2 class="h2--heading">Stranica nije pronađena!</h2>
            <a href="<?php echo site_url('') ?>" class="back-to-home-btn row" role="button" aria-label="back to home page"><img src="/wp-content/themes/aljmas/src/assets/icons/home-icon.svg" aira-hidden="true"> Vrati se na početnu stranicu</a>
        </div>
    </div>
</main>
<?php get_footer() ?>
<?php get_header() ?>
<main class="main main-galerija">
    <div class="container">
        <div class="galerija pt-section">
            <div class="galerija__header-wrapper">
                <h1 class="h2--heading mb-64">Galerija slika</h1>
                <img src="/wp-content/themes/aljmas/src/assets/images/gallery-img.png" alt="gallery images"
                    class="gallery__img mb-48" />
            </div>
            <div class="galerija__body-wrapper">
                <div class="galerija__tab">
                    <div class="galerija__tab-btns-wrapper mb-90">
                        <button class="galerija__tab-btn" data-active="false" id="album-1">
                            <img class="gallery-icon" src="/wp-content/themes/aljmas/src/assets/icons/gallery-icon.svg"
                                aria-hidden="true">
                            <span class="galerija__tab-span">Album:</span>'Otvorenje Memorijalnog centra Aljmaš' <img
                                class="close-tab-icon"
                                src="/wp-content/themes/aljmas/src/assets/icons/close-tab-icon.svg" aria-hidden="true">
                        </button>
                        <button class="galerija__tab-btn" data-active="false" id="album-2">
                            <img class="gallery-icon" src="/wp-content/themes/aljmas/src/assets/icons/gallery-icon.svg"
                                aria-hidden="true">
                            <span class="galerija__tab-span">Album:</span>'Aljmaš i hodočasnici' <img
                                class="close-tab-icon"
                                src="/wp-content/themes/aljmas/src/assets/icons/close-tab-icon.svg" aria-hidden="true">
                        </button>
                        <button class="galerija__tab-btn" data-active="false" id="album-3">
                            <img class="gallery-icon" src="/wp-content/themes/aljmas/src/assets/icons/gallery-icon.svg"
                                aria-hidden="true">
                            <span class="galerija__tab-span">Album:</span>'Velika Gospa u Aljmašu' <img
                                class="close-tab-icon"
                                src="/wp-content/themes/aljmas/src/assets/icons/close-tab-icon.svg" aria-hidden="true">
                        </button>
                        <button class="galerija__tab-btn" data-active="false" id="album-4">
                            <img class="gallery-icon" src="/wp-content/themes/aljmas/src/assets/icons/gallery-icon.svg"
                                aria-hidden="true">
                            <span class="galerija__tab-span">Album:</span>'Nuncij Giorgio Lingua u Aljmašu 2023.' <img
                                class="close-tab-icon"
                                src="/wp-content/themes/aljmas/src/assets/icons/close-tab-icon.svg" aria-hidden="true">
                        </button>
                    </div>
                    <div class="galerija__tab-content" data-visible="false">


                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer() ?>

        <!-- search form -->
        <?php get_search_form() ?>
    <!-- overlay -->
    <div class="overlay" aria-hidden="true"></div>
    <!-- back to top -->
    <button class="back-to-top-btn" data-visible="false">
      <img src="/wp-content/themes/aljmas/src/assets/icons/up-icon.svg" aira-hidden="true">
    </button>
<footer class="footer">
      <div class="footer__wrapper">
        <figure class="footer__logo">
          <img src="/wp-content/themes/aljmas/src/assets/icons/logo-aljmas.svg" alt="footer logo" />
        </figure>
        <ul class="footer__list">
          <li class="footer__item">
            <img src="/wp-content/themes/aljmas/src/assets/icons/home-icon.svg" aria-hidden="true" /><a
              class="footer__link"
              href="#"
              >Naslovna</a
            >
          </li>
          <li class="footer__item">
            <a class="footer__link" href="<?php echo site_url('povijest-svetista') ?>">Povijest svetišta</a>
          </li>
          <li class="footer__item">
            <a class="footer__link" href="<?php echo site_url('memorijalni-centar') ?>">Memorijalni centar</a>
          </li>
          <li class="footer__item">
            <a class="footer__link" href="<?php echo site_url('prigodno') ?>">Prigodno</a>
          </li>
          <li class="footer__item">
            <a class="footer__link" href="<?php echo site_url('gospa-pod-lipom') ?>">Gospa pod Lipom</a>
          </li>
          <li class="footer__item">
            <a class="footer__link" href="<?php echo site_url('kalvarija') ?>">Kalvarija</a>
          </li>
          <li class="footer__item">
            <a class="footer__link" href="<?php echo site_url('kafeterija') ?>">Kafeterija</a>
          </li>
          <li class="footer__item">
            <a class="footer__link" href="<?php echo site_url('suvenirnica') ?>">Suvenirnica</a>
          </li>
          <li class="footer__item">
            <a class="footer__link" href="<?php echo site_url('galerija') ?>">Galerija</a>
          </li>
        </ul>
        <ul class="footer__list footer--last-row">
          <li class="footer__item ">
            <a href="https://www.google.com/maps/place/Trg+Bra%C4%87e+Radi%C4%87,+31205,+Aljma%C5%A1/@45.5298019,18.9389047,15z/data=!4m10!1m2!2m1!1zVHJnIEJyYcSHZSBSYWRpxIdhIDM5LCAzMTIwNSBBbGptYcWh!3m6!1s0x475c9545782db325:0xd5b26b09150719ce!8m2!3d45.5298785!4d18.9493977!15sCiRUcmcgQnJhxIdlIFJhZGnEh2EgMzksIDMxMjA1IEFsam1hxaGSAQVyb3V0ZeABAA!16s%2Fg%2F11hzxjr1_v?authuser=0&entry=ttu" target="_blank" class="footer__item--google-map">

              <img
                src="/wp-content/themes/aljmas/src/assets/icons/location-icon.svg"
                aria-hidden="true"
              />Župa Pohođenja Blažene Djevice Marije, Trg Braće Radića 39, 31205 Aljmaš

            </a>

          </li>
          <li class="footer__item">
            <img src="/wp-content/themes/aljmas/src/assets/icons/email-icon.svg" aria-hidden="true" /><a
              href="mailto:svetiste.aljmas1508@gmail.com"
              >svetiste.aljmas1508@gmail.com</a
            >
          </li>
          <li class="footer__item">
            <img src="/wp-content/themes/aljmas/src/assets/icons/phone-icon.svg" aria-hidden="true" /><a
              href="tel:+385(0)31-595-000"
              >+385(0)31-595-000</a
            >
          </li>
        </ul>
      </div>
      <div class="copyright">
        <h3>
          Copyright © 2023 - All Rights Reserved. Website kreirao i uredio:
          <a href="https://www.boris-galac.com">Galac-design</a>
        </h3>
      </div>
    </footer>
    <?php wp_footer() ?>
  </body>
</html>
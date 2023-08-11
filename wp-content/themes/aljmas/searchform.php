    <!-- search -->
    <div class="search-form-wrapper" aria-hidden="true">
      <form class="search-form" title="Search" method="get" action="<?php echo home_url() ?>">
        <input
          class="search-form__input p-1"
          type="search"
          name="s"
          id="search"
          placeholder="Pretraži..."
          value="<?php echo get_search_query(); ?>"
          required
        />
        <button class="search-form__submit" type="submit">
          <img src="/wp-content/themes/aljmas/src/assets/icons/search-icon.svg" aria-hidden="true" />
        </button>
      </form>
    </div>
<article class="najava hidden-down">
                    <div class="najava__img-wrapper">
                      <!-- <img
                        src="/src/assets/images/najava-img.jpg"
                        alt="najava image"
                        class="najava__img"
                      /> -->
                      <a href="<?php the_permalink() ?>">
                       <?php if(has_post_thumbnail()){ ?>
                        <img src="<?php the_post_thumbnail_url();  ?>" alt="thumbnail image" class="najava__img">
                        <?php }else{ ?>
                          <img src="/wp-content/themes/aljmas/src/assets/images/card-thumbnail.jpg" alt="default generic image" class="najava__img" > 
                          <?php
                        }

                      ?>
                  </a>
                    </div>
                    <div class="najava__body">
                      <div class="col">
                        <h3 class="h3--heading mb-8"><?php the_title() ?></h3>
                        <div class="najava__date">
                          <img
                            src="/wp-content/themes/aljmas/src/assets/icons/date-icon.svg"
                            aria-hidden="true"
                          />
                          <span class="time"><?php the_time('F j, Y') ?></span>
                        </div>
                        <p class="najava__paragraph">
                        <?php 
                    echo wp_trim_words(get_the_content(), 30); 
                  ?>
                        </p>
                        <a href="<?php the_permalink() ?>" class="see-more-btn">Vidi više</a>
                      </div>
                    </div>
                  </article>
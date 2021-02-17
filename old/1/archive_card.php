            <div class="project__wrapper">
              <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <div class="project__card">
                        <?php if ( has_post_thumbnail() ) { ?>
                            <img src="<?php the_post_thumbnail_url('proj_thumb'); ?>" alt="project__img" class="project__img">
                        <?php } ?>
                        <div class="project__describe">
                            <?php the_title(); ?>
                        </div>
                        <div class="project__overlay">
                            <h5 class="project__tittle">
                                <?php the_title(); ?>
                            </h5>
                            <div class="project__square">
                                <?php 
                                  global $wp_query;
                                  $postid = $wp_query->post->ID;
                                  echo get_post_meta($postid, 'price', true);
                                ?>
                            </div>
                            <div class="project__text">
                                <?php the_excerpt(); ?>
                            </div>
                            <a href="<?php the_permalink(); ?>" class="projects__link">
                                Подробнее <img src="<?php bloginfo('template_directory'); ?>/img/page-projects/Arrow_1.png" alt="arrow">
                            </a>
                        </div>
                    </div>
              <?php endwhile; ?>
            <?php endif; ?>
          </div>
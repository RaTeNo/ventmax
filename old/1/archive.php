<?php get_header(); ?>
<section class="projects">
    <div class="container">
        <div class="hedding">
            <div class="hedding-title">Наши проекты</div>
            <p class="hedding-text">
                Уникальные проекты, созданные и реализованные нашей компанией
            </p>
        </div>
        <div class="project">
            <div class="project__tags">
                <div class="projects__tag">
                    <p class="projects__tag_text">
                        #Вентиляция
                    </p>
                    <img src="<?php bloginfo('template_directory'); ?>/img/page-projects/icon.png" alt="" class="projects__tag_img">
                </div>
                <div class="projects__tag">
                    <p class="projects__tag_text">
                        #Увлажнение
                    </p>
                    <img src="<?php bloginfo('template_directory'); ?>/img/page-projects/icon.png" alt="" class="projects__tag_img">
                </div>
                <div class="projects__tag">
                    <img src="<?php bloginfo('template_directory'); ?>/img/page-projects/Vector.png" alt="" class="projects__tag_img">
                    <p class="projects__tag_text">
                        Очистить
                    </p>
                </div>
                <div class="projects__tag projects__filter" id="projects__filter">
                    <img src="<?php bloginfo('template_directory'); ?>/img/page-projects/funnel.png" alt="" class="projects__tag_img">
                    <p class="projects__tag_text">
                        Фильтр
                    </p>
                    <img src="<?php bloginfo('template_directory'); ?>/img/page-projects/Vector2.png" alt="" class="projects__tag_img projects__tag_img-filter">
                    <ul class="projects__list">
	<?php
		if( $terms = get_terms( array( 'taxonomy' => 'custtax', 'orderby' => 'name' ) ) ) : 
  ?>
<?php foreach ( $terms as $term ) : ?>
                        <div class="checkbox">
                            <input type="checkbox" class="checkbox__input" id="<?php echo $term->slug; ?>">
                            <label for="<?php echo $term->slug; ?>" class="checkbox__label">
                                <?php echo $term->name; ?>
                            </label>
                        </div>
<?php endforeach; ?>
<?php endif; ?>
                        <button class="projects__btn">
                            Очистить фильтр
                        </button>
                    </ul>
                </div>
            </div>
<?php /*
<form action="<?php echo site_url() ?>/wp-admin/admin-ajax.php" method="POST" id="filter">
	<?php
		if( $terms = get_terms( array( 'taxonomy' => 'custtax', 'orderby' => 'name' ) ) ) : 
  ?>
                    <ul class="projects__list">
<?php foreach ( $terms as $term ) : ?>
                        <div class="checkbox">
                            <input type="checkbox" class="checkbox__input" id="<?php echo $term->slug; ?>">
                            <label for="<?php echo $term->slug; ?>" class="checkbox__label">
                                <?php echo $term->name; ?>
                            </label>
                        </div>
<?php endforeach; ?>
                        <button class="projects__btn">
                            Очистить фильтр
                        </button>
                    </ul>
<?php endif; ?>
<?php /*
	<button>Apply filter</button>
	
	<input type="hidden" name="action" value="myfilter">
</form>
                </div>
            </div>
<div id="response"></div>
*/ ?>
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
          <div class="container">
              <div class="row">
                  <?php if ( function_exists( 'wp_corenavi' ) ) wp_corenavi(); ?>
              </div>
          </div>
      </div>
   </div>
</section>
<?php get_footer(); ?>

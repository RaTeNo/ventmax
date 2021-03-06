<?php get_header(); ?>
<section class="page-articles">
    <div class="page-heading">
        <div class="hedding">
            <h1 class="hedding-title">
                Поиск
            </h1>
        </div>
    </div>
    <section class="articles__page-content">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-9 order-2 order-lg-1">
                    <div class="articles-list">
                      <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                          <div class="articles-list__item articles-item">
                              <div class="articles-item__inner">
                                  <div class="articles-item__image">
                                      <?php if ( has_post_thumbnail() ) { ?>
                                          <img class="d-sm-block" src="<?php the_post_thumbnail_url('cat_thumb'); ?>" alt="">
                                          <img class="d-block d-sm-none" src="<?php the_post_thumbnail_url('cat_thumb_mob'); ?>" alt="">
                                      <?php } ?>
                                  </div>
                                  <div class="articles-item__content">
                                      <h3 class="articles-item__title">
                                          <?php the_title(); ?>
                                      </h3>
                                      <div class="articles-item__text">
                                          <?php the_excerpt(); ?>
                                      </div>
                                      <div class="articles-item__tags tags">
                                          <?php 
                                            foreach((get_the_category()) as $category) { 
                                              if($category->cat_ID==1) { $catico = 'icon-vent'; }
                                              if($category->cat_ID==7) { $catico = 'icon-kond'; }
                                              if($category->cat_ID==8) { $catico = 'icon-wet'; }
                                              if($category->cat_ID==9) { $catico = 'icon-bass'; }
                                              if($category->cat_ID==10) { $catico = 'icon-proj'; }
                                              if($category->cat_ID==11) { $catico = 'icon-mount'; }
                                              if($category->cat_ID==12) { $catico = 'icon-service'; }
                                              if($category->cat_ID==13) { $catico = 'icon-expertise'; }
                                              echo '<a href="'.get_category_link($category->cat_ID).'" class="tags__link im-font '.$catico.'"><span class="tags__link-desc">'.$category->cat_name.'</span></a>';
                                            } 
                                          ?>
                                      </div>
                                      <a href="<?php the_permalink(); ?>" class="articles-item__btn btn-def-2 btn-def-2--white">
                                          Читать статью
                                      </a>
                                  </div>
                              </div>
                          </div>
                        <?php endwhile; ?>
                      <?php endif; ?>
                    </div>
                </div>
                <?php if (file_exists(TEMPLATEPATH.'/sidebar.php')) {require(TEMPLATEPATH.'/sidebar.php');}; ?>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <?php if ( function_exists( 'wp_corenavi' ) ) wp_corenavi(); ?>
            </div>
        </div>
    </section>
<?php get_footer(); ?>

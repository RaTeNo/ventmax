<?php get_header(); ?>
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
    <?php if(get_field('single_bg')) { ?>
      <section class="article__page-banner page-banner">
          <div class="container">
              <h1 class="article__banner-title">
                <?php the_title(); ?>
              </h1>
              <?php if(get_field('single_subtitle')) { ?>
              <div class="article__banner-subtitle">
                  <?php the_field('single_subtitle'); ?>
              </div>
              <?php } ?>
          </div>
      </section>
      <?php } ?>
      <section class="article__head">
          <div class="container">
              <div class="article__tags tags">
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
          </div>
      </section>
      <section class="article__paragraph paragraph paragrapgh--centered article__paragraph--centered">
          <div class="container">
              <div class="row">

                <div class="col-12 col-lg-10 col-xl-7">
                  <?php if(get_field('single_bg')) {} else { ?>
                    <h2 class="paragraph__title hedding-title">
                        <?php the_title(); ?>
                    </h2>
                  <?php } ?>
                    <div class="paragraph__text entry">
                        <?php the_content(); ?>
                    </div>
                </div>
              </div>
          </div>
      </section>
      <?php if( have_rows('single_r') ): ?>
      <section class="article__paragraph single_paragraph">
        <?php while( have_rows('single_r') ) : the_row(); ?>
        <div class="paragraph">
            <div class="container">
                <div class="row paragraph__inner">
                    <div class="col-12 col-lg-6 paragraph__image">
                        <img class="d-none d-md-block" src="<?php the_sub_field('single_r_i'); ?>" alt="">
                        <img src="<?php the_sub_field('single_r_i'); ?>" alt="" class="d-md-none">
                    </div>
                    <div class="col-12 col-lg-6 paragraph__content">
                        <h2 class="paragraph__title hedding-title">
                            <?php the_sub_field('single_r_tit'); ?>
                        </h2>
                        <div class="paragraph__text">
                            <?php the_sub_field('single_r_t'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
      </section>
      <?php  endif; ?>
    <?php endwhile; ?>
  <?php endif; ?>
<?php get_footer(); ?>
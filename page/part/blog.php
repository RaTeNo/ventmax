<section class="articles-section">
    <div class="container">
        <div class="hedding">
            <div class="hedding-title">Всё о вентиляции</div>
            <div class="hedding-description">Статьи о микроклимате: вентиляция, кондиционирование, увлажнение</div>
        </div>
    </div>  
    <div class="articles-section--panel">
        <div class="container"> 
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
            <div class="articles-slider swiper-container articles-card">
                <div class="swiper-wrapper">
                
                    <?php 
                      $temp_query = $wp_query;
                      query_posts('orderby=rand&showposts=4');
                      while (have_posts()) : the_post();
                    ?>  
                   <div class="swiper-slide bg_wt_n">
                        <a href="<?php the_permalink(); ?>"> <div class="card-item" style="background-image: url(<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url('cat_thumb'); } ?>);">
                            <div class="shell">
                                <div class="card-item-panel-top">
                                    <div class="card-item__title">
                                        <?php the_title(); ?>
                                    </div>
                                </div>
                                <div class="card-item-panel-bottom">
                                    <div class="card-item__description">
                                        <?php 
                                          $letter=' '; 
                                          $title=get_the_excerpt(); 
                                            $initial=strtoupper(mb_substr($title,0,200));
                                          if($initial!=$letter)
                                            {
                                              echo "$initial";
                                              $letter=$initial;
                                            }
                                        ?>
                                    </div>
                                    <div class="card-tags">
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
                                            echo '<a href="'.get_category_link($category->cat_ID).'" class="tags__link im-font '.$catico.'"></a>';
                                          } 
                                        ?>
                                    </div>
                                    <div class="card-item__btn">
                                        <a href="<?php the_permalink(); ?>" class="btn-def"><span>читать</span></a>
                                    </div>
                                </div>
                            </div>
                        </div></a>
                    </div>
                    <?php
                      endwhile;
                      $wp_query = $temp_query;
                      wp_reset_query();
                    ?>
                </div>
            </div>
            <div class="card-nav">
                <a href="/blog" class="link-application">Больше статей о микроклимате</a>
            </div>

        </div>
    </div>
</section>
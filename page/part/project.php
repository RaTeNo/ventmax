<section class="our-projects-section">
    <div class="container">
        <div class="hedding hedding--white-text">
            <div class="hedding-title">Наши проекты</div>
            <div class="hedding-description">Проекты, созданные и реализованные нашей компанией</div>
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        <div class="card-slider swiper-container">
            <div class="swiper-wrapper">
                <?php 
                  $temp_query = $wp_query;
                  query_posts('post_type=custcpt&orderby=rand&showposts=4');
                  while (have_posts()) : the_post();
                ?>  
                <div class="swiper-slide bg_wt_n">
                 <a href="<?php the_permalink(); ?>">   <div class="card-item" style="background-image: url(<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url('proj_thumb'); } ?>);">
                        <div class="shell">
                            <div class="card-item-panel-top">
                                <div class="card-item__title desktop"><?php the_title(); ?> — <?php  global $wp_query; $postid = $wp_query->post->ID; echo get_post_meta($postid, 'price', true); ?>
                                </div>
                                <div class="card-item__title mobile">
                                    <p><?php the_title(); ?> — <?php  global $wp_query; $postid = $wp_query->post->ID; echo get_post_meta($postid, 'price', true); ?></p>
                                </div>
                            </div>
                            <div class="card-item-panel-bottom">
                                <div class="card-item__description">
                                    <?php the_excerpt(); ?>
                                </div>
                                <?php /*
                                <div class="card-tags">
                                    <a href="#" class="tags__link im-font icon-vent"></a>
                                    <a href="#" class="tags__link im-font icon-proj"></a>
                                    <a href="#" class="tags__link im-font icon-mount"></a>
                                </div>
                                */ ?>
                                <div class="card-item__btn">
                                    <a href="<?php the_permalink(); ?>" class="btn-def"><span>читать</span></a>
                                </div>
                            </div>
                        </div>
                    </div> </a>
                </div>
                <?php
                  endwhile;
                  $wp_query = $temp_query;
                  wp_reset_query();
                ?>
            </div>
        </div>
        <div class="card-nav">
            <a data-fancybox="" data-src="#modal-contact-form" href="javascript:;" class="btn-def btn-def--bg-green"><span>оставить заявку</span></a>
            <a class="link-application" href="/projects/">Все проекты компании</a>
        </div>
    </div>
</section>
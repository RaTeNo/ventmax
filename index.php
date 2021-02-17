<?php get_header(); ?>
<section class="article__paragraph paragraph paragrapgh--centered article__paragraph--centered">
    <div class="container">
        <div class="row">
          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
            <div class="col-12 col-lg-10 col-xl-7">
                <h2 class="paragraph__title hedding-title">
                    <?php the_title(); ?>
                </h2>
                <div class="paragraph__text">
                    <?php the_content(); ?>
                </div>
            </div>
            <?php endwhile; ?>
          <?php else : ?>
            <div class="col-12 col-lg-10 col-xl-7">
                <h2 class="paragraph__title hedding-title">
                    404
                </h2>
                <div class="paragraph__text">
                </div>
            </div>
          <?php endif; ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>
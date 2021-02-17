<div class="col-12 col-lg-3 order-1 order-lg-2">
    <div class="articles__side-bar side-bar">
        <div class="side-bar__content">
            <form method="get" id="search form" action="/">
              <label class="side-bar__search">
                <input class="side-bar__search-field" type="search" value="" name="s" id="s">
              </label>
            </form>
            <div class="side-bar__title">
                <span>Рубрики</span>
                <span class="side-bar__show-btn im-font icon-arrow-next d-lg-none"></span>
            </div>
            <ul class="side-bar__list hidden">
                <li class="side-bar__list-item"><a href="/?cat=1" class="side-bar__link">
                    <span class="im-font icon-vent"></span><span>Вентиляция</span>
                </a></li>
                <li class="side-bar__list-item"><a href="/?cat=7" class="side-bar__link">
                    <span class="im-font icon-kond"></span><span>Кондиционирование</span>
                </a></li>
                <li class="side-bar__list-item"><a href="/?cat=8" class="side-bar__link">
                    <span class="im-font icon-wet"></span><span>Увлажнение</span>
                </a></li>
                <li class="side-bar__list-item"><a href="/?cat=9" class="side-bar__link">
                    <span class="im-font icon-bass"></span><span>Бассейны</span>
                </a></li>
                <li class="side-bar__list-item"><a href="/?cat=10" class="side-bar__link">
                    <span class="im-font icon-proj"></span><span>Проект</span>
                </a></li>
                <li class="side-bar__list-item"><a href="/?cat=11" class="side-bar__link">
                    <span class="im-font icon-mount"></span><span>Монтаж</span>
                </a></li>
                <li class="side-bar__list-item"><a href="/?cat=12" class="side-bar__link">
                    <span class="im-font icon-service"></span><span>Сервис</span>
                </a></li>
                <li class="side-bar__list-item"><a href="/?cat=13" class="side-bar__link">
                    <span class="im-font icon-expertise"></span><span>Экспертиза</span>
                </a></li>
            </ul>
            <?php /*
            <div class="side-bar__title">
                <span>Теги</span>
                <span class="side-bar__show-btn im-font icon-arrow-next d-lg-none"></span>
            </div>
            <ul id="Genre-List">
                <?php
                    $tags = get_tags();
                    foreach ( $tags as $tag ) :
                    $tag_link = get_tag_link( $tag->term_id );
                ?>
                <li>
                    <a href='<?php echo $tag_link; ?>' title='<?php echo $tag->name; ?>' class='<?php echo $tag->slug ?>'><?php echo $tag->name ?></a>
                </li>
                <?php
                    endforeach;
                ?>
            </ul>
            */ ?>
        </div>
    </div>
</div>
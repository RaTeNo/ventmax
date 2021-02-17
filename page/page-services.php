<?php
/*
Template Name: Сервис
*/
?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <main class="page-insert">
        <section class="main-banner insert-banner page-services">
            <div class="float-element line-gradient">
                <img src="<?php bloginfo('template_directory'); ?>/img/svg/line-gradient.svg" alt="">
            </div>
            <div class="float-element line-horizontal"></div>
            <div class="float-element line-vertical"></div>

            <div class="container">
                <div class="main-banner__wrapper">
                    <h1 class="main-banner__title">Сервис и техподдержка
                        <br>Ventmax</h1>

                    <div class="main-banner__slogan main-banner__slogan_eng">Напомним о плановом обслуживании,
                        подскажем как управлять системой</div>

                    <ul class="main-banner__list">
                        <li>
                            Гарантийная и постгарантийная поддержка 7 дней в неделю
                        </li>
                        <li>
                            Плановое техническое обслуживание по договору
                        </li>
                        <li>
                            Замеряем уровни CO2 и загрязнения PM2.5
                        </li>
                        <li>
                            Всегда в наличии оригинальные фильтры
                        </li>
                        <li>
                            Гарантия на работу 5 лет
                        </li>
                    </ul>
                    <div class="main-banner__btn">
                        <a data-fancybox data-src="#modal-contact-form" href="javascript:;" class="btn-def btn-def--bg-blue">
                            <span>Оставить заявку</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="maintenance">
            <div class="container">
                <h2 class="danger-title install-tittle">
                    Зачем обслуживать систему?
                </h2>
                <p class="install-text">
                    Система вентиляции или кондиционирования, подобно автомобилю, нуждается в регулярном сервисном
                    обслуживании. Его отсутствие , во первых, сокращает срок работы системы вплоть до 50% от нормальной,
                    а во вторых - представляет серьезную угрозу для здоровья жильцов. В установках и каналах системы
                    начинают развиваться бактерии и плесень, появляется коррозия. Забитые фильтры снижают эффективность
                    вентиляции, пропускают в жилую зону загрязнения и пыльцу с улицы.

                </p>
                <div class="maintenance__wrapper">
                    <div class="maintenance__photo">
                        <img src="<?php bloginfo('template_directory'); ?>/img/page-services/vent-filtry-1.jpg" alt="" class="maintenance__pic">
                        <div class="maintenance__overlay">
                            <span class="maintenance__span">
                                ДО
                            </span>
                        </div>
                    </div>
                    <div class="maintenance__photo">
                        <img src="<?php bloginfo('template_directory'); ?>/img/page-services/vent-filtry-2.jpg" alt="" class="maintenance__pic">
                        <div class="maintenance__overlay">
                            <span class="maintenance__span">
                                ПОСЛЕ
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="install install__services">
            <div class="container">
                <h2 class="danger-title install-tittle">
                    Почему мы?
                </h2>
                <p class="install-text">
                    Сервис и техподдержка Вентмакс - это надежная и точно настроенная система, работающая как
                    швейцарские часы. Мы всегда помним, когда и какие регламентные работы необходимы для вашей системы.
                    Доступны несколько программ обслуживания: разовое, сезонное, ежеквартальное, ежемесячное.

                </p>
                <ul class="danger-list">
                    <li class="danger-item">
                        <img src="<?php bloginfo('template_directory'); ?>/img/page-services/1.jpg" alt="" class="danger-item__image">
                        <div class="danger-overlay">
                            <span class="danger-item__text danger-item__text_install">
                                Работаем быстро и аккуратно, без последствий для вашего интерьера
                            </span>
                        </div>
                    </li>
                    <li class="danger-item">
                        <img src="<?php bloginfo('template_directory'); ?>/img/page-services/2.jpg" alt="" class="danger-item__image">
                        <span class="danger-item__text danger-item__text_install">
                            До 80% проблем устраняем в течении часа через удаленное подключение
                        </span>
                    </li>
                    <li class="danger-item">
                        <img src="<?php bloginfo('template_directory'); ?>/img/page-services/3.jpg" alt="" class="danger-item__image">
                        <span class="danger-item__text danger-item__text_install">
                            Обучаем простому и комфортному управлению системой
                        </span>
                    </li>
                    <li class="danger-item">
                        <img src="<?php bloginfo('template_directory'); ?>/img/page-services/4.jpg" alt="" class="danger-item__image">
                        <span class="danger-item__text danger-item__text_install">
                            Всегда готовы к срочному аварийному выезду
                        </span>
                    </li>
                    <li class="danger-item">
                        <img src="<?php bloginfo('template_directory'); ?>/img/page-services/5.jpg" alt="" class="danger-item__image">
                        <span class="danger-item__text danger-item__text_install">
                            Наши специалисты проходят сертификацию на заводах-производителях оборудования
                        </span>
                    </li>
                    <li class="danger-item">
                        <img src="<?php bloginfo('template_directory'); ?>/img/page-services/6.jpg" alt="" class="danger-item__image">
                        <span class="danger-item__text danger-item__text_install">
                            Мы используем безопасные и эффективные современные чистящие средства
                        </span>
                    </li>
                </ul>
            </div>
        </section>
        <section class="install-video">
            <div class="float-element line-gradient video-line">
                <img src="<?php bloginfo('template_directory'); ?>/img/install/line.png" alt="">
            </div>
            <div class="container">
                <div class="hedding">
                    <div class="hedding-title">Как это происходит</div>
                </div>

                <div id="video-bg" class="video-bg">
                    <video width="100%" height="auto" controls='controls' preload="auto" loop="loop">
                        <source src="<?php bloginfo('template_directory'); ?>/img/install/video/video_Trim_Trim.mp4" type="video/mp4">
                        </source>
                        <source src="bg/daisy-stock-webm-video.webm" type="video/webm">
                        </source>
                    </video>
                </div>
            </div>
        </section>
        <section class="market-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="market-title">наше оборудование на</div>
                        <div class="market-img"><a href="http://ventmax-market.ru/"><img src="<?php bloginfo('template_directory'); ?>/img/svg/logo-white.svg" alt=""></a></div>
                    </div>
                    <div class="col-lg-6">
                        <a href="http://ventmax-market.ru/" class="btn-def btn-def--bg-green"><span>Перейти</span></a>
                    </div>
                </div>
            </div>
        </section>
<?php include('part/blog.php'); ?>
<?php include('part/project.php'); ?>
    </main>
<?php endwhile; endif; ?>
<?php get_footer(); ?>
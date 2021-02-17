<?php
/*
Template Name: монтаж
*/
?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <main class="page-insert page-pool-ventilation">
        <section class="main-banner insert-banner install-banner">
            <div class="float-element line-gradient">
                <img src="<?php bloginfo('template_directory'); ?>/img/svg/line-gradient.svg" alt="">
            </div>
            <div class="float-element line-horizontal"></div>
            <div class="float-element line-vertical"></div>

            <div class="container">
                <div class="main-banner__wrapper">
                    <h1 class="main-banner__title">Профессиональный <br>монтаж</h1>

                    <div class="main-banner__slogan">Грамотный монтаж - 50% успеха</div>

                    <ul class="main-banner__list">
                        <li>
                            Собственные монтажные бригады
                        </li>
                        <li>
                            Сертифицированные специалисты
                        </li>
                        <li>
                            Точное соответствие проекту
                        </li>
                        <li>
                            Чистота на объекте
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
        <section class="install">
            <div class="container">
                <h2 class="danger-title install-tittle">
                    Монтаж VENTMAX
                </h2>
                <p class="install_-text">
                    Это коктейль из профессиональных монтажников, порядочности бригадиров и менеджеров, огромного опыта
                    и базы знаний, накопленных за годы работы. Монтаж вентиляции в доме или квартире имеет много
                    особенностей, поэтому мы уделяем ему особое внимание на всех этапах работы
                </p>
                <ul class="danger-list">
                    <li class="danger-item">
                        <img src="<?php bloginfo('template_directory'); ?>/img/install/17.png" alt="" class="danger-item__image">
                        <span class="danger-item__text danger-item__text_install">
                            Используем только проверенные годами оборудование и материалы
                        </span>
                    </li>
                    <li class="danger-item">
                        <img src="<?php bloginfo('template_directory'); ?>/img/install/2 1563010019.png" alt="" class="danger-item__image">
                        <span class="danger-item__text danger-item__text_install">
                            Тщательно упаковываем воздуховоды перед отправкой на объект
                        </span>
                    </li>
                    <li class="danger-item">
                        <img src="<?php bloginfo('template_directory'); ?>/img/install/3 4.png" alt="" class="danger-item__image">
                        <span class="danger-item__text danger-item__text_install">
                            Только оригинальные крепежные и расходные материалы
                        </span>
                    </li>
                    <li class="danger-item">
                        <img src="<?php bloginfo('template_directory'); ?>/img/install//4 5.png" alt="" class="danger-item__image">
                        <span class="danger-item__text danger-item__text_install">
                            Штатные сертифицированные бригады, укомплектованные профессиональным инструментом HILTI
                        </span>
                    </li>
                    <li class="danger-item">
                        <img src="<?php bloginfo('template_directory'); ?>/img/install/5 36.png" alt="" class="danger-item__image">
                        <span class="danger-item__text danger-item__text_install">
                            Свой автопарк из 15 машин
                        </span>
                    </li>
                    <li class="danger-item">
                        <img src="<?php bloginfo('template_directory'); ?>/img/install/6 760.png" alt="" class="danger-item__image">
                        <span class="danger-item__text danger-item__text_install">
                            Чистота и аккуратность в работе, соблюдение сроков
                        </span>
                    </li>
                    <li class="danger-item">
                        <img src="<?php bloginfo('template_directory'); ?>/img/install/7 2.png" alt="" class="danger-item__image">
                        <span class="danger-item__text danger-item__text_install">
                            Все технологические отверстия и воздуховоды тщательно закрываются во время ремонтных работ
                        </span>
                    </li>
                    <li class="danger-item">
                        <img src="<?php bloginfo('template_directory'); ?>/img/install/8 802.png" alt="" class="danger-item__image">
                        <span class="danger-item__text danger-item__text_install">
                            Ежедневный видео и фотоотчет о выполненной работе
                        </span>
                    </li>
                    <li class="danger-item">
                        <img src="<?php bloginfo('template_directory'); ?>/img/install/9 2.png" alt="" class="danger-item__image">
                        <span class="danger-item__text danger-item__text_install">
                            Технический надзор на всех этапах работ по чек-листу
                        </span>
                    </li>
                </ul>
            </div>
        </section>
        <section class="works">
            <div class="container">
                <div class="hedding">
                    <h2 class="hedding-title">Этапы работы</h2>
                </div>
                <div class="work">
                    <div class="work__row">
                        <div class="work__weeks">
                            2 недели
                        </div>
                        <div class="work__item">
                            1
                        </div>
                        <div class="work__describe">
                            Экспертиза существующего проекта или создание нового.
                            <span class="work__span">
                                2 недели
                            </span>
                        </div>

                    </div>

                    <div class="work__row">
                        <div class="work__weeks">
                            4 недели
                        </div>
                        <div class="work__item">
                            2
                        </div>
                        <div class="work__describe">
                            Заказ и поставка на объект оборудования и материалов.
                            <span class="work__span">
                                4 недели
                            </span>
                        </div>
                    </div>
                    <div class="work__row">
                        <div class="work__weeks work__weeks_active">
                            1-3 месяца
                        </div>
                        <div class="work__item work__item_active">
                            3
                        </div>
                        <div class="work__describe work__describe_active">
                            Первый этап монтажа на этапе черновой отделки. Монтаж сети воздуховодов, приточно-вытяжной
                            установки, опрессовка. Составление чек-листа, проверка всех систем и тестовый пуск.
                            <span class="work__span">
                                1-3 месяца
                            </span>
                        </div>
                    </div>
                    <div class="work__row">
                        <div class="work__weeks work__weeks_active">
                            2-4 недели
                        </div>
                        <div class="work__item work__item_active">
                            4
                        </div>
                        <div class="work__describe work__describe_active">
                            Второй этап монтажа на этапе чистовой отделки. Монтаж вентиляционных решеток, диффузоров,
                            пультов и систем автоматики. Точная настройка системы и пуск в эксплуатацию.
                            <span class="work__span">
                                2-4 недели
                            </span>
                        </div>
                    </div>
                    <div class="work__row">
                        <div class="work__weeks">

                        </div>
                        <div class="work__item">
                            5
                        </div>
                        <div class="work__describe">
                            Заключение договора на сервисное обслуживание

                        </div>
                    </div>
                </div>

            </div>
        </section>
        <section class="information-section find-user information-section_install">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="hedding">
                            <div class="hedding-title hedding-title_install">Мы не приступаем к монтажу по чужому
                                проекту, если:</div>
                        </div>
                        <div class="information-part">

                            <p>
                                <b>1.</b> Проект не имеет расчетной части
                            </p>
                            <p>
                                <b>2.</b> Наши инженеры находят ошибки в проекте
                            </p>
                            <p>
                                <b>3.</b> Решение не является оптимальным и энергоэффективным
                            </p>
                            <p>
                                <b>4.</b> Заложенное оборудование не соответствует российским и европейским стандартам
                                качества

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="note-section note-section_install">
            <div class="container">
                <div class="note note-install">
                    В подобных случаях мы производим бесплатную полную экспертизу проекта. Стратегия и философия
                    нашей<br>
                    компании - довольный клиент, а не сиюминутная прибыль.
                </div>
            </div>
        </section>
        <section class="market-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="market-title">наше оборудование на</div>
                        <div class="market-img"><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/svg/logo-white.svg" alt=""></a></div>
                    </div>
                    <div class="col-lg-6">
                        <a href="#" class="btn-def btn-def--bg-green"><span>Перейти</span></a>
                    </div>
                </div>
            </div>
        </section>
        <section class="error">
            <div class="container">
                <div class="hedding">
                    <h2 class="hedding-title hedding-title_error">Типичные ошибки монтажа</h2>
                </div>
                <p class="headding-text_error">
                    Работа низкоквалифицированных специалистов негативно влияет на работу системы в течении всего срока
                    эксплуатации.
                </p>
                <div class="error-wrapper ">

                    <div class="cond-advantages__item swiper-slide col-12 col-sm-6 col-lg-4">
                        <div class="cond-advantages__item-image">
                            <img src="<?php bloginfo('template_directory'); ?>/img/install/9.png" alt="">
                        </div>
                        <h4 class="cond-advantages__item-title list-item__title"></h4>
                        <p class="cond-advantages__item-text cond-advantages__item-text_error">
                            К оборудованию не предусмотрен доступ для обслуживания
                        </p>
                    </div>
                    <div class="cond-advantages__item swiper-slide col-12 col-sm-6 col-lg-4">
                        <div class="cond-advantages__item-image">
                            <img src="<?php bloginfo('template_directory'); ?>/img/install/1.png" alt="">
                        </div>
                        <h4 class="cond-advantages__item-title list-item__title"> </h4>
                        <p class="cond-advantages__item-text cond-advantages__item-text_error">
                            Пренебрежение упаковкой оборудования и герметизацией воздуховодов на время отделочных
                            работ
                        </p>
                    </div>
                    <div class="cond-advantages__item swiper-slide col-12 col-sm-6 col-lg-4">
                        <div class="cond-advantages__item-image">
                            <img src="<?php bloginfo('template_directory'); ?>/img/install/2.png" alt="">
                        </div>
                        <h4 class="cond-advantages__item-title list-item__title"> </h4>
                        <p class="cond-advantages__item-text cond-advantages__item-text_error">
                            Материалы разбросаны по стройке без упаковки
                        </p>
                    </div>
                    <div class="cond-advantages__item swiper-slide col-12 col-sm-6 col-lg-4">
                        <div class="cond-advantages__item-image">
                            <img src="<?php bloginfo('template_directory'); ?>/img/install/3.png" alt="">
                        </div>
                        <h4 class="cond-advantages__item-title list-item__title"> </h4>
                        <p class="cond-advantages__item-text cond-advantages__item-text_error">
                            Монтаж без использования уплотнительных резинок и виброподвесов
                        </p>
                    </div>
                    <div class="cond-advantages__item swiper-slide col-12 col-sm-6 col-lg-4">
                        <div class="cond-advantages__item-image">
                            <img src="<?php bloginfo('template_directory'); ?>/img/install/4.png" alt="">
                        </div>
                        <h4 class="cond-advantages__item-title list-item__title"> </h4>
                        <p class="cond-advantages__item-text cond-advantages__item-text_error">
                            Работа по принципу “как быстрее собрать”, игнорирование проекта и нарушение аэродинамики
                            системы
                        </p>
                    </div>
                    <div class="cond-advantages__item swiper-slide col-12 col-sm-6 col-lg-4">
                        <div class="cond-advantages__item-image">
                            <img src="<?php bloginfo('template_directory'); ?>/img/install/5.png" alt="">
                        </div>
                        <h4 class="cond-advantages__item-title list-item__title"> </h4>
                        <p class="cond-advantages__item-text cond-advantages__item-text_error">
                            Несоблюдение уклона дренажа и допустимой длины трасс при монтаже кондиционера
                        </p>
                    </div>
                    <div class="cond-advantages__item swiper-slide col-12 col-sm-6 col-lg-4">
                        <div class="cond-advantages__item-image">
                            <img src="<?php bloginfo('template_directory'); ?>/img/install/6.png" alt="">
                        </div>
                        <h4 class="cond-advantages__item-title list-item__title"> </h4>
                        <p class="cond-advantages__item-text cond-advantages__item-text_error">
                            Завершение монтажа без испытаний (давление, вакуумирование, работа дренажей, шум)

                        </p>
                    </div>
                    <div class="cond-advantages__item swiper-slide col-12 col-sm-6 col-lg-4">
                        <div class="cond-advantages__item-image">
                            <img src="<?php bloginfo('template_directory'); ?>/img/install/7.png" alt="">
                        </div>
                        <h4 class="cond-advantages__item-title list-item__title"> </h4>
                        <p class="cond-advantages__item-text cond-advantages__item-text_error">
                            Спешка и суета монтажников, забытые провода, инструменты внутри системы
                        </p>
                    </div>
                    <div class="cond-advantages__item swiper-slide col-12 col-sm-6 col-lg-4">
                        <div class="cond-advantages__item-image">
                            <img src="<?php bloginfo('template_directory'); ?>/img/install/8.png" alt="">
                        </div>
                        <h4 class="cond-advantages__item-title list-item__title"> </h4>
                        <p class="cond-advantages__item-text cond-advantages__item-text_error">
                            Экономия на качественных материалах
                        </p>
                    </div>


                </div>
            </div>
        </section>
<?php include('part/blog.php'); ?>
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
<?php include('part/project.php'); ?>
    </main>
<?php endwhile; endif; ?>
<?php get_footer(); ?>
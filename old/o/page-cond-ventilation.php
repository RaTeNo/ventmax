<?php
/*
Template Name: вентиляциия
*/
?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <section class="page-insert page-cond-ventilation">
        <section class="main-banner insert-banner">
            <div class="float-element line-gradient">
                <img src="<?php bloginfo('template_directory'); ?>/img/svg/line-gradient.svg" alt="">
            </div>
            <div class="float-element line-horizontal"></div>
            <div class="float-element line-vertical"></div>

            <div class="container">
                <div class="main-banner__wrapper">
                    <h1 class="main-banner__title">Эффективная вентиляциия  <br> дома и квартиры</h1>

                    <div class="main-banner__slogan">В 2 раза меньше простуд и сезонной аллергии!</div>

                    <ul class="main-banner__list">
                        <li>
                            15 лет опыта: выполняем до 20 проектов в месяц
                        </li>
                        <li>Собственный завод в Финляндии</li>
                        <li>Гарантия на оборудование до 5 лет</li>
                        <li>
                            Наши системы устраняют >75% основных типов аллергенов
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

        <section class="ventilation-info-section">
            <div class="container-fluid">
                <div class="row ">
                    <div class="col-lg-5 pl-0">
                        <div class="ventilation-info__img">
                            <img src="<?php bloginfo('template_directory'); ?>/img/casa-acero-piedra-3.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="ventilation-info-part">
                            <div class="hedding">
                                <h2 class="hedding-title">Вентиляция — это здоровье</h2>
                                <p class="hedding-description">
                                    Ухудшение экологической ситуации в мире, использование синтетических материалов при строительстве, которые выделяют токсичные ферменты — эти и другие факторы делают качественную вентиляцию необходимой для жизни
                                </p>
                                <ul>
                                    <li>
                                        <strong>Повышайте иммунитет</strong> <br>
                                        По статистике ВОЗ, постоянная вентиляция помещения снижает частоту заболеваемости в среднем на 30%, выздоровление происходит быстрее
                                    </li>
                                    <li>
                                        <strong>Спите крепче</strong> <br>
                                        Свежий воздух улучшает сон
                                    </li>
                                    <li>
                                        <strong>Защитите дом от вирусов и аллергенов</strong><br>
                                        Фильтры тонкой очистки воздуха G4 и F7 не позволяют вирусам и микроорганизмам проникнуть в помещение
                                    </li>
                                    <li>
                                        <strong>Исключите появление грибка и плесени</strong><br>
                                        Здоровый уровень влажности не позволяет развиваться грибку и плесени, токсичных для человеческого организма и разрушающих здание
                                    </li>
                                    <li>
                                        <strong>Оставайтесь красивыми</strong><br>
                                        За счет сохранения влаги в воздухе кожа не пересыхает, <br> волосы и ногти укрепляются.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="cond-advantages-section">
            <div class="container">
                <div class="hedding">
                    <h2 class="hedding-title">Преимущества Ventmax</h2>
                </div>

                <div class="cond-advantages__list swiper-container">
                    <div class="cond-advantages__button-prev swiper-button-prev"></div>
                    <div class="cond-advantages__button-next swiper-button-next"></div>
                    <div class="cond-advantages__slider swiper-wrapper">
                        <div class="cond-advantages__item swiper-slide col-12 col-sm-6 col-lg-4">
                            <div class="cond-advantages__item-image">
                                <img src="<?php bloginfo('template_directory'); ?>/img/cond/advantage-06-1.png" alt="">
                            </div>
                            <h4 class="cond-advantages__item-title list-item__title">
                                Продуманные системы управления
                            </h4>
                            <p class="cond-advantages__item-text">
                                Позволяют с точностью поддерживать требуемые параметры воздуха, просты и удобны для экономии Вашего времени.
                            </p>
                        </div>
                        <div class="cond-advantages__item swiper-slide col-12 col-sm-6 col-lg-4">
                            <div class="cond-advantages__item-image">
                                <img src="<?php bloginfo('template_directory'); ?>/img/cond/advantage-01.png" alt="">
                            </div>
                            <h4 class="cond-advantages__item-title list-item__title">Точные расчеты</h4>
                            <p class="cond-advantages__item-text">
                                По статистике ВОЗ, постоянная вентиляция помещения снижает частоту заболеваемости в среднем на 30%, выздоровление происходит быстрее
                            </p>
                        </div>
                        <div class="cond-advantages__item swiper-slide col-12 col-sm-6 col-lg-4">
                            <div class="cond-advantages__item-image">
                                <img src="<?php bloginfo('template_directory'); ?>/img/cond/advantage-07.png" alt="">
                            </div>
                            <h4 class="cond-advantages__item-title list-item__title">Рекуперация тепла</h4>
                            <p class="cond-advantages__item-text">
                                Наше высокоэффективное и компактное оборудование позволяет возвращать до 90% тепла из удаляемого воздуха.
                            </p>
                        </div>
                        <div class="cond-advantages__item swiper-slide col-12 col-sm-6 col-lg-4">
                            <div class="cond-advantages__item-image">
                                <img src="<?php bloginfo('template_directory'); ?>/img/cond/advantage-08.png" alt="">
                            </div>
                            <h4 class="cond-advantages__item-title list-item__title">Инверторные двигатели</h4>
                            <p class="cond-advantages__item-text">
                                Использование высокоэффективных и экономичных двигателей в наших системах позволяет снизить эксплуатационные затраты и уровень шума на 25%.
                            </p>
                        </div>
                        <div class="cond-advantages__item swiper-slide col-12 col-sm-6 col-lg-4">
                            <div class="cond-advantages__item-image">
                                <img src="<?php bloginfo('template_directory'); ?>/img/cond/advantage-09.png" alt="">
                            </div>
                            <h4 class="cond-advantages__item-title list-item__title">Децентрализация систем</h4>
                            <p class="cond-advantages__item-text">
                                Надежность и гибкость в эксплуатации. Минимизация финансовых затрат и места занимаемого инженерными системами.
                            </p>
                        </div>
                        <div class="cond-advantages__item swiper-slide col-12 col-sm-6 col-lg-4">
                            <div class="cond-advantages__item-image">
                                <img src="<?php bloginfo('template_directory'); ?>/img/cond/advantage-10.png" alt="">
                            </div>
                            <h4 class="cond-advantages__item-title list-item__title">Геотермальные источники</h4>
                            <p class="cond-advantages__item-text">
                                Наши системы способны использовать энергетические ресурсы земли для нагрева и охлаждения воздуха, что значительно уменьшает эксплуатационные затраты.
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section class="information-section find-user">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="hedding">
                            <div class="hedding-title">Вентиляция ventmax подойдет тем, кто</div>
                        </div>
                        <div class="information-part">
                            <p>
                                Ценит комфорт и здоровье своей семьи, использует систему увлажнения воздуха 
                            </p>
                            <p>
                                Не планирует отапливать улицу и стремится снизить эксплуатационные расходы
                            </p>
                            <p>
                                Хочет продлить срок службы мебели и отделочных материалов внутри помещения 
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="cond-video-section">
            <div class="float-element line-gradient">
                <img src="<?php bloginfo('template_directory'); ?>/img/svg/line-gradient-2.svg" alt="">
            </div>
            <div class="container">
                <div class="hedding">
                    <h3 class="hedding-title">Как это работает:</h3>
                </div>
                <div class="row justify-content-center">
                    <div class="cond-video__inner col-12 col-sm-10 col-lg-8 col-xl-9">
                        <div class="embed-responsive embed-responsive-16by9">
                            <div class="embed-responsive-item ">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/Ph2XRXJ5wMQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
<?php include('part/blog.php'); ?>
<?php include('part/project.php'); ?>

        <section class="information-section objects-work">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="hedding">
                            <div class="hedding-title">С какими объектами <br class="d-sm-none"> мы работаем</div>
                        </div>
                        <div class="information-part">
                            <p>
                                <strong>Загородные дома</strong> <br> от 200 до 2500 м3
                            </p>
                            <p>
                                <strong>Квартиры</strong>  <br> от 200 до 2500 м3
                            </p>
                            <p>
                                <strong>Коммерческие и спецобъекты</strong>  <br> от 200 до 2500 м3 
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="work-stages-section">
            <div class="container">
                <div class="hedding">
                    <h2 class="hedding-title">Этапы работы</h2>
                </div>
                <div class="work-stages-wrapper">
                    <div class="work-stages-item">
                        <div class="work-stages__number"><span>1</span></div>
                        <div class="work-stages__description">Заявка и выезд на объект</div>
                    </div>
                    <div class="work-stages-item">
                        <div class="work-stages__number"><span>2</span></div>
                        <div class="work-stages__description">
                            Подготовка технического решения
                        </div>
                    </div>
                    <div class="work-stages-item">
                        <div class="work-stages__number"><span>3</span></div>
                        <div class="work-stages__description">
                            Согласование предварительной стоимости
                        </div>
                    </div>
                    <div class="work-stages-item">
                        <div class="work-stages__number"><span>4</span></div>
                        <div class="work-stages__description">
                            Выполнение проектных работ
                        </div>
                    </div>
                    <div class="work-stages-item">
                        <div class="work-stages__number"><span>5</span></div>
                        <div class="work-stages__description">
                            Согласование проекта
                        </div>
                    </div>
                    <div class="work-stages-item">
                        <div class="work-stages__number"><span>6</span></div>
                        <div class="work-stages__description">
                            Поставка и монтаж
                        </div>
                    </div>
                    <div class="work-stages-item">
                        <div class="work-stages__number"><span>7</span></div>
                        <div class="work-stages__description">
                            Наладка и сдача работающей системы
                        </div>
                    </div>
                    <div class="work-stages-item">
                        <div class="work-stages__number"><span>8</span></div>
                        <div class="work-stages__description">
                        Сервисное обслуживание
                        </div>
                    </div>
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
<?php endwhile; endif; ?>
<?php get_footer(); ?>
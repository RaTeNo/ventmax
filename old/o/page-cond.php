<?php
/*
Template Name: кондиционирование
*/
?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <section class="page-insert page-conditioning">
        <section class="main-banner insert-banner">
            <div class="float-element line-gradient">
                <img src="<?php bloginfo('template_directory'); ?>/img/svg/line-gradient.svg" alt="">
            </div>
            <div class="float-element line-horizontal"></div>
            <div class="float-element line-vertical"></div>

            <div class="container">
                <div class="main-banner__wrapper">
                    <h1 class="main-banner__title">Комфортное кондиционирование <br>Ventmax</h1>

                    <div class="main-banner__slogan">Надежно и без сквозняков</div>

                    <ul class="main-banner__list">
                        <li> 15 лет опыта. Являемся авторизованными дилерами ведущих <br> мировых производителей: Daikin, Mitsubishi, Samsung, Midea</li>
                        <li> Наши специалисты имеют профессиональную сертификацию</li>
                        <li> Соблюдаем чистоту на объектах, укладываемся в сроки</li>
                    </ul>
                    <div class="main-banner__btn">
                        <a data-fancybox data-src="#modal-contact-form" href="javascript:;" class="btn-def btn-def--bg-blue">
                            <span>Оставить заявку</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="cond-service-section">
            <div class="container">
                <div class="hedding">
                    <h2 class="hedding-title">
                        Полный <br class="d-sm-none"> комплекс работ
                    </h2>
                    <p class="hedding-text">
                        Мы оказываем весь спектр услуг для организации эффективной и комфортной системы кондиционирования. За каждым клиентом закреплен личный менеджер - руководитель проекта. Он координирует работу всех специалистов: проектировщиков, монтажников, сервисных инженеров.
                    </p>
                </div>
                <ul class="cond-service__list">
                    <li class="cond-service__item">
                        <div class="cond-service__item-image">
                            <img src="<?php bloginfo('template_directory'); ?>/img/cond/service-img-01.png" alt="">
                        </div>
                        <div class="cond-service__item-content">
                            <h4 class="cond-service__item-title list-item__title">Проектирование и экспертиза</h4>
                            <p class="cond-service__item-text">
                                Наш собственный проектный отдел имеет богатый опыт работы с жилыми и коммерческими объектами. В случае, если проект уже имеется, мы проведем его экспертизу на соответствие европейским стандартам эффективного и здорового кондиционирования.
                            </p>
                        </div>
                    </li>
                    <li class="cond-service__item">
                        <div class="cond-service__item-image">
                            <img src="<?php bloginfo('template_directory'); ?>/img/cond/service-img-02.png" alt="">
                        </div>
                        <div class="cond-service__item-content">
                            <h4 class="cond-service__item-title list-item__title">ПОСТАВКА ОБОРУДОВАНИЯ И МОНТАЖ</h4>
                            <p class="cond-service__item-text">
                                Мы заказываем оборудование напрямую у завода-производителя, гарантируя лучшую цену на рынке и отсутствие подделок. Собственные монтажные бригады имеют международную сертификацию.
                            </p>
                        </div>
                    </li>
                    <li class="cond-service__item">
                        <div class="cond-service__item-image">
                            <img src="<?php bloginfo('template_directory'); ?>/img/cond/service-img-03.png" alt="">
                        </div>
                        <div class="cond-service__item-content">
                            <h4 class="cond-service__item-title list-item__title">СЕРВИСНОЕ ОБСЛУЖИВАНИЕ</h4>
                            <p class="cond-service__item-text">
                                Сервисные инженеры повышают квалификацию на заводах - изготовителях. Оригинальные расходники гарантируют длительный срок службы оборудования и безопасность для здоровья.
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        <section class="cond-brands-section">
            <div class="container">
                <div class="hedding">
                    <h2 class="hedding-title">Только лучшие бренды</h2>
                    <p class="hedding-description">
                        Мы выбираем для Вас проверенное оборудование от ведущих мировых производителей
                    </p>
                </div>
                <div class="cond-brands__inner">
                    <div class="swiper-button-prev cond-brands__button-prev"></div>
                    <div class="swiper-button-next cond-brands__button-next"></div>
                    <div class="cond-brands__list swiper-container">
                        <div class="cond-brands__slider swiper-wrapper">
                            <div class="cond-brands__item swiper-slide col-12 col-md-6 col-lg-3">
                                <img src="<?php bloginfo('template_directory'); ?>/img/cond/brand-01.png" alt="">
                            </div>
                            <div class="cond-brands__item swiper-slide col-12 col-md-6 col-lg-3">
                                <img src="<?php bloginfo('template_directory'); ?>/img/cond/brand-02.png" alt="">
                            </div>
                            <div class="cond-brands__item swiper-slide col-12 col-md-6 col-lg-3">
                                <img src="<?php bloginfo('template_directory'); ?>/img/cond/brand-03.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="cond-advantages-section">
            <div class="container">
                <div class="hedding">
                    <h2 class="hedding-title">Преимущества  кондиционирования Ventmax</h2>
                </div>

                <div class="cond-advantages__list swiper-container">
                    <div class="cond-advantages__button-prev swiper-button-prev"></div>
                    <div class="cond-advantages__button-next swiper-button-next"></div>
                    <div class="cond-advantages__slider swiper-wrapper">
                        <div class="cond-advantages__item swiper-slide col-12 col-sm-6 col-lg-4">
                            <div class="cond-advantages__item-image">
                                <img src="<?php bloginfo('template_directory'); ?>/img/cond/advantage-01.png" alt="">
                            </div>
                            <h4 class="cond-advantages__item-title list-item__title">Точные расчеты</h4>
                            <p class="cond-advantages__item-text">
                                Грамотный расчет теплопоступлений во все помещения дома и профессиональный подбор оборудования снижают затраты и позволяют избежать ошибок.
                            </p>
                        </div>
                        <div class="cond-advantages__item swiper-slide col-12 col-sm-6 col-lg-4">
                            <div class="cond-advantages__item-image">
                                <img src="<?php bloginfo('template_directory'); ?>/img/cond/advantage-02.png" alt="">
                            </div>
                            <h4 class="cond-advantages__item-title list-item__title">Канальные системы</h4>
                            <p class="cond-advantages__item-text">
                                Применение внутренних блоков канального (скрытого) позволяет полностью сохранить дизайн помещений, снизить шум и обеспечить идеальное воздухораспределение.
                            </p>
                        </div>
                        <div class="cond-advantages__item swiper-slide col-12 col-sm-6 col-lg-4">
                            <div class="cond-advantages__item-image">
                                <img src="<?php bloginfo('template_directory'); ?>/img/cond/advantage-03.png" alt="">
                            </div>
                            <h4 class="cond-advantages__item-title list-item__title">Центральные системы</h4>
                            <p class="cond-advantages__item-text">
                                Интегрирование системы кондиционирования в систему энергоэффективной вентиляции позволит снизить затраты на оборудование и уменьшить количество источников шума.
                            </p>
                        </div>
                        <div class="cond-advantages__item swiper-slide col-12 col-sm-6 col-lg-4">
                            <div class="cond-advantages__item-image">
                                <img src="<?php bloginfo('template_directory'); ?>/img/cond/advantage-04.png" alt="">
                            </div>
                            <h4 class="cond-advantages__item-title list-item__title">Мультизональные системы</h4>
                            <p class="cond-advantages__item-text">
                                Оптимальный выбор для домов с большой жилой площадью. Один наружный блок не портит облик Вашего дома. Большой выбор внутренних блоков для решения любых задач в любом интерьере.
                            </p>
                        </div>
                        <div class="cond-advantages__item swiper-slide col-12 col-sm-6 col-lg-4">
                            <div class="cond-advantages__item-image">
                                <img src="<?php bloginfo('template_directory'); ?>/img/cond/advantage-05.png" alt="">
                            </div>
                            <h4 class="cond-advantages__item-title list-item__title">Рекуперация холода</h4>
                            <p class="cond-advantages__item-text">
                                Применение сорбционных роторных рекуператоров в системе вентиляции позволяет снизить энергопотребление на 30%.
                            </p>
                        </div>
                        <div class="cond-advantages__item swiper-slide col-12 col-sm-6 col-lg-4">
                            <div class="cond-advantages__item-image">
                                <img src="<?php bloginfo('template_directory'); ?>/img/cond/advantage-06.png" alt="">
                            </div>
                            <h4 class="cond-advantages__item-title list-item__title">ХОЛОДНЫЕ ПОТОЛКИ</h4>
                            <p class="cond-advantages__item-text">
                                Охлаждают не воздух, а предметы. Без сквозняков. Почувствуйте удивительную прохладу каменного дома жарким летом.
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section class="information-section find-user">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="hedding">
                            <div class="hedding-title">Системы кондиционирования Ventmax подойдет тем, кто</div>
                        </div>
                        <div class="information-part">
                            <p>
                                Ценит тишину и комфорт, заботится о здоровье своей семьи 
                            </p>
                            <p>
                                Хочет сохранить внешний и внутренний дизайн своего дома
                            </p>
                            <p>
                                Ценит современные технологии и энергосбережение 
                            </p>
                            <p>
                                Имеет ограничение на размещение наружных блоков
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
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/KiXLpdzLiKI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
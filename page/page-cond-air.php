<?php
/*
Template Name: Увлажнения
*/
?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<section class="page-insert page-conditioning-air">
    <section class="main-banner insert-banner">
        <div class="float-element line-gradient">
            <img src="<?php bloginfo('template_directory'); ?>/img/svg/line-gradient.svg" alt="">
        </div>
         <div class="float-element line-horizontal"></div>
         <div class="float-element line-vertical"></div>

        <div class="container">
            <div class="main-banner__wrapper">
                <h1 class="main-banner__title">Увлажнения воздуха <br> Ventmax</h1>

                <div class="main-banner__slogan">Здоровье и комфорт для вас и ваших близких</div>

                <ul class="main-banner__list">
                    <li>Являемся авторизованными дилерами ведущих мировых <br>
                    производителей: Condair, Draabe, Buhler, Daikin</li>
                    <li>15 лет опыта. Наши специалисты имеют профессиональную сертификацию</li>
                    <li>Соблюдаем чистоту на объектах, укладываемся в сроки</li>
                    <li>Обеспечиваем полную сервисную поддержку</li>
                </ul>
                <div class="main-banner__btn">
                    <a data-fancybox data-src="#modal-contact-form" href="javascript:;" class="btn-def btn-def--bg-blue">
                        <span>Оставить заявку</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="cond-advantages-section no-bg">
        <div class="container">
            <div class="hedding">
                <h2 class="hedding-title">Зачем нужно увлажнять воздух</h2>
                <div class="hedding-description">
                    Зимой в России средняя влажность воздуха не превышает 20%, тогда как нормой является 40-60%  <br>
                    (50-60% для аллергиков и астматиков).
                </div>
            </div>

            <div class="cond-advantages__list swiper-container">
                <div class="cond-advantages__button-prev swiper-button-prev"></div>
                <div class="cond-advantages__button-next swiper-button-next"></div>
                <div class="cond-advantages__slider swiper-wrapper">
                    <div class="cond-advantages__item swiper-slide col-12 col-sm-6 col-lg-4">
                        <div class="cond-advantages__item-image">
                            <img src="<?php bloginfo('template_directory'); ?>/img/cond/advantage-11.png" alt="">
                        </div>
                        <h4 class="cond-advantages__item-title list-item__title">
                            Пыль, аллергены, вирусы
                        </h4>
                        <p class="cond-advantages__item-text">
                            Они настолько легкие, что не оседают вниз и мы постоянно их вдыхаем. Во влажном воздухе они “прилепляются” к частицам воды и опускаются на пол.
                        </p>
                    </div>
                    <div class="cond-advantages__item swiper-slide col-12 col-sm-6 col-lg-4">
                        <div class="cond-advantages__item-image">
                            <img src="<?php bloginfo('template_directory'); ?>/img/cond/advantage-12.png" alt="">
                        </div>
                        <h4 class="cond-advantages__item-title list-item__title">Пересыхание слизистых</h4>
                        <p class="cond-advantages__item-text">
                            В сухом воздухе слизистые человека пересыхают, снижаются их защитные свойства. Количество респираторных заболеваний вырастает на 25-30%.
                        </p>
                    </div>
                    <div class="cond-advantages__item swiper-slide col-12 col-sm-6 col-lg-4">
                        <div class="cond-advantages__item-image">
                            <img src="<?php bloginfo('template_directory'); ?>/img/cond/advantage-13.png" alt="">
                        </div>
                        <h4 class="cond-advantages__item-title list-item__title">Преждевременное старение</h4>
                        <p class="cond-advantages__item-text">
                            В сухом воздухе кожа, ногти и волосы быстрее разрушаются, трескаются, ломаются. Со временем образуются морщины, снижается способность регенерировать эпителий.
                        </p>
                    </div>
                    <div class="cond-advantages__item swiper-slide col-12 col-sm-6 col-lg-4">
                        <div class="cond-advantages__item-image">
                            <img src="<?php bloginfo('template_directory'); ?>/img/cond/advantage-14.png" alt="">
                        </div>
                        <h4 class="cond-advantages__item-title list-item__title">Плохой сон и концентрация</h4>
                        <p class="cond-advantages__item-text">
                            В сухом воздухе человеку находится некомфортно и вредно. Он мучается от плохого сна, а с утра нет ощущения свежести. Снижается концентрация, способность к обучению.
                        </p>
                    </div>
                    <div class="cond-advantages__item swiper-slide col-12 col-sm-6 col-lg-4">
                        <div class="cond-advantages__item-image">
                            <img src="<?php bloginfo('template_directory'); ?>/img/cond/advantage-15.png" alt="">
                        </div>
                        <h4 class="cond-advantages__item-title list-item__title">Здоровье детей</h4>
                        <p class="cond-advantages__item-text">
                            Растущий детский организм особенно нуждается в здоровой атмосфере. Она необходима для интенсивного развития, обучения, игр и занятий спортом.
                        </p>
                    </div>
                    <div class="cond-advantages__item swiper-slide col-12 col-sm-6 col-lg-4">
                        <div class="cond-advantages__item-image">
                            <img src="<?php bloginfo('template_directory'); ?>/img/cond/advantage-16.png" alt="">
                        </div>
                        <h4 class="cond-advantages__item-title list-item__title">Мебель и паркет</h4>
                        <p class="cond-advantages__item-text">
                           В сухом воздухе мебель, паркет и музыкальные инструменты разрушаются, трескаются. Чахнут и постепенно гибнут растения, болеют домашние животные. 
                       </p>
                    </div>

                </div>
            </div>

            <blockquote>
                <p>
                    Внимание! Увлажнение воздуха “народными средствами” ведет к обратному результату - в тазиках с водой 
                    и мокрых полотенцах стремительно размножаются болезнетворные бактерии.
                </p>
            </blockquote> 

        </div>
    </section>
<?php include('part/blog.php'); ?>
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
                            <img src="<?php bloginfo('template_directory'); ?>/img/cond/brand-04.png" alt="">
                        </div>
                        <div class="cond-brands__item swiper-slide col-12 col-md-6 col-lg-3">
                            <img src="<?php bloginfo('template_directory'); ?>/img/cond/brand-05.png" alt="">
                        </div>
                        <div class="cond-brands__item swiper-slide col-12 col-md-6 col-lg-3">
                            <img src="<?php bloginfo('template_directory'); ?>/img/cond/brand-06.png" alt="">
                        </div>
                        <div class="cond-brands__item swiper-slide col-12 col-md-6 col-lg-3">
                            <img src="<?php bloginfo('template_directory'); ?>/img/cond/brand-07.png" alt="">
                        </div>
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
                <div class="market-img"><a href="http://ventmax-market.ru/"><img src="<?php bloginfo('template_directory'); ?>/img/svg/logo-white.svg" alt=""></a></div>
            </div>
            <div class="col-lg-6">
                <a href="http://ventmax-market.ru/" class="btn-def btn-def--bg-green"><span>Перейти</span></a>
            </div>
            </div>
        </div>
    </section>

    <section class="goods-types-section">
        <div class="container">
            <div class="hedding">
                <div class="hedding-title">Типы систем увлажнения</div>
                <div class="hedding-description">
                    Мы подбираем оптимальную систему увлажнения для каждого помещения, в зависимости от его площади и назначения.
                    <br> 
                    Во всех наших системах вода проходит предварительную очистку.
                </div>
            </div>
            <div class="goods-types-wrapper">
                <div class="goods-types-item">
                    <div class="goods-types-item__img" style="background-image: url(<?php bloginfo('template_directory'); ?>/img/cond/goods-type-1.png);"></div>
                    <div class="goods-types-item__col">
                        <div class="goods-types-item__title">Паровая</div>
                        <div class="goods-types-item__description">
                            Вода нагревается до 100° и превращается в пар. Возможна подача пара в систему вентиляции или напрямую в помещение.
                        </div>
                        <div class="goods-types-item-list">
                            <div class="goods-types-item-list__title">Особенности</div>  
                            <ul>
                                <li>-Дезинфекция воды через кипение</li>
                                <li>-Не нужно менять фильтры</li>
                                <li>-Простая конструкция и износостойкость</li>
                            </ul>  
                        </div>
                    </div>
                </div>
                <div class="goods-types-item">
                    <div class="goods-types-item__img" style="background-image: url(<?php bloginfo('template_directory'); ?>/img/cond/goods-type-2.png);"></div>
                    <div class="goods-types-item__col">
                        <div class="goods-types-item__title">Диффузионная</div>
                        <div class="goods-types-item__description">
                            Через увлажнитель проходит вода. Мембрана не пропускает ее в систему воздуховодов, но пропускает холодный пар, который и увлажняет воздух. 
                        </div>
                        <div class="goods-types-item-list">
                            <div class="goods-types-item-list__title">Особенности</div>  
                            <ul>
                                <li>-Высокая гигиеничность работы благодаря мембране</li>
                                <li>-Возможность поэтапного монтажа</li>
                                <li>-Автоматическое управление по сигналам канальных датчиков</li>
                            </ul>  
                        </div>
                    </div>
                </div>
                <div class="goods-types-item">
                    <div class="goods-types-item__img" style="background-image: url(<?php bloginfo('template_directory'); ?>/img/cond/goods-type-3.png);"></div>
                    <div class="goods-types-item__col">
                        <div class="goods-types-item__title">Форсуночная</div>
                        <div class="goods-types-item__description">
                            Вода под давлением распыляется через форсунки, образуя мелкодисперсную аэрозоль - туман (15-40 микрон). В течении секунды он растворяется в воздухе, увлажняя его.
                        </div>
                        <div class="goods-types-item-list">
                            <div class="goods-types-item-list__title">Особенности</div>  
                            <ul>
                                <li>-Независимая регулировка влажности по комнатам</li>
                                <li>-Скрытый монтаж модулей</li>
                                <li>-Высокая энергоэффективность</li>
                            </ul>  
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </section>
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
<?php endwhile; endif; ?>
<?php get_footer(); ?>
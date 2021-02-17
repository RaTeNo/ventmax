<?php
/*
Template Name: Экспертиза
*/
?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <main class="page-insert">
        <section class="main-banner insert-banner page-engineering">
            <div class="float-element line-gradient">
                <img src="<?php bloginfo('template_directory'); ?>/img/svg/line-gradient.svg" alt="">
            </div>
            <div class="float-element line-horizontal"></div>
            <div class="float-element line-vertical"></div>

            <div class="container">
                <div class="main-banner__wrapper">
                    <h1 class="main-banner__title">Экспертиза систем вентиляции
                        <br> и кондиционирования </h1>

                    <div class="main-banner__slogan main-banner__slogan_eng">Сохраняем ваше здоровье и средства</div>

                    <ul class="main-banner__list">
                        <li>
                            Экспертиза проекта
                        </li>
                        <li>
                            Диагностика существующей системы
                        </li>
                        <li>
                            Модернизация существующей системы или проекта
                        </li>
                        <li>
                            Восстановление утерянной (или не существующей) документации
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
        <section class="info-expertise">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="hedding hedding-eng">
                            <div class="hedding-title">Когда нужна экспертиза?</div>
                        </div>
                        <div class="information-part">
                            <p class="information-part__describe">
                                Если есть хоть какие-то подозрения в несостоятельности проекта, лучше не медлить с
                                экспертизой. Исправление ошибок после монтажа вентиляции обойдется в десятки раз дороже,
                                чем на этапе проектирования
                            </p>
                            <ul class="information__list">
                                <li class="information__item">
                                    <b>1.</b> Есть сомнения в компетенции или порядочности проектировщика (проектной
                                    организации)
                                </li>
                                <li class="information__item">
                                    <b>2.</b> Проект выполнил не специалист по ОВиК, а смежник
                                    конденсата
                                </li>
                                <li class="information__item">
                                    <b>3.</b> Проект выполнила компания, специализирующаяся на коммерческих,
                                    производственных объектах
                                </li>
                                <li class="information__item">
                                    <b>4.</b> Большие цифры потребления тепловой и электроэнергии в проекте
                                </li>
                                <li class="information__item">
                                    <b>5.</b> Высокая сметная цена оборудования и материалов
                                </li>
                                <li class="information__item">
                                    <b>6.</b> Большие опуски потолков, конфликтующие с дизайн-проектом
                                </li>
                                <li class="information__item">
                                    <b>7.</b> Проект небольшого объема, минимум схем и спецификаций
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="why">
            <div class="container">
                <div class="hedding">
                    <div class="hedding-title">
                        Почему мы?
                    </div>
                </div>
                <div class="wherefore">
                    <div class="wherefore__wrapper">
                        <div class="wherefore__left">
                            <img src="<?php bloginfo('template_directory'); ?>/img/page-expertise/photo1.jpg" alt="" class="wherefore__left-img">
                        </div>
                        <div class="wherefore__right">
                            <p class="wherefore__text">
                                Компания Вентмакс занимается проектированием и экспертизой вентиляционных систем для
                                частного сектора более 15 лет и является членом АВОК и АПИК. За это время мы приобрели
                                богатый опыт работы с европейскими и отечественными системами, домами от 50 до 2500 кв.м
                                в разных климатических зонах. Наши специалисты имеют профессиональную сертификацию,
                                проходят регулярное обучение в Финляндии и Германии.
                            </p>
                            <div class="wherefore__right-wrapper">
                                <img src="<?php bloginfo('template_directory'); ?>/img/page-expertise/photo2.jpg" alt="" class="wherefore__right-img">
                                <img src="<?php bloginfo('template_directory'); ?>/img/page-expertise/photo3.jpg" alt="" class="wherefore__right-img">
                                <img src="<?php bloginfo('template_directory'); ?>/img/page-expertise/photo4.jpg" alt="" class="wherefore__right-img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="recommendations recommendations__exp">
            <div class="container">
                <div class="hedding">
                    <div class="hedding-title">
                        Самые распространенные проблемы
                    </div>
                    <div class="hedding-description">
                        Если есть хоть какие-то подозрения в несостоятельности проекта, лучше не медлить с экспертизой.
                        Исправление ошибок после монтажа вентиляции обойдется в десятки раз дороже, чем на этапе
                        проектирования.
                    </div>
                </div>
                <ul class="recommendations-list__exp">
                    <li class="recommendations-list__item">
                        <img src="<?php bloginfo('template_directory'); ?>/img/page-expertise/1.png" alt="" class="recommendations-img">
                        <span class="recommendations-list__item-text">
                            Мощность системы недостаточна или превышает необходимую
                        </span>
                    </li>
                    <li class="recommendations-list__item">
                        <img src="<?php bloginfo('template_directory'); ?>/img/page-expertise/2.png" alt="" class="recommendations-img">
                        <span class="recommendations-list__item-text">
                            Без реальной необходимости заложена самая дорогая система кондиционирования VRV
                        </span>
                    </li>
                    <li class="recommendations-list__item">
                        <img src="<?php bloginfo('template_directory'); ?>/img/page-expertise/3.png" alt="" class="recommendations-img">
                        <span class="recommendations-list__item-text">
                            В проекте вентиляции (использование 24/7) уделено меньшее внимание, чем кондиционированию (3
                            недели в году)</span>
                    </li>
                    <li class="recommendations-list__item">
                        <img src="<?php bloginfo('template_directory'); ?>/img/page-expertise/4.png" alt="" class="recommendations-img">
                        <span class="recommendations-list__item-text">
                            Используются не энергоэффективные решения и оборудование без рекуперации тепла
                        </span>
                    </li>
                    <li class="recommendations-list__item">
                        <img src="<?php bloginfo('template_directory'); ?>/img/page-expertise/5.png" alt="" class="recommendations-img">
                        <span class="recommendations-list__item-text">
                            Нарушено распределение воздуха: сквозняки, застой в углах, попадание запахов из зон кухни и
                            санузла в гостиные и спальни
                        </span>
                    </li>
                    <li class="recommendations-list__item">
                        <img src="<?php bloginfo('template_directory'); ?>/img/page-expertise/6.png" alt="" class="recommendations-img">
                        <span class="recommendations-list__item-text">
                            Неправильно подобрано оборудование
                        </span>
                    </li>
                </ul>
            </div>
        </section>
        <section class="works works__exp">
            <div class="container">
                <div class="hedding">
                    <h2 class="hedding-title">Экспертиза проекта</h2>
                </div>
                <div class="work work_exp">
                    <div class="work__row work__row_exp">
                        <div class="work__item work__item_active">
                            1
                        </div>
                        <div class="work__describe work__describe_exp">
                            Рассчитаем все необходимые показатели: теплопотери, влажность, скорость и объем воздуха и
                            др.
                        </div>

                    </div>

                    <div class="work__row work__row_exp">
                        <div class="work__item work__item_active">
                            2
                        </div>
                        <div class="work__describe work__describe_exp">
                            Узнаем, верно ли были подобраны оборудование и системы распределения воздуха. Установим
                            соответствие системы российским и европейским стандартам.
                        </div>
                    </div>
                    <div class="work__row work__row_exp">
                        <div class="work__item work__item_active">
                            3
                        </div>
                        <div class="work__describe work__describe_exp">
                            Сформируем подробный список ошибок (в случае их наличия), предложим варианты исправления и
                            оптимизации.
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <section class="work-stages-section work-stages-section__eng">
            <div class="container">
                <div class="hedding">
                    <h2 class="hedding-title">Экспертиза существующей вентиляции</h2>
                </div>
                <div class="work-stages-wrapper">
                    <div class="work-stages-item">
                        <div class="work-stages__numb"><span>1</span></div>
                        <div class="work-stages__description work-stages__description_eng">Измерим все необходимые
                            показатели: температура, влажность, скорость воздуха. Учтем режим эксплуатации помещения,
                            количество проживающих</div>
                    </div>
                    <div class="work-stages-item">
                        <div class="work-stages__numb"><span>2</span></div>
                        <div class="work-stages__description work-stages__description_eng">
                            Оценим действующую систему, ее способность выполнять свою задачу, степень износа и
                            загрязнения
                        </div>
                    </div>
                    <div class="work-stages-item">
                        <div class="work-stages__numb"><span>3</span></div>
                        <div class="work-stages__description work-stages__description_eng">
                            Сформируем список проблем существующих и прогнозируемых, предложим несколько вариантов их
                            решения
                        </div>
                    </div>
                </div>
            </div>
        </section>
<?php include('part/blog.php'); ?>
    </main>
<?php endwhile; endif; ?>
<?php get_footer(); ?>
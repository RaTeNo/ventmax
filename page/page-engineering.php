<?php
/*
Template Name: Проектирование
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
                    <h1 class="main-banner__title">Проектирование систем
                        <br>вентиляции</h1>

                    <div class="main-banner__slogan main-banner__slogan_eng">Грамотный проект - основа эффективной <br>
                        и надежной системы</div>

                    <ul class="main-banner__list">
                        <li>
                            Работаем в соответствии с европейскими стандартами 2020 года
                        </li>
                        <li>
                            Собственный проектный отдел, опыт более 15 лет и 600 объектов
                        </li>
                        <li>
                            Наши специалисты повышают квалификацию 2-3 раза в год, в том числе в европейских странах
                        </li>
                        <li>
                            Гарантия точной стоимости - четкая спецификация оборудования и материалов
                        </li>
                        <li>
                            Монтаж по нашему проекту сможет выполнить любая бригада
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
        <section class="info-eng">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="hedding hedding-eng">
                            <div class="hedding-title">Зачем нужен проект?</div>
                        </div>
                        <div class="information-part">
                            <p class="information-part__describe">
                                Пренебрежение проектными работами неизбежно ведет к перерасходу средств на этапе
                                монтажа, ошибкам, неэффективной, некомфортной работе системы и другим последствиям,
                                часто не поддающимся исправлению.
                            </p>
                            <ul class="information__list">
                                <li class="information__item">
                                    <b>1.</b> Максимальная эффективность системы благодаря точным расчетам
                                </li>
                                <li class="information__item">
                                    <b>2.</b> Отсутствие “неожиданных” проблем: сквозняков, застоя воздуха, плесени,
                                    конденсата
                                </li>
                                <li class="information__item">
                                    <b>3.</b> Вентиляционные трассы и другие инженерные системы не мешают друг другу
                                </li>
                                <li class="information__item">
                                    <b>4.</b> Элементы вентиляции (решетки, уровень опуска потолков, пульты управления)
                                    гармонируют с общим дизайн-проектом
                                </li>
                                <li class="information__item">
                                    <b>5.</b> Монтаж по спецификации без переплаты за лишние материалы
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="install">
            <div class="container">
                <h2 class="danger-title install-tittle">
                    Что важно при проектировании?
                </h2>
                <p class="install-text">
                    Пренебрежение проектными работами неизбежно ведет к перерасходу средств на этапе монтажа, ошибкам,
                    неэффективной, некомфортной работе системы и другим последствиям, часто не поддающимся исправлению.
                </p>
                <ul class="danger-list">
                    <li class="danger-item">
                        <img src="<?php bloginfo('template_directory'); ?>/img/page-engineering/1 285.png" alt="" class="danger-item__image">
                        <span class="danger-item__text danger-item__text_install">
                            Расчет воздухообмена в зависимости от количества людей, объема помещения, уровня CO2
                        </span>
                    </li>
                    <li class="danger-item">
                        <img src="<?php bloginfo('template_directory'); ?>/img/page-engineering/2 1563010021.png" alt="" class="danger-item__image">
                        <span class="danger-item__text danger-item__text_install">
                            Учет температуры, влажности, скорости движения воздуха
                        </span>
                    </li>
                    <li class="danger-item">
                        <img src="<?php bloginfo('template_directory'); ?>/img/page-engineering/3 6.png" alt="" class="danger-item__image">
                        <span class="danger-item__text danger-item__text_install">
                            Расчет аэродинамических показателей, графика давления, теплообмена
                        </span>
                    </li>
                    <li class="danger-item">
                        <img src="<?php bloginfo('template_directory'); ?>/img/page-engineering/4.png" alt="" class="danger-item__image">
                        <span class="danger-item__text danger-item__text_install">
                            Расчет комфортного воздухораспределения без сквозняков
                        </span>
                    </li>
                    <li class="danger-item">
                        <img src="<?php bloginfo('template_directory'); ?>/img/page-engineering/5 38.png" alt="" class="danger-item__image">
                        <span class="danger-item__text danger-item__text_install">
                            Грамотное расположение оборудования для минимального шума и удобного обслуживания
                        </span>
                    </li>
                    <li class="danger-item">
                        <img src="<?php bloginfo('template_directory'); ?>/img/page-engineering/6 762.png" alt="" class="danger-item__image">
                        <span class="danger-item__text danger-item__text_install">
                            Учет особенностей дизайн-проекта дома, удобное расположение модулей управления
                        </span>
                    </li>
                </ul>
            </div>
        </section>
        <section class="work-stages-section work-stages-section__eng">
            <div class="container">
                <div class="hedding">
                    <h2 class="hedding-title">Этапы проектирования</h2>
                </div>
                <div class="work-stages-wrapper">
                    <div class="work-stages-item">
                        <div class="work-stages__numb"><span>1</span></div>
                        <div class="work-stages__description work-stages__description_eng">Составляем понятное
                            техническое задание, учитывающее
                            особенности объекта и желания заказчика</div>
                    </div>
                    <div class="work-stages-item">
                        <div class="work-stages__numb"><span>2</span></div>
                        <div class="work-stages__description work-stages__description_eng">
                            Выполняем необходимые расчеты и предлагаем 3-5 эскизных решений
                        </div>
                    </div>
                    <div class="work-stages-item">
                        <div class="work-stages__numb"><span>3</span></div>
                        <div class="work-stages__description work-stages__description_eng">
                            Создаем полный комплект рабочих чертежей и 3D-модель вентиляции с архитектором и дизайнером
                        </div>
                    </div>
                    <div class="work-stages-item">
                        <div class="work-stages__numb"><span>4</span></div>
                        <div class="work-stages__description work-stages__description_eng">
                            Создаем спецификацию и сметный расчет
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="composition">
            <div class="container">
                <div class="hedding">
                    <h2 class="hedding-title hedding-title__comp">Состав проекта
                        <img src="<?php bloginfo('template_directory'); ?>/img/page-engineering/Vector.png" alt="" class="hedding-img">
                    </h2>
                </div>
                <ul class="comp-list">
                    <li class="comp-item">
                        Пояснительная записка и расчетная часть

                    </li>
                    <li class="comp-item">
                        Комплект рабочих чертежей и 3D модель с высотами потолков

                    </li>
                    <li class="comp-item">
                        Спецификация оборудования и материалов

                    </li>
                    <li class="comp-item">
                        Привязки люков, диффузоров и решеток

                    </li>
                    <li class="comp-item">
                        План отверстий и общестроительных работ

                    </li>
                    <li class="comp-item">
                        Задание на электроснабжение и привязки пультов управления

                    </li>
                    <li class="comp-item">
                        Сметный расчет и спецификация

                    </li>
                </ul>
        </section>
        <section class="stages stages__eng">
            <div class="container">
                <h2 class="stages-title">
                    Наши решения
                </h2>
                <div class="stages-desicion stages-desicion__eng">
                    <div class="stages-item stages-item__eng">
                        <div class="stages-item__image">
                            <img src="<?php bloginfo('template_directory'); ?>/img/page-engineering/1 286.png" alt="">
                        </div>
                        <div class="stages-item__content">
                            <h4 class="stages-item__title stages-item__title_eng">
                                Гостиная с камином
                            </h4>
                            <p class="stages-item__list stages-item__list_eng">
                                Для быстрого розжига и уверенного горения необходим дополнительный воздух.
                                Вентиляционная установка автоматически включает режим “Камин”, увеличивая объем
                                поступающего воздуха. Это, с одной стороны, обеспечивает огонь кислородом, а с
                                другой - выдавливает дым и угарный газ сразу в дымоход, не позволяя им
                                распространяться по комнате.
                            </p>
                        </div>
                    </div>
                    <div class="stages-item stages-item__eng">
                        <div class="stages-item__image">
                            <img src="<?php bloginfo('template_directory'); ?>/img/page-engineering/2 1563010022.png" alt="">
                        </div>
                        <div class="stages-item__content">
                            <h4 class="stages-item__title stages-item__title_eng">
                                Кухня
                            </h4>
                            <p class="stages-item__list stages-item__list_eng">
                                Во время приготовления пищи по дому распространяются сильные запахи, приятные и не очень
                                (например, при варке рыбы). Кухонная вытяжка удаляет лишь малую часть запахов вместе с
                                воздухом, при этом создавая душную, некомфортную атмосферу. Вентиляция автоматически
                                переходит в режим “Кухня” при включении вытяжки. Система создает избыточное давление
                                воздуха в смежных комнатах. Воздух из комнат движется на кухню, компенсирую работу
                                вытяжки и исключая возможность распространения запахов по дому.
                            </p>
                        </div>
                    </div>
                    <div class="stages-item stages-item__eng">
                        <div class="stages-item__image">
                            <img src="<?php bloginfo('template_directory'); ?>/img/page-engineering/3 7.png" alt="">
                        </div>
                        <div class="stages-item__content">
                            <h4 class="stages-item__title stages-item__title_eng">
                                СПА, баня и сауна
                            </h4>
                            <p class="stages-item__list stages-item__list_eng">
                                В сауне или бане, особенно с настоящей дровяной печью, вопрос вентиляции стоит особенно
                                остро. Огонь и несколько человек в маленьком помещении быстро расходуют кислород.
                                Приходится периодически открывать дверь или окно, однако это сопряжено с колоссальными
                                теплопотерями. Грамотная вентиляция решает эту проблему. Канал приточного воздуха
                                расположен сверху над печкой, свежий воздух моментально нагревается. Вытяжка
                                организуется двумя каналами. Нижний работает во время использования бани или сауны,
                                вытягивая уже остывающий воздух, опустившийся на нижний уровень, а также угарный газ и
                                излишки влаги. Верхний канал открывается только во время простоя, благодаря чему
                                происходит полное удаление влаги и сохранение отделочных материалов.
                            </p>
                        </div>
                    </div>
                    <div class="stages-item stages-item__eng">
                        <div class="stages-item__image">
                            <img src="<?php bloginfo('template_directory'); ?>/img/page-engineering/4 8.png" alt="">
                        </div>
                        <div class="stages-item__content">
                            <h4 class="stages-item__title stages-item__title_eng">
                                Санузел
                            </h4>
                            <p class="stages-item__list stages-item__list_eng">
                                Помещение используется в течении не более 5% времени от общего пребывания людей в доме,
                                однако вентиляция санузла обычно работает постоянно, вместе с общей вентиляцией. Наша
                                система имеет 2 режима работы. Режим использования активируется автоматически,
                                поддерживает высокую мощность работы вентиляции. При этом вытяжка воздуха незначительно
                                преобладает на притоком, что исключает возможность вытеснения отработанного воздуха в
                                жилые помещения. Когда санузел не используется, вентиляция работает в режиме экономии.

                            </p>
                        </div>
                    </div>
                    <div class="stages-item stages-item__eng">
                        <div class="stages-item__image">
                            <img src="<?php bloginfo('template_directory'); ?>/img/page-engineering/5 39.png" alt="">
                        </div>
                        <div class="stages-item__content">
                            <h4 class="stages-item__title stages-item__title_eng">
                                Гараж
                            </h4>
                            <p class="stages-item__list stages-item__list_eng">
                                В гараже заведенная машина менее чем за одну минуту делает воздух непригодным и опасным
                                для дыхания. При этом выхлоп машины состоит из нескольких газов, часть которых
                                поднимается наверх, а другая опускается вниз. Вентиляционная система обязательно имеет 2
                                вытяжных канала (на верхнем и нижнем уровнях) и приток свежего воздуха, который замещает
                                загрязненный воздух с достаточной скоростью.
                            </p>
                        </div>
                    </div>
                </div>
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
        <section id="set-of-equipment" class="set-of-equipment scroll-section">
            <!-- Section Set of Equipment Start -->
            <div class="container">
                <!-- Container Start -->
                <div class="row">
                    <div class="set-of-equipment__title col-12">
                        <h1>Комплект оборудования</h1>
                        <nav>
                            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active show" id="nav-recuperator-tab" data-toggle="tab"
                                    href="#nav-recuperator" role="tab" aria-controls="nav-recuperator"
                                    aria-selected="false">РЕКУПЕРАТОР</a>
                                <a class="nav-item nav-link" id="nav-airdist-tab" data-toggle="tab" href="#nav-airdist"
                                    role="tab" aria-controls="nav-airdist" aria-selected="false">
                                    ВОЗДУХОРАСПРЕДЕЛЕНИЕ</a>
                                <a class="nav-item nav-link" id="nav-control-tab" data-toggle="tab" href="#nav-control"
                                    role="tab" aria-controls="nav-control" aria-selected="false">УПРАВЛЕНИЕ</a>
                                <a class="nav-item nav-link" id="nav-equipment-tab" data-toggle="tab"
                                    href="#nav-equipment" role="tab" aria-controls="nav-equipment"
                                    aria-selected="true">ДОП. ОБОРУДОВАНИЕ</a>
                            </div>
                        </nav>
                    </div>
                    <div class="set-of-equipment__tabs col-sm-12">
                        <div class="tab-content" id="nav-tabContent">
                            <!-- Recuperation Tab Start -->
                            <div class="tab-pane fade active show" id="nav-recuperator" role="tabpanel"
                                aria-labelledby="nav-recuperator-tab">
                                <!-- Recuperation Tab Start -->
                                <div class="nav-tab__item">
                                    <div class="row">
                                        <div class="nav-tab__left-menu col-sm-3">
                                            <div class="nav flex-column nav-pills" id="v-pills-tab-recuperation"
                                                role="tablist" aria-orientation="vertical">
                                                <a class="nav-link active" id="v-pills-family-tab" data-toggle="pill"
                                                    href="#v-pills-family" role="tab" aria-controls="v-pills-family"
                                                    aria-selected="true">Family</a>
                                                <p>Вертикальные установки с рекуперацией тепла</p>
                                                <a class="nav-link" id="v-pills-ltr-tab" data-toggle="pill"
                                                    href="#v-pills-ltr" role="tab" aria-controls="v-pills-ltr"
                                                    aria-selected="false">LTR</a>
                                                <p>Горизонтальные установки с рекуперацией тепла</p>
                                                <a class="nav-link" id="v-pills-hp-tab" data-toggle="pill"
                                                    href="#v-pills-hp" role="tab" aria-controls="v-pills-hp"
                                                    aria-selected="false">HP</a>
                                                <p>Установки со встроенным тепловым насосом</p>
                                                <a class="nav-link" id="v-pills-hp-tab-1" data-toggle="pill"
                                                    href="#v-pills-hp-1" role="tab" aria-controls="v-pills-hp-1"
                                                    aria-selected="false">ComfoAir Q</a>
                                                <p>Немецкие установки Zehnder</p>
                                            </div>
                                        </div>
                                        <div class="nav-tab__info col-sm-9">
                                            <div class="row">
                                                <div class="tab-content w-100" id="v-pills-tabContent">
                                                    <div class="tab-pane fade row show active" id="v-pills-family"
                                                        role="tabpanel" aria-labelledby="v-pills-family-tab">
                                                        <div class="col-sm-8">
                                                            <img src="<?php bloginfo('template_directory'); ?>/img/page-engineering/block/family.png"
                                                                class="img-fluid">
                                                            <figcaption>Enervent Pinion<span><a
                                                                        href="http://www.enervent-russia.ru/vertikalnye-pritochno-vytyazhnye-ustanovki.html"
                                                                        target="_blank">Подробнее</a></span>
                                                            </figcaption>
                                                        </div>
                                                        <div class="advantages advantages--family col-sm-4">
                                                            <ul>
                                                                <li>Защита от обмерзания</li>
                                                                <li>Максимальный возврат влаги в помещение</li>
                                                                <li>Эффективная рекуперация холода</li>
                                                                <li>Отсутствие смешения потоков</li>
                                                                <li class="red-text">Не нужен отвод конденсата</li>
                                                                <li class="red-text">Компактные размеры</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade row" id="v-pills-ltr" role="tabpanel"
                                                        aria-labelledby="v-pills-ltr-tab">
                                                        <div class="col-sm-8">
                                                            <img src="<?php bloginfo('template_directory'); ?>/img/page-engineering/block/recup-img.png"
                                                                class="img-fluid">
                                                            <figcaption>Enervent LTR<span><a
                                                                        href="http://www.enervent-russia.ru/podvesnye-gorizontalnye-pritochno-vytyazhnye-ustanovki.html"
                                                                        target="_blank">Подробнее</a></span>
                                                            </figcaption>
                                                        </div>
                                                        <div class="advantages advantages--ltr col-sm-4">
                                                            <ul>
                                                                <li>Защита от обмерзания</li>
                                                                <li>Максимальный возврат влаги в помещение</li>
                                                                <li>Эффективная рекуперация холода</li>
                                                                <li>Отсутствие смешения потоков</li>
                                                                <li class="red-text">Не нужен отвод конденсата</li>
                                                                <li class="red-text">Монтаж в холодном помещении
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade row" id="v-pills-hp" role="tabpanel"
                                                        aria-labelledby="v-pills-hp-tab">
                                                        <div class="col-sm-8">
                                                            <img src="<?php bloginfo('template_directory'); ?>/img/page-engineering/block/hp.png"
                                                                class="img-fluid">
                                                            <figcaption>Enervent HP<span><a
                                                                        href="http://www.enervent-russia.ru/ustanovki-s-teplovym-nasosom-obogrev-i-ohlazhdenie.html"
                                                                        target="_blank">Подробнее</a></span>
                                                            </figcaption>
                                                        </div>
                                                        <div class="advantages advantages--hp col-sm-4">
                                                            <ul>
                                                                <li>Защита от обмерзания</li>
                                                                <li>Максимальный возврат влаги в помещение</li>
                                                                <li>Эффективная рекуперация холода</li>
                                                                <li>Отсутствие смешения потоков</li>
                                                                <li class="red-text">Активное
                                                                    охлаждение/кондиционирование</li>
                                                                <li class="red-text">Максимально экономичные</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade row" id="v-pills-hp-1" role="tabpanel"
                                                        aria-labelledby="v-pills-hp-tab">
                                                        <div class="col-sm-8">
                                                            <img src="<?php bloginfo('template_directory'); ?>/img/page-engineering/block/comfoq.png"
                                                                class="img-fluid">
                                                            <figcaption>Сomfoair Q<span><a
                                                                        href="http://www.enervent-russia.ru/ustanovki-s-teplovym-nasosom-obogrev-i-ohlazhdenie.html"
                                                                        target="_blank">Подробнее</a></span>
                                                            </figcaption>
                                                        </div>
                                                        <div class="advantages advantages--hp-1 col-sm-4">
                                                            <ul>
                                                                <li>Автоматический контроль температуры и влажности
                                                                </li>
                                                                <li>До 3 раз тише обычной установки </li>
                                                                <li>Рекуперация до 89% тепла или холода </li>
                                                                <li>Технология Plug&Play - быстрая установка и настройка
                                                                </li>
                                                                <li>Фильтры тонкой очистки воздуха G4 и
                                                                    F7</li>
                                                                <li>Швейцарское качество и комфорт в
                                                                    управлении</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Recuperation Tab End -->
                            <div class="tab-pane fade" id="nav-airdist" role="tabpanel"
                                aria-labelledby="nav-airdist-tab">
                                <!-- Air Distribution Tab Start -->
                                <div class="nav-tab__item">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="nav-tab__left-menu">
                                                <div class="left-menu__item left-menu__item-top">
                                                    <div class="nav flex-column nav-pills" id="v-pills-tab-airdist"
                                                        role="tablist" aria-orientation="vertical">
                                                        <a class="nav-link active" id="v-pills-klimaflex-tab"
                                                            data-toggle="pill" href="#v-pills-klimaflex" role="tab"
                                                            aria-controls="v-pills-klimaflex"
                                                            aria-selected="true">KLIMAFLEX</a>
                                                        <p>Европейский подход</p>
                                                        <a class="nav-link" id="v-pills-uponor-tab" data-toggle="pill"
                                                            href="#v-pills-uponor" role="tab"
                                                            aria-controls="v-pills-uponor"
                                                            aria-selected="false">UPONOR</a>
                                                        <p>Инновационные решения</p>
                                                        <a class="nav-link" id="v-pills-lindab-tab" data-toggle="pill"
                                                            href="#v-pills-lindab" role="tab"
                                                            aria-controls="v-pills-lindab"
                                                            aria-selected="false">LINDAB</a>
                                                        <p>Качественная классика</p>
                                                        <a class="nav-link" id="v-pills-lindab-tab-1" data-toggle="pill"
                                                            href="#v-pills-lindab-1" role="tab"
                                                            aria-controls="v-pills-lindab-1"
                                                            aria-selected="false">COMFOTUBE</a>
                                                        <p>Комплекты Zehnder</p>
                                                    </div>
                                                </div>
                                                <div class="left-menu__item left-menu__item-bottom">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nav-tab__info col-sm-9">
                                            <div class="row">
                                                <div class="tab-content w-100" id="v-pills-tabContent">
                                                    <div class="tab-pane fade show active" id="v-pills-klimaflex"
                                                        role="tabpanel" aria-labelledby="v-pills-klimaflex-tab">
                                                        <div class="col-sm-8">
                                                            <img src="<?php bloginfo('template_directory'); ?>/img/page-engineering/block/klimaflex-img.png"
                                                                class="img-fluid">
                                                            <figcaption>Klimaflex <span><a
                                                                        href="http://ventmax-market.ru/sistemy-vozduhovodov-klimaflex/"
                                                                        target="_blank">Подробнее</a></span>
                                                            </figcaption>
                                                        </div>
                                                        <div class="advantages advantages--klimaflex col-sm-4">
                                                            <ul>
                                                                <li>Антибактериальное покрытие Ultra-Fresh</li>
                                                                <li>Быстрый монтаж</li>
                                                                <li>Минимальные занижение потолка</li>
                                                                <li>Равномерное распределение воздуха</li>
                                                                <li>Низкие потери давления</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="v-pills-uponor" role="tabpanel"
                                                        aria-labelledby="v-pills-uponor-tab">
                                                        <div class="col-sm-8">
                                                            <img src="<?php bloginfo('template_directory'); ?>/img/page-engineering/block/uponor-img.png"
                                                                class="img-fluid">
                                                            <figcaption>UPONOR <span><a
                                                                        href="http://ventmax-market.ru/ventilyaciya-uponor/"
                                                                        target="_blank">Подробнее</a></span>
                                                            </figcaption>
                                                        </div>
                                                        <div class="advantages advantages--uponor col-sm-4">
                                                            <ul>
                                                                <li>Класс чистоты М1</li>
                                                                <li>Антистатические покрытие</li>
                                                                <li>Быстрый монтаж</li>
                                                                <li>Низкие потери давления</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="v-pills-lindab" role="tabpanel"
                                                        aria-labelledby="v-pills-lindab-tab">
                                                        <div class="col-sm-8">
                                                            <img src="<?php bloginfo('template_directory'); ?>/img/page-engineering/block/lindab-img.png"
                                                                class="img-fluid">
                                                            <figcaption>Lindab <span><a
                                                                        href="http://ventmax-market.ru/ventilyaciya-lindab/"
                                                                        target="_blank">Подробнее</a></span>
                                                            </figcaption>
                                                        </div>
                                                        <div class="advantages advantages--lindab col-sm-4">
                                                            <ul>
                                                                <li>Герметичные соединения</li>
                                                                <li>Отличная цена</li>
                                                                <li>Европейское качество</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="v-pills-lindab-1" role="tabpanel"
                                                        aria-labelledby="v-pills-lindab-tab">
                                                        <div class="col-sm-8">
                                                            <img src="<?php bloginfo('template_directory'); ?>/img/page-engineering/block/comfotube.png"
                                                                class="img-fluid">
                                                            <figcaption>Comfotube <span><a
                                                                        href="http://ventmax-market.ru/ventilyaciya-lindab/"
                                                                        target="_blank">Подробнее</a></span>
                                                            </figcaption>
                                                        </div>
                                                        <div class="advantages advantages--lindab-1 col-sm-4">
                                                            <ul>
                                                                <li>Не подвержены коррозии
                                                                </li>
                                                                <li>Опуски потолков 10 см,
                                                                    монтаж в стяжку пола
                                                                </li>
                                                                <li>
                                                                    Минимальные потери давления
                                                                </li>
                                                                <li>
                                                                    Подходят для реконструкции
                                                                    старых зданий
                                                                </li>
                                                                <li>
                                                                    Можно комбинировать
                                                                    с круглыми воздуховодами
                                                                </li>
                                                                <li>
                                                                    Полный комплект аксессуаров
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Air Distribution Tab End -->
                            <div class="tab-pane fade" id="nav-control" role="tabpanel"
                                aria-labelledby="nav-control-tab">
                                <!-- Control Tab Start -->
                                <div class="nav-tab__item">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="nav-tab__left-menu">
                                                <div class="left-menu__item left-menu__item-top">
                                                    <div class="nav flex-column nav-pills" id="v-pills-tab-control"
                                                        role="tablist" aria-orientation="vertical">
                                                        <a class="nav-link active" id="v-pills-eair-tab"
                                                            data-toggle="pill" href="#v-pills-eair" role="tab"
                                                            aria-controls="v-pills-eair" aria-selected="true">eAir</a>
                                                        <p>Максимальные возможности</p>
                                                        <a class="nav-link" id="v-pills-ewind-tab" data-toggle="pill"
                                                            href="#v-pills-ewind" role="tab"
                                                            aria-controls="v-pills-ewind"
                                                            aria-selected="false">eWind</a>
                                                        <p>Финский минимализм</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nav-tab__info col-sm-9">
                                            <div class="row">
                                                <div class="tab-content w-100" id="v-pills-tabContent">
                                                    <div class="tab-pane fade show active" id="v-pills-eair"
                                                        role="tabpanel" aria-labelledby="v-pills-eair-tab">
                                                        <div class="col-sm-8">
                                                            <img src="<?php bloginfo('template_directory'); ?>/img/page-engineering/block/eair-img.png">
                                                            <figcaption>eAir <span><a
                                                                        href="http://www.enervent-russia.ru/prostoe-i-udobnoe-upravlenie-klimatom-eair-i-ewind.html"
                                                                        target="_blank">Подробнее</a></span>
                                                            </figcaption>
                                                        </div>
                                                        <div class="advantages advantages--eair col-sm-4">
                                                            <ul>
                                                                <li>Информативный дисплей</li>
                                                                <li>Функции ускорения и избыточного давления</li>
                                                                <li>Компенсация вытяжного зонта</li>
                                                                <li>Функция розжига камина</li>
                                                                <li>Годовой и недельный таймер</li>
                                                                <li>Управление через интернет</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="v-pills-ewind" role="tabpanel"
                                                        aria-labelledby="v-pills-ewind-tab">
                                                        <div class="col-sm-8">
                                                            <img src="<?php bloginfo('template_directory'); ?>/img/page-engineering/block/ewind-img.png"
                                                                class="tab-img">
                                                            <img src="<?php bloginfo('template_directory'); ?>/img/page-engineering/block/smartphonenew.png"
                                                                class="tab-img">
                                                            <figcaption>eWind <span><a
                                                                        href="http://www.enervent-russia.ru/prilozhenie-ewind-vozmi-kontrol-nad-svoej-ustanovkoj.html"
                                                                        target="_blank">Подробнее</a></span>
                                                            </figcaption>
                                                        </div>
                                                        <div class="advantages advantages--ewind col-sm-4">
                                                            <ul>
                                                                <li>4 режима предустановленных режима</li>
                                                                <li>Регулирование температуры</li>
                                                                <li>Функции ускорения и избыточного давления</li>
                                                                <li>Функция розжига камина</li>
                                                                <li>Мобильное приложение</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Control Tab End -->
                            <div class="tab-pane fade" id="nav-equipment" role="tabpanel"
                                aria-labelledby="nav-equipment-tab">
                                <!-- Equipment Tab Start -->
                                <div class="nav-tab__item">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="nav-tab__left-menu">
                                                <div class="left-menu__item left-menu__item-top">
                                                    <div class="nav flex-column nav-pills" id="v-pills-tab-control"
                                                        role="tablist" aria-orientation="vertical">
                                                        <a class="nav-link active" id="v-pills-purification-tab"
                                                            data-toggle="pill" href="#v-pills-purification" role="tab"
                                                            aria-controls="v-pills-purification"
                                                            aria-selected="true">Очистка</a>
                                                        <p>Высокоэффективные фильтры</p>
                                                        <a class="nav-link" id="v-pills-humidify-tab" data-toggle="pill"
                                                            href="#v-pills-humidify" role="tab"
                                                            aria-controls="v-pills-humidify"
                                                            aria-selected="false">Увлажнение</a>
                                                        <p>Комфортная влажность круглый год</p>
                                                        <a class="nav-link" id="v-pills-chill-tab" data-toggle="pill"
                                                            href="#v-pills-chill" role="tab"
                                                            aria-controls="v-pills-chill"
                                                            aria-selected="false">Охлаждение</a>
                                                        <p>Комфортное кондиционирование</p>
                                                    </div>
                                                </div>
                                                <div class="left-menu__item left-menu__item-bottom">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nav-tab__info col-sm-9">
                                            <div class="row">
                                                <div class="tab-content w-100" id="v-pills-tabContent">
                                                    <div class="tab-pane fade show active" id="v-pills-purification"
                                                        role="tabpanel" aria-labelledby="v-pills-purification-tab">
                                                        <div class="col-sm-8">
                                                            <img
                                                                src="<?php bloginfo('template_directory'); ?>/img/page-engineering/block/equipment-purification-img.png">
                                                            <figcaption>Elixair E1250 <span><a
                                                                        href="http://ventmax-market.ru/ventilyacionnye-resheniya-enervent/elektrostaticheskie-filtry-elixair/"
                                                                        target="_blank">Подробнее</a></span>
                                                            </figcaption>
                                                        </div>
                                                        <div class="advantages advantages--purification col-sm-4">
                                                            <ul>
                                                                <li>Удаление химических примесей</li>
                                                                <li>Устранение запахов</li>
                                                                <li>Ароматизация воздуха</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="v-pills-humidify" role="tabpanel"
                                                        aria-labelledby="v-pills-humidify-tab">
                                                        <div class="col-sm-8">
                                                            <img
                                                                src="<?php bloginfo('template_directory'); ?>/img/page-engineering/block/equipment-humidify-img.png">
                                                            <figcaption>Система увлажнения <span><a
                                                                        href="http://ventmax-market.ru/uvlazhnenie-condair/"
                                                                        target="_blank">Подробнее</a></span>
                                                            </figcaption>
                                                        </div>
                                                        <div class="advantages advantages--humidify col-sm-4">
                                                            <ul>
                                                                <li>Автоматическое поддержание влажности</li>
                                                                <li>Увлажнение приточного воздуха</li>
                                                                <li>Независимые форсуночные системы</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="v-pills-chill" role="tabpanel"
                                                        aria-labelledby="v-pills-chill-tab">
                                                        <div class="col-sm-8">
                                                            <img
                                                                src="<?php bloginfo('template_directory'); ?>/img/page-engineering/block/equipment-chill-img.png">
                                                            <figcaption>Система увлажнения <span><a
                                                                        href="http://ventmax-market.ru/multi-split-sistemy-daikin/"
                                                                        target="_blank">Подробнее</a></span>
                                                            </figcaption>
                                                        </div>
                                                        <div class="advantages advantages--chill col-sm-4">
                                                            <ul>
                                                                <li>Канальное скрытое кондиционирование</li>
                                                                <li>Охлаждение приточного воздуха</li>
                                                                <li>Мультизональные системы</li>
                                                                <li>Холодные потолки</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Equipment Tab End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container End -->
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
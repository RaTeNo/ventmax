<?php
/*
Template Name: Контакты
*/
?>
<?php get_header(); ?>
    <section class="contacts">
        <div class="container">
            <div class="hedding">
                <div class="hedding-title">Контакты</div>
            </div>
            <div class="contacts-wrapper">
                <div class="contacts-data">
                    <div class="contacts-list">
                        <div class="contacts-item">
                            <div class="contacts-item__icon im-font icon-phone"></div>
                            <div class="contacts-item__description">
                                <p>+8 499 110-59-98</p>
                            </div>
                        </div>
                        <div class="contacts-item">
                            <div class="contacts-item__icon im-font icon-location"></div>
                            <div class="contacts-item__description">
                                <p>Москва, Зеленоград, <br> проезд 4807, 1, строение 2</p>
                            </div>
                        </div>
                        <div class="contacts-item">
                            <div class="contacts-item__icon im-font icon-mail"></div>
                            <div class="contacts-item__description">
                                <p>info@ventmax-home.ru</p>
                            </div>
                        </div>
                        <a href="#map" class="btn-def btn-def__contacts btn-def__contacts_first active">
                            Показать на карте
                        </a>
                    </div>
                    <div class="contacts-list">
                        <div class="contacts-item">
                            <div class="contacts-item__icon im-font icon-phone"></div>
                            <div class="contacts-item__description">
                                <p>+7 812 679-79-98</p>
                            </div>
                        </div>
                        <div class="contacts-item">
                            <div class="contacts-item__icon im-font icon-location"></div>
                            <div class="contacts-item__description">
                                <p>198216 Санкт-Петербург, <br> проспект Народного ополчения, 22</p>
                            </div>
                        </div>
                        <div class="contacts-item">
                            <div class="contacts-item__icon im-font icon-mail"></div>
                            <div class="contacts-item__description">
                                <p>info@ventmax-home.ru</p>
                            </div>
                        </div>
                        <a href="#map"
                            class="btn-def btn-def__contacts btn-def__contacts_after  btn-def__contacts_second">
                            Показать на карте
                        </a>
                    </div>
                </div>
                <div class="contacts-forma">
                    <?php echo do_shortcode('[contact-form-7 id="5" title="Подвал форма"]'); ?>
                </div>
            </div>
            <div class="map-wrapper map-wrapper__contacts">
                <div class="map map__contacts" id="map"></div>
            </div>
            <div class="contacts-content">
                <div class="contacts-block">
                    <div class="contacts-piece__main">
                        <div class="contacts-tittle">
                            ООО «ВентМакс»
                        </div>
                        <p class="contacts__text">
                            VentMax
                        </p>
                        <div class="contacts-tittle">
                            Юридический адрес:
                        </div>
                        <p class="contacts__text">
                            124489, г. Москва, г. Зеленоград, проезд 4807, дом 1, строение 9
                        </p>
                        <div class="contacts-tittle">
                            Фактический адрес:
                        </div>
                        <p class="contacts__text">
                            124489, г. Москва, г. Зеленоград, проезд 4807, дом 1, строение 9
                        </p>
                    </div>
                    <div class="contacts-piece">
                        <p class="contacts__text">
                            Р/с 40702810338150007790
                        </p>
                        <p class="contacts__text">
                            в «Сбербанк России» (ПАО) г. Москва
                        </p>
                        <p class="contacts__text">
                            к/с 30101810400000000225
                        </p>
                        <p class="contacts__text">
                            БИК 044525225
                        </p>
                    </div>
                    <div class="contacts-piece">
                        <p class="contacts__text">
                            Генеральный директор:
                        </p>
                        <div class="contacts-tittle">
                            Лысак Сергей Леонидович
                        </div>
                    </div>
                    <div class="contacts-piece">
                        <p class="contacts__text">
                            Главный бухгалтер
                        </p>
                        <div class="contacts-tittle">
                        Давыдова Светлана Анатольевна
                        </div>
                    </div>
                </div>
                <div class="contacts-block">
                    <div class="contacts-piece">
                        <div class="contacts-tittle">
                            Дата регистрации:
                        </div>
                        <p class="contacts__text">
                            04 марта 2011
                        </p>
                        <p class="contacts__text">
                            ОГРН 1117746159464
                        </p>
                        <p class="contacts__text">
                            ИНН 7735575985
                        </p>
                        <p class="contacts__text">
                            КПП 773501001
                        </p>
                    </div>
                    <div class="contacts-piece">
                        <p class="contacts__text">
                            ОКПО 90603156
                        </p>
                        <p class="contacts__text">
                            ОКОГУ 49014
                        </p>
                        <p class="contacts__text">
                            ОКАТО 45272568000
                        </p>
                        <p class="contacts__text">
                            ОКТМО 45377000
                        </p>
                        <p class="contacts__text">
                            ОКФС 16
                        </p>
                        <p class="contacts__text">
                            ОКОПФ 65
                        </p>
                        <p class="contacts__text">
                            ОКВЭД 45.34
                        </p>
                    </div>
                    <div class="contacts-piece">
                        <p class="contacts__text">
                            29.23 45.21.4 45.33 51.65 52.45 52.72.2 71.34 74.20.15 74.3
                        </p>
                    </div>
                </div>
            </div>
    </section>
<?php get_footer(); ?>
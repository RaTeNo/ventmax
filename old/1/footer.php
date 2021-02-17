    <section class="contact-section contact-section--with-form">
        <div class="container">
            <div class="hedding">
                <div class="hedding-title">Всегда на связи</div>
            </div>
            <div class="contact-with-form__wrapper row">
                <div class="contact-with-form__col col-12 col-lg-4 order-2 order-lg-1">
                    <?php echo do_shortcode('[contact-form-7 id="5" title="Подвал форма"]'); ?>
                </div>
                <div class="contact-with-form__col col-12 col-lg-8 order-1 order-lg-2">
                    <div class="map-wrapper order-2 order-lg-1">
                        <div class="map" id="map"></div>
                </div>
                    <div class="contact-list order-1 order-lg-2">
                        <div class="contact-item">
                            <div class="contact-item__icon im-font icon-phone"></div>
                            <div class="contact-item__description">
                                <p>8 800 500-23-96</p>
                                <p>8 499 110-59-98</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-item__icon im-font icon-location"></div>
                            <div class="contact-item__description">
                                <p>Москва, Зеленоград, <br> проезд 4807, 1, строение 2</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-item__icon im-font icon-mail"></div>
                            <div class="contact-item__description">
                                <p>info@ventmax-home.ru</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
<a href="#" class="btn-fixed btn-fixed--left btn-to-top hidden">
    <span class="im-font icon-arrow-up"></span>
</a>
<a href="#" class="btn-fixed btn-fixed--right btn-call">
    <span class="im-font icon-phone-simple"></span>
</a>
	<footer class="footer white-text">
		<div class="container">
			<div class="row footer-top">
				<div class="col-lg-3 col-md-3">
					<div class="footer-col">
						<div class="footer-col-title">Услуги</div>
            <?php wp_nav_menu( array( 
              'theme_location' => 'footer_serv',
              'fallback_cb'=> '',
              'container' => '',
              'menu_class' => '',
             ) ); ?>
					</div>
				</div>
				<div class="col-lg-3 col-md-3">
					<div class="footer-col">
						<div class="footer-col-title">Направления</div>
            <?php wp_nav_menu( array( 
              'theme_location' => 'footer_napr',
              'fallback_cb'=> '',
              'container' => '',
              'menu_class' => '',
             ) ); ?>
					</div>
				</div>
				<div class="col-lg-3 col-md-3">
					<div class="footer-col">
						<div class="footer-col-title">Статьи</div>
            <?php wp_nav_menu( array( 
              'theme_location' => 'footer_stat',
              'fallback_cb'=> '',
              'container' => '',
              'menu_class' => '',
             ) ); ?>
					</div>
				</div>
				<div class="col-lg-3 col-md-3">
					<div class="footer-col">
						<div class="footer-col-title">О компании</div>
            <?php wp_nav_menu( array( 
              'theme_location' => 'footer_about',
              'fallback_cb'=> '',
              'container' => '',
              'menu_class' => '',
             ) ); ?>
					</div>
				</div>
			</div>
			<div class="footer-bottom">
				<div class="footer-bottom-title">Группа компаний «Вентмакс»</div>
				<div class="footer-wrapper">
					<div class="footer-col"><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/company-logo-b-1.png" alt=""></a></div>
					<div class="footer-col"><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/company-logo-b-2.png" alt=""></a></div>
					<div class="footer-col"><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/company-logo-b-3.png" alt=""></a></div>
					<div class="footer-col"><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/company-logo-b-4.png" alt=""></a></div>
				</div>
			</div>
		</div>	
	</footer>
	<script src="<?php bloginfo('template_directory'); ?>/js/scripts.min.js"></script>
	<script src="https://api-maps.yandex.ru/2.1/?lang=ru_ru&apikey=7494e3e7-008f-4e03-bd72-31a4650591f7" type="text/javascript"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/common.js"></script> 
  <?php wp_footer(); ?>
</body>
</html>
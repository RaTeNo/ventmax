<?php
/*
Template Name: Главная
*/
?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<section class="main-banner">
	<div class="container">
		<div class="main-banner__wrapper">
			<h1 class="main-banner__title">СИСТЕМЫ ВЕНТИЛЯЦИИ <span>VENTMAX</span></h1>
			<ul class="main-banner__list">
				<li>Энергоэффективная вентиляция для дома и бассейна</li>
				<li> Комфортное увлажнение <br> и кондиционирование воздуха</li>
			</ul>
			<div class="main-banner__btn">
				<a data-fancybox data-src="#modal-contact-form" href="javascript:;" class="btn-def btn-def--bg-green"><span>расчёт стоимости</span></a>
				<p>Свежий воздух для вашего здоровья</p>
			</div>
		</div>
	</div>
</section>
<section class="service-section">
	<div class="container">
		<div class="hedding hedding--white-text">
			<div class="hedding-title">ПОЛНЫЙ СПЕКТР УСЛУГ</div>
			<div class="hedding-description">Финская вентиляция премиум класса для дома и квартиры</div>
		</div>
		<div class="service-wrapper">
			<div class="service-item">
				<a href="/?p=90">
					<div class="service-item__icon">
					<img src="<?php bloginfo('template_directory'); ?>/img/service-icon-1.png" alt=""></div>
					<div class="service-item__title">Энергоэффективная вентиляция</div>
				</a>
			</div>
			<div class="service-item">
				<a href="/?p=92">
					<div class="service-item__icon"><img src="<?php bloginfo('template_directory'); ?>/img/service-icon-2.png" alt=""></div>
					<div class="service-item__title">Комфортное кондиционирование</div>
				</a>
			</div>
			<div class="service-item">
				<a href="/?p=94">
					<div class="service-item__icon"><img src="<?php bloginfo('template_directory'); ?>/img/service-icon-3.png" alt=""></div>
					<div class="service-item__title">Увлажнение воздуха</div>
				</a>
			</div>
			<div class="service-item">
				<a href="/?p=96">
					<div class="service-item__icon"><img src="<?php bloginfo('template_directory'); ?>/img/service-icon-4.png" alt=""></div>
					<div class="service-item__title">Вентиляция бассейна</div>
				</a>
			</div>
		</div>
		<div class="service-options white-text">
			<div class="service-options-description">
				Профессиональные услуги с гарантией качества от сертифицированных специалиств: инженеров, проектировщиков, монтажников
			</div>
			<div class="service-options-wrapper">
				<div class="service-options-item">
					<div class="service-options-item__icon">
						<a href="/?cat=10">
							<img src="<?php bloginfo('template_directory'); ?>/img/service-options-icon-1.png" class="default" alt="">
							<img src="<?php bloginfo('template_directory'); ?>/img/service-options-icon-1-active.png" class="active" alt="">
						</a>
					</div>
					<div class="service-options-item__name"><a href="/?cat=10">Проект</a></div>
				</div>
				<div class="service-options-item active">
					<div class="service-options-item__icon">
						<a href="/?cat=11">
							<img src="<?php bloginfo('template_directory'); ?>/img/service-options-icon-2.png" class="default" alt="">
							<img src="<?php bloginfo('template_directory'); ?>/img/service-options-icon-2-active.png" class="active" alt="">
						</a>
					</div>
					<div class="service-options-item__name"><a href="/?cat=11">Монтаж</a></div>
				</div>
				<div class="service-options-item">
					<div class="service-options-item__icon">
						<a href="/?cat=12">
							<img src="<?php bloginfo('template_directory'); ?>/img/service-options-icon-3.png" class="default" alt="">
							<img src="<?php bloginfo('template_directory'); ?>/img/service-options-icon-3-active.png" class="active" alt="">
						</a>
					</div>
					<div class="service-options-item__name"><a href="/?cat=12">Сервис</a></div>
				</div>
				<div class="service-options-item">
					<div class="service-options-item__icon">
						<a href="/?cat=13">
							<img src="<?php bloginfo('template_directory'); ?>/img/service-options-icon-4.png" class="default" alt="">
							<img src="<?php bloginfo('template_directory'); ?>/img/service-options-icon-4-active.png" class="active" alt="">
						</a>
					</div>
					<div class="service-options-item__name"><a href="/?cat=13">Экспертиза</a></div>
				</div>
			</div>	
		</div>

	</div>
</section>

<section class="advantages-section">
	<div class="container">
		<div class="hedding">
			<div class="hedding-title">качество воздуха = качество жизни </div>
			<div class="hedding-description">Активность, трудоспособность, здоровье и долголетие</div>
		</div>
	</div>
	<div class="advantages-wrapper white-text">
		<div class="advantages__img"><img src="<?php bloginfo('template_directory'); ?>/img/girl.png" alt=""></div>
		<div class="container">
			<div class="advantages-panel advantages-panel-top">
				<div class="title">AQI — индекс качества воздуха</div>
				<div class="description">и другие важные атмосферные показатели</div>	
			</div>
			<div class="advantages-panel advantages-panel-middle">
				<div class="advantages-items">
					<div class="advantages-item">
						<a href="#">
							<div class="advantages-item__title">Частицы PM2.5 (AQI)</div>
							<div class="advantages-item__value"> <23 </div>
							<div class="advantages-item__parameter">мкг/м3</div>
						</a>
					</div>
					<div class="advantages-item">
						<a href="#">
							<div class="advantages-item__title">Концентрация CO2</div>
							<div class="advantages-item__value"> <800 </div>
							<div class="advantages-item__parameter">ppm</div>
						</a>
					</div>
					<div class="advantages-item">
						<a href="#">
							<div class="advantages-item__title">Температурный  режим</div>
							<div class="advantages-item__value"> 20–23 </div>
							<div class="advantages-item__parameter">t °C</div>
						</a>
					</div>
					<div class="advantages-item">
						<a href="#">
							<div class="advantages-item__title">Относительная  влажность воздуха</div>
							<div class="advantages-item__value"> 40–60 </div>
							<div class="advantages-item__parameter">%</div>
						</a>
					</div>
				</div>
			</div>
			<div class="advantages-panel advantages-panel-bottom">
				<p>
					Достижение здоровых параметров воздуха возможно
					благодаря современным системам вентиляции. Они обеспечивают необходимый воздухообмен,
					уровень влажности и фильтрацию
				</p>
			</div>
		</div>
	</div>
</section>

<section class="team-section">
	<div class="container">
		<div class="hedding">
			<div class="hedding-title">Команда профессионалов</div>
		</div>
		<div class="tabs">
			<ul class="tabs-nav">
				<li class="active">Команда</li>
				<li>Компания</li>
				<li>Шоурум</li>
				<li>Сертификаты</li>
			</ul>
			<div class="tabs-content">
				<div class="tab show">

					<div class="member-item-information member-item-information--mobile">
						<div class="member-item-information__title"><?php the_field('main_com_title'); ?></div>
						<div class="member-item-information__text">
							<p><?php the_field('main_com_text'); ?></p>
						</div>
					</div>

					<div class="tab-label">Команда</div>

					<div class="member-item">
						<div class="member-item-col">
              <?php $frst=1; if( have_rows('main_com_r') ): while( have_rows('main_com_r') ) : the_row(); ?>
              <?php if($frst==1) { ?>
							<div class="member-item__img"><img src="<?php the_sub_field('main_com_r_i'); ?>" alt=""></div>
							<div class="member-item__title"><?php the_sub_field('main_com_r_t'); ?></div>
							<div class="member-item__description"><?php the_sub_field('main_com_r_d'); ?></div>
							<?php } ?>
							<?php $frst++; endwhile; endif; ?>
						</div>
						<div class="member-item-col">
							<div class="member-item-information">
								<div class="member-item-information__title"><?php the_field('main_com_title'); ?></div>
								<div class="member-item-information__text">
                  <p><?php the_field('main_com_text'); ?></p>
								</div>
							</div>
							<div class="member-thumbs-wrapper">
                <?php $frst=1; if( have_rows('main_com_r') ): while( have_rows('main_com_r') ) : the_row(); ?>
								<div class="member-thumbs <?php if($frst==1) { echo 'active'; } ?>">
									<div class="member-thumbs__img"><img src="<?php the_sub_field('main_com_r_i'); ?>" alt=""></div>
									<div class="member-thumbs__description">
										<div class="name"><?php the_sub_field('main_com_r_t'); ?></div>
										<div class="status"><?php the_sub_field('main_com_r_d'); ?></div>
<div class="memb_title"><?php the_sub_field('main_com_r_title'); ?></div>
<div class="memb_text"><?php the_sub_field('main_com_r_text'); ?></div>
									</div>
								</div>
                <?php $frst++; endwhile; endif; ?>
							</div>
						</div>
					</div>

					<div class="swiper-container member-slider">
						<div class="swiper-wrapper">
              <?php if( have_rows('main_com_r') ): while( have_rows('main_com_r') ) : the_row(); ?>
							<div class="swiper-slide">
								<div class="member-item__img"><img src="<?php the_sub_field('main_com_r_i'); ?>" alt=""></div>
								<div class="member-item__title"><?php the_sub_field('main_com_r_t'); ?></div>
								<div class="member-item__description"><?php the_sub_field('main_com_r_d'); ?></div>
							</div>
							<?php endwhile; endif; ?>
						</div>
						<div class="swiper-button-prev"></div>
						<div class="swiper-button-next"></div>
					</div>
				</div>
				<div class="tab">
					<div class="tab-label">Компания</div>
					<div class="company-wrapper">
						<div class="panel-tab-top"><?php the_field('main_komp_top'); ?></div>
						<div class="company-slider swiper-container">
							<div class="swiper-wrapper">
                <?php if( have_rows('main_komp_r') ): while( have_rows('main_komp_r') ) : the_row(); ?>
                  <div class="swiper-slide">
                    <div class="company-item" style="background-image: url(<?php the_sub_field('main_komp_r_i'); ?>);">
                      <div class="company-item__name"><?php the_sub_field('main_komp_r_t'); ?></div>
                      <div class="company-item__number"><span><?php the_sub_field('main_komp_r_c'); ?></span></div>
                    </div>
                  </div>
                <?php endwhile; endif; ?>
							</div>
							<div class="swiper-button-prev"></div>
							<div class="swiper-button-next"></div>
						</div>
						<div class="panel-tab-bottom">
							<strong><?php the_field('main_komp_bot_1'); ?> </strong> <br>
							<?php the_field('main_komp_bot_2'); ?>
						</div>
					</div>
				</div>
				<div class="tab">
					<div class="company-wrapper">
						<div class="tab-label">Шоурум</div>
						<div class="panel-tab-top"><?php the_field('main_sho_top'); ?></div>
						<div class="showroom-slider swiper-container">
							<div class="swiper-wrapper">
                <?php if( have_rows('main_sho_r') ): while( have_rows('main_sho_r') ) : the_row(); ?>
								<div class="swiper-slide">
									<div class="showroom-item" style="background-image: url(<?php the_sub_field('main_sho_r_i'); ?>);"></div>
								</div>
                <?php endwhile; endif; ?>
							</div>
							<div class="swiper-button-prev"></div>
							<div class="swiper-button-next"></div>
						</div>
						<div class="panel-tab-bottom">
							<strong><?php the_field('main_sho_bot_1'); ?> </strong> <br>
							<?php the_field('main_sho_bot_2'); ?>
						</div>
					</div>
				</div>
				<div class="tab">
					<div class="company-wrapper">
						<div class="tab-label">Сертификаты</div>
						<div class="certificate-slider swiper-container">
							<div class="swiper-wrapper">
                <?php if( have_rows('main_sert_r') ): while( have_rows('main_sert_r') ) : the_row(); ?>
								<div class="swiper-slide">
									<div class="certificate-item">
										<div class="certificate-item__img" style="background-image: url(<?php the_sub_field('main_sert_r_is'); ?>);"><a href="<?php the_sub_field('main_sert_r_if'); ?>" data-fancybox="gallery"></a></div>
										<div class="certificate-item__title"><?php the_sub_field('main_sert_r_t'); ?></div>
									</div>
								</div>
                <?php endwhile; endif; ?>
							</div>
							<div class="swiper-button-prev"></div>
							<div class="swiper-button-next"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php include('part/project.php'); ?>
<section class="brend-section">
	<div class="container">
		<div class="hedding">
			<div class="hedding-title">Наши бренды</div>
			<div class="hedding-description">Только надежные и проверенные поставщики</div>
		</div>
	</div>
	<div class="brend-wrapper">
		<div class="brend-slider swiper-container">
			<div class="swiper-wrapper">
				<div class="swiper-slide">
					<div class="brend-img">
						<img src="<?php bloginfo('template_directory'); ?>/img/brend-1.png" alt="">
					</div>
				</div>
				<div class="swiper-slide">
					<div class="brend-img">
						<img src="<?php bloginfo('template_directory'); ?>/img/brend-2.png" alt="">
					</div>
				</div>
				<div class="swiper-slide">
					<div class="brend-img">
						<img src="<?php bloginfo('template_directory'); ?>/img/brend-3.jpg" alt="">
					</div>
				</div>
				<div class="swiper-slide">
					<div class="brend-img">
						<img src="<?php bloginfo('template_directory'); ?>/img/brend-4.png" alt="">
					</div>
				</div>
				<div class="swiper-slide">
					<div class="brend-img">
						<img src="<?php bloginfo('template_directory'); ?>/img/brend-5.png" alt="">
					</div>
				</div>
				<div class="swiper-slide">
					<div class="brend-img">
						<img src="<?php bloginfo('template_directory'); ?>/img/brend-6.png" alt="">
					</div>
				</div>
			</div>
			<div class="swiper-button-prev"></div>
			<div class="swiper-button-next"></div>
		</div>
	</div>
</section>

<?php include('part/blog.php'); ?>
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
<?php endwhile; endif; ?>
<?php get_footer(); ?>
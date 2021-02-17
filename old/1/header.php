<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
  <title><?php bloginfo('name'); wp_title(); ?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/img/favicon/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/fonts.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/all.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/main.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/slick.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/new.css">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
  <?php wp_head(); ?>
</head>
<body>
<header class="header">
	<div class="header-wrapper">
		<div class="logo">
			<a href="/"><img src="<?php bloginfo('template_directory'); ?>/img/svg/logo.svg" alt=""></a>
		</div>
		<nav class="menu-main">
      <?php echo str_replace('sub-menu', 'has-submenu',wp_nav_menu( array( 
        'before' => '<span>',
        'after' => '</span>',
        'theme_location' => 'primary',
        'fallback_cb'=> '',
        'container' => '',
        'menu_class' => '',
       ) ) ); ?>
		</nav>
		<div class="btn-menu-mobile"><span></span></div>
	</div>
</header>
<nav class="page-breadcrumbs">
    <ul class="breadcrumbs">
      <?php bcn_display(); ?>
    </ul>
</nav>
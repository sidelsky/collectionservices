<?php
use App\Helper\Page;
use App\Helper\Render;
use App\Helper\WordpressHelper;

use Theme\Model\Hero;
use Theme\Model\SubpageHero;

$page = new Page;
$render = new Render;
$hero = new Hero;
$subpageHero = new SubpageHero;
$wordpress = new WordpressHelper;

$directory_url = get_template_directory_uri();
?>

<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<title><?= $page->getPageTitle(); ?></title>

		<meta name="theme-color" content="#333">
		<meta charset="<?php bloginfo('charset'); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<link data-n-head="true" rel="icon" type="image/png" sizes="16x16" href="<?= $directory_url ?>/assets/build/img/favicon/favicon-16x16.png"/>
		<link data-n-head="true" rel="icon" type="image/png" sizes="32x32" href="<?= $directory_url ?>/assets/build/img/favicon/favicon-32x32.png"/>
		<link data-n-head="true" rel="icon" type="image/png" sizes="96x96" href="<?= $directory_url ?>/assets/build/img/favicon/favicon-96x96.png"/>

		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?> id="body">

	<?php
		/**
		 * Theme Data
		 */
		include('Theme/Data/en.php');
	?>


<main role="main" class="main">

<div class="c-mobile-navigation">
	<?php
		echo '<nav>';
			wp_nav_menu([
				'menu' => 'Primary navigation',
				'container' => '',
				'echo' => true,
				'items_wrap' => '<ul class="c-mobile-navigation__menu">%3$s</ul>'
			]); 
		echo '</nav>';
	?>
</div>

<div class="c-site-nav">

	<a class="c-hamburger js-hamburger">
		<span class="c-hamburger__bar"></span>
	</a>

	<svg class="c-site-nav__motief">
		<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-hwcs-motief" viewBox="0 0 32 32"></use>
	</svg>

</div>
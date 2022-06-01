<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, minimum-scale=1.0" >

		<link rel="profile" href="https://gmpg.org/xfn/11">

		<?php wp_head(); ?>
		<link href="https://tairatecnologia.com.br/bmc-consultoria/wp-content/themes/bmc-consultoria/css/bootstrap.min.css?v=<?= rand(10,100) ?>" rel="stylesheet">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<link rel="stylesheet" href="https://tairatecnologia.com.br/bmc-consultoria/wp-content/themes/bmc-consultoria/css/owl.carousel.min.css?v=<?= rand(10,100) ?>" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	
		<!-- FAVICON -->
		<link rel="apple-touch-icon-precomposed" sizes="57x57" href="https://tairatecnologia.com.br/bmc-consultoria/wp-content/themes/bmc-consultoria/assets/images/apple-touch-icon-57x57.png" />
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="https://tairatecnologia.com.br/bmc-consultoria/wp-content/themes/bmc-consultoria/assets/images/apple-touch-icon-114x114.png" />
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="https://tairatecnologia.com.br/bmc-consultoria/wp-content/themes/bmc-consultoria/assets/images/apple-touch-icon-72x72.png" />
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="https://tairatecnologia.com.br/bmc-consultoria/wp-content/themes/bmc-consultoria/assets/images/apple-touch-icon-144x144.png" />
		<link rel="apple-touch-icon-precomposed" sizes="60x60" href="https://tairatecnologia.com.br/bmc-consultoria/wp-content/themes/bmc-consultoria/assets/images/apple-touch-icon-60x60.png" />
		<link rel="apple-touch-icon-precomposed" sizes="120x120" href="https://tairatecnologia.com.br/bmc-consultoria/wp-content/themes/bmc-consultoria/assets/images/apple-touch-icon-120x120.png" />
		<link rel="apple-touch-icon-precomposed" sizes="76x76" href="https://tairatecnologia.com.br/bmc-consultoria/wp-content/themes/bmc-consultoria/assets/images/apple-touch-icon-76x76.png" />
		<link rel="apple-touch-icon-precomposed" sizes="152x152" href="https://tairatecnologia.com.br/bmc-consultoria/wp-content/themes/bmc-consultoria/assets/images/apple-touch-icon-152x152.png" />
		<link rel="icon" type="image/png" href="https://tairatecnologia.com.br/bmc-consultoria/wp-content/themes/bmc-consultoria/assets/images/favicon-196x196.png" sizes="196x196" />
		<link rel="icon" type="image/png" href="https://tairatecnologia.com.br/bmc-consultoria/wp-content/themes/bmc-consultoria/assets/images/favicon-96x96.png" sizes="96x96" />
		<link rel="icon" type="image/png" href="https://tairatecnologia.com.br/bmc-consultoria/wp-content/themes/bmc-consultoria/assets/images/favicon-32x32.png" sizes="32x32" />
		<link rel="icon" type="image/png" href="https://tairatecnologia.com.br/bmc-consultoria/wp-content/themes/bmc-consultoria/assets/images/favicon-16x16.png" sizes="16x16" />
		<link rel="icon" type="image/png" href="https://tairatecnologia.com.br/bmc-consultoria/wp-content/themes/bmc-consultoria/assets/images/favicon-128.png" sizes="128x128" />
		<meta name="application-name" content="&nbsp;"/>
		<meta name="msapplication-TileColor" content="#FFFFFF" />
		<meta name="msapplication-TileImage" content="https://tairatecnologia.com.br/bmc-consultoria/wp-content/themes/bmc-consultoria/assets/images/mstile-144x144.png" />
		<meta name="msapplication-square70x70logo" content="https://tairatecnologia.com.br/bmc-consultoria/wp-content/themes/bmc-consultoria/assets/images/mstile-70x70.png" />
		<meta name="msapplication-square150x150logo" content="https://tairatecnologia.com.br/bmc-consultoria/wp-content/themes/bmc-consultoria/assets/images/mstile-150x150.png" />
		<meta name="msapplication-wide310x150logo" content="https://tairatecnologia.com.br/bmc-consultoria/wp-content/themes/bmc-consultoria/assets/images/mstile-310x150.png" />
		<meta name="msapplication-square310x310logo" content="https://tairatecnologia.com.br/bmc-consultoria/wp-content/themes/bmc-consultoria/assets/images/mstile-310x310.png" />
		<!-- FAVICON -->

		<script src="https://tairatecnologia.com.br/bmc-consultoria/wp-content/themes/bmc-consultoria/js/jquery.min.js?v=<?= rand(10,100) ?>"></script>
		<script src="https://tairatecnologia.com.br/bmc-consultoria/wp-content/themes/bmc-consultoria/js/bootstrap.bundle.min.js?v=<?= rand(10,100) ?>"></script>
		<script src="https://tairatecnologia.com.br/bmc-consultoria/wp-content/themes/bmc-consultoria/js/popper.min.js?v=<?= rand(10,100) ?>"></script>
		<script src="https://tairatecnologia.com.br/bmc-consultoria/wp-content/themes/bmc-consultoria/js/bootstrap.min.js?v=<?= rand(10,100) ?>"></script>
		<script src="https://tairatecnologia.com.br/bmc-consultoria/wp-content/themes/bmc-consultoria/js/owl.carousel.min.js?v=<?= rand(10,100) ?>"></script>
		<script src="https://tairatecnologia.com.br/bmc-consultoria/wp-content/themes/bmc-consultoria/assets/js/scripts.js?v=<?= rand(10,100) ?>"></script>
	</head>

	<body <?php body_class(); ?>>

		<nav id="header-desktop">
			<div class="container">
				<div class="row">
					<div class="col-9 col-md-4 col-lg-3">
						<img src="https://tairatecnologia.com.br/bmc-consultoria/wp-content/themes/bmc-consultoria/assets/images/logo-bm.png" alt="">
					</div>
				</div>
			</div>
		</nav>
		
		<?php

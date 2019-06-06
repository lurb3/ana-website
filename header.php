<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html style="margin:0px;">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700,800&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body style="margin:0px;">
<div id="header">

	<nav class="navbar navbar-expand-lg">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav m-auto">
				<li class="nav-item active">
					<a class="nav-link" href="#">HOME <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="#">MY SERVICES <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">ABOUT ME</a>
				</li>
				<li class="nav-item" id="logo">
					<a class="nav-link" href="#">ANA</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">PROJECTS</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">BLOG</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">CONTACT ME</a>
				</li>
			</ul>
		</div>
	</nav>

</div><!-- #wrapper-navbar end -->

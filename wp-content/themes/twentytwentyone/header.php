<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
</head>

<body>
        <nav class="nav-hea navbar navbar-expand-lg navbar-light bg-light">
            <a style="color: #777777;" class="group-d navbar-brand" href="http://localhost/chuyendecms"><?php bloginfo('name'); ?></a>
            <button class="toggle-d navbar-toggler bg-light" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <form class="collapse navbar-collapse" id="navbarSupportedContent" action="http://localhost/chuyendeCMS/">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a style="color: #777777;background: #e7e7e7;" class="homee nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <div class="formm form-inline my-2 my-lg-0">
                        <input name="s" class="hea-search" type="search" placeholder="Search" aria-label="Search">
                        <button class="button-search btn" type="submit">Submit</button>
                    </div>
                </ul>
                <?php get_template_part( 'template-parts/header/site-nav' ); ?>
				<li id="hea-li" style = "list-style: none;">
					<a class="hea-mobile nav-link dfr" href="#">
						<div class="hea-1">
							<i style="font-size: 20px;color: #000;position: relative;right: -2px;" class="fas fa-ellipsis-h">
							</i>
							<p class="hea-menu">Menu</p>
						</div>

					</a>
				</li>
				<li  style = "list-style: none;">
					<a class="hea nav-link dfr" href="search.php">
						<div class="hea-1">
							<i style="font-size: 20px;color: #000;position: relative; right: -4px;" class="fas fa-search"></i>
						
								<p type="submit" class="hea-menu">Search</p>
						
						</div>
					</a>
				</li>
				
				<li class="nav-item dropdown total-dropdown"  style = "list-style: none;">
					<a class="hea-mobile nav-link dfr" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
						<div class="hea-1">
							<i style="font-size: 25px;color: #7c7c7d;position: relative;right: -15px;" class="fas-solid fas fa-user-circle"></i>
							<p class="dropdown-toggle">Account</p>
						</div>
					</a>
					<div class="dropdown-menu child-dropdown">
						<a class="dropdown-item" href="#">Action</a>
						<a class="dropdown-item" href="#">Another action</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Something else here</a>
					</div>
				</li>
			</ul>
		</form>
	</nav>
				
	<div id="content" class="site-content">
		<div id="primary" class="content-area container-detail">
			<main id="main" class="site-main">

<!DOCTYPE html>
<html>
<head>
<?php get_header()?>
</head>
<body>
	<div id="wrapper">
		<header>
			<h1>
				<?php bloginfo('name')?>
			</h1>
		</header>
		<nav id="primary-nav">
			<?php get_template_part('nav') // Includes nav.php ?>
		</nav>
		<nav id="search">
			<?php get_sidebar();?>
		</nav>
		<div id="main">
					<?php 
					/**
					 * Check to see if the current reques...
					 * is_catagory()
					 * is_fromt_page()
					 * is_home()
					 * is_404()
					 * is_archive()
					 * is_page()
					 * is_single() e.g. a single post
					 * is_tag()
					 * is_search --> a page display search results
					 */
					if (is_front_page()) {
						//inludes file named content-home.php
						get_template_part('content','home');
					} elseif(is_page() || is_single()) {
						// Inlclude file named content-single.php
						get_template_part('content','single');
					} elseif(is_search()) {
						// Inlclude file named content-single.php
						get_template_part('content','search');
					} else { // Display posts!
						
						// Include file named content-blog.php
						get_template_part('content','blog');
					}
					?>
				</div>
		<footer>
			<?php get_footer() ?>
		</footer>
	</div>
</body>
</html>

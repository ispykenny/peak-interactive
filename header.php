<?php 
	$root = get_template_directory_uri();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Peak Interactive <?php wp_title('- '); ?></title>
	<link rel="stylesheet" href="<?php echo "$root/dist/assets/css/style.css?=" ?>">
	<meta name="viewport" content="Width=device-width, initial-scale=1, user-scalable=no">
  <script src="https://use.fontawesome.com/1eda73ce4d.js"></script>
  <link rel="icon" type="image/png" href="<?php echo "$root/dist/assets/images/favicon.png"; ?>">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<main>

<div class="nav-parent">
	<div class="inner nav-flex">
		<div class="nav-element">
			<a href="" class="logo">
				<?php get_template_part('partials/logo'); ?>
			</a>
			<button id="mt-trigger">
				<span class="sr-only">Menu</span>
				<span class="menu-span menu-span-top"></span>
				<span class="menu-span menu-span-mid"></span>
				<span class="menu-span menu-span-btm"></span>
			</button>
		</div>
		<div class="nav-element">
			<nav>
				<ul>
					<li><a href="">Home</a></li>
					<li><a href="">Services offered</a></li>
					<li><a href="">Blog area</a></li>
					<li><a href="">About us</a></li>
					<li><a href="">Contact us</a></li>
				</ul>
			</nav>
		</div>
	</div>
</div>


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

<div class="nav-master">
	<div class="nav-parent mobile">
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
				<nav class="main-nv">
					<ul>
						<li><a href="">Home</a></li>
						<li><a href="">Portfolio</a></li>
						<li><a href="">Team</a></li>
						<li><a href="">Services</a></li>
						<li><a href="">Blog</a></li>
						<li><a href="">Contact</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</div>

	<div class="nav-parent desktop">
		<div class="inner">
			<div class="inner-flex">
				<div class="nav">
					<nav class="main-nv">
						<ul>
							<li><a href="" class="active">Home</a></li>
							<li><a href="">Portfolio</a></li>
							<li><a href="">Team</a></li>
						</ul>
					</nav>
				</div>
				<div class="logo-dk">
					<a href="" class="logo">
						<?php get_template_part('partials/logo'); ?>
					</a>
				</div>
				<div class="nav">
					<nav class="main-nv">
						<ul>
							<li><a href="">Services</a></li>
							<li><a href="">Blog</a></li>
							<li><a href="">Contact</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
</div>


<header>
	<div class="inner">
		<div class="content-area hdr-content">
			<div class="hdr-el">
				<h1>We Are Peak Interactive</h1>
			</div>
			<div class="hdr-el">
				<p>Web Design <span class="dot-spacers"></span> Digital Branding <span class="dot-spacers"></span> Marketing</p>
			</div>
			<div class="hdr-el">
				<a href="" class="cta">
					Learn More
				</a>
			</div>
		</div>
	</div>
	<div class="bg-el hdr-bg lazy-bg" data-bg="<?php echo "$root/dist/assets/images/header.jpg"; ?>"></div>
</header>


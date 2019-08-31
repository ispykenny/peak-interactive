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

<?php include 'partials/nav.php' ;?>

<?php $count; ?>



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
					<?php forEach($nav as $theNav) : ?>
						<li><a href="<?php echo site_url($theNav['link']);?>"><?php echo $theNav['text'];?></a></li>
					<?php endforeach; ?>
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
							<?php forEach($nav as $theLi) : 
								$count++;
								if($count <= 3) :
							?>

							<li><a href="<?php echo site_url($theLi['link']);?>"><?php echo $theLi['text'];?></a></li>
								<?php endif; endforeach; $count = -1;?>
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
							<?php forEach($nav as $theLei) : 
								$count++;
								if($count >= 3) :
							?>

							<li><a href="<?php echo site_url($theLei['link']);?>"><?php echo $theLei['text'];?></a></li>
								<?php endif; endforeach; ?>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
</div>



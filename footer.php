<?php 
	$root = get_template_directory_uri();
?>

</main>
<?php include 'partials/nav.php' ;?>

<footer>
	<div class="inner">
		<div class="inner__inner flexing-footer">

			<div class="footer-bio footer-el">
				<a href="" class="footer-logo">
					<?php get_template_part('partials/logo'); ?>
				</a>
				<div class="contact-info">
					<?php get_template_part('partials/company-info'); ?>
				</div>
			</div>


			<div class="footer-nav footer-el">
				<hr class="footer-hr">
				<nav>
					<ul class="main-footer-nav">
					<?php forEach($nav as $theNav) : ?>
						<li><a href="<?php echo site_url($theNav['link']);?>"><?php echo $theNav['text'];?></a></li>
					<?php endforeach; ?>
					</ul>
				</nav>
			</div>

			<div class="footer-nav footer-el social-list-item">
				<hr class="footer-hr">
				<nav>
					<?php get_template_part('partials/social-media'); ?>
				</nav>
			</div>

		</div>
	</div>


	<div class="toasts">
		<div class="inner">
			&copy; <?php echo date('Y'); ?> All Rights Reserved to Peak Interactive LLC.
		</div>
	</div>
</footer>

<script src="<?php echo "$root/dist/assets/js/app.bundle.js"; ?>"></script>
<?php  wp_footer();  ?>
</body>
</html>
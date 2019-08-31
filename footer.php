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
					<ul>
						<li><span>T:</span> <a href="">619 433 8428</a> </li>
						<li><span>E:</span> <a href="mailto:hello@peakinteractive.com">hello@peakinteractive.com</a> </li>
					</ul>
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
					<ul>
						<li><a href="">Instagram</a></li>
						<li><a href="">Facebook</a></li>
						<li><a href="">Behance</a></li>
					</ul>
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
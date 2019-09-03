<?php /* Template Name: Contact */
  $root = get_template_directory_uri();
  get_header();
?>

<header>
	<div class="inner">
		<div class="content-area hdr-content">
			<div class="hdr-el green">
				<h1>GET IN TOUCH</h1>
			</div>
      <div class="hdr-el">
        <p>You’ve got some questions and we’ve got a ton of answers.</p>
      </div>
		</div>
	</div>
	<div class="bg-el hdr-bg lazy-bg" data-bg="<?php echo "$root/dist/assets/images/header.jpg"; ?>"></div>
</header>


<section class="default-block">
  <div class="inner flex-contact">
    <div class="contact-blurb">
      <div class="blurb-section">
        <h4>PEAK INTERACTIVE is located in beautiful Temecula, CA.</h4>
        <p>If you think we can work together or if you just want a recommendation on a good bottle of wine, we’d love to hear from you! So, drop us a line and we’ll get back to you.</p>
        <hr class="contact-hr">
      </div>
      <div class="blurb-section company-sec info-li">
        <?php get_template_part('partials/company-info'); ?>
      </div>
      <div class="blurb-section company-sec social-ul">
        <h4>Follow us on social</h4>
        <?php get_template_part('partials/social-media');?>
      </div>
    </div>
    <div class="contact-box">
      <form action="">
        <div class="input">
          <input type="text" placeholder="First & Last Name">
        </div>
        <div class="input">
          <input type="text" placeholder="Organization">
        </div>
        <div class="input">
          <input type="email"  placeholder="Email">
        </div>
        <div class="input">
          <input type="tel"  placeholder="Phone Number">
        </div>
        <div class="input">
          <textarea name="" id="" cols="30" rows="10"  placeholder="Message"></textarea>
        </div>
        <div class="input">
          <button>Submit</button>
        </div>
      </form>
    </div>
  </div>  
</section>


<?php get_footer();
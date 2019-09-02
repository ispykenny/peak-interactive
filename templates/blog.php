<?php /* Template name: Blog Template */
  $root = get_template_directory_uri();
  get_header(); 
?>

<header>
	<div class="inner">
		<div class="content-area hdr-content">
			<div class="hdr-el">
        <div class="green">
          <h2>Blog</h2>
        </div>
      </div>
      <div class="hdr-el">
        <h1>Yeah, we write content too.</h1>
      </div>
		</div>
	</div>
	<div class="bg-el hdr-bg lazy-bg" data-bg="<?php echo "$root/dist/assets/images/header.jpg"; ?>"></div>
</header>





<section class="default-block">
  <div class="inner">
    <div class="blog-group">
      <?php $blog = new WP_Query(array(
        "post_type" => "post"
      ));

      if($blog->have_posts()) : while($blog->have_posts()) : $blog->the_post(); ?>
      <?php get_template_part('partials/blog-listing'); ?>
      <?php endwhile; endif; wp_reset_postdata(); ?>
      
    </div>
  </div>
</section>



<?php get_footer(); ?>
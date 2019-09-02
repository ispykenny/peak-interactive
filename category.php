<?php 
  $root = get_template_directory_uri();
  get_header(); 
?>

<header>
	<div class="inner">
		<div class="content-area hdr-content">
			<div class="hdr-el">
        <div>
          <?php 
           $category = get_category( get_query_var( 'cat' ) );
           $cat_id = $category->cat_ID;
          ?>
          <h2>You are viewing posts in <span class="green"><?php echo get_category($cat_id)->name;?></span></h2>
        </div>
      </div>
      <div class="hdr-el">
        <h1>Yeah, we write content too.</h1>
      </div>
      <div class="hdr-el">
        <a href="<?php echo site_url('/blog');?>" class="cta">
					View all posts
				</a>
      </div>
		</div>
	</div>
	<div class="bg-el hdr-bg lazy-bg" data-bg="<?php echo "$root/dist/assets/images/header.jpg"; ?>"></div>
</header>





<section class="default-block">
  <div class="inner">
    <div class="blog-group">
      <?php 
      if(have_posts()) : while(have_posts()) : the_post();  ?>

      <?php get_template_part('partials/blog-listing'); ?>
      <?php endwhile; endif; wp_reset_postdata(); ?>
    </div>
  </div>
</section>



<?php get_footer(); ?>
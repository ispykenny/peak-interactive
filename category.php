<?php /* Template name: Blog Template */
  $root = get_template_directory_uri();
  get_header(); 
?>

<header>
	<div class="inner">
		<div class="content-area hdr-content">
			<div class="hdr-el">
        <div class="green">
          <?php 
           $category = get_category( get_query_var( 'cat' ) );
           $cat_id = $category->cat_ID;
          ?>
          <h2>You are viewing blogs in <?php echo get_category($cat_id)->name;?></h2>
        </div>
				<h1>Yeah, we write content too.</h1>
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

      <div class="blog-item">
        <div class="blog-image lazy-bg" data-bg="<?php the_post_thumbnail_url(); ?>">

        </div>
        <div class="blog-blurb">
          <h4><?php the_title();?></h4>
          <small><?php echo get_the_date('F d, Y'); ?></small>
          <p><?php echo wp_trim_words( get_the_content(), 23, '...' ); ?></p>
          <a href="<?php the_permalink();?>"><span>Keep Reading</span> <svg height='100px' width='100px'  fill="#000000" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 100 100" x="0px" y="0px"><title>Forward</title><path d="M14.37,99.73a2.42,2.42,0,0,0,1.11.27,2.39,2.39,0,0,0,1.35-.42L85.88,52a2.38,2.38,0,0,0,0-3.92L16.83.42a2.39,2.39,0,0,0-3.74,2V97.62A2.38,2.38,0,0,0,14.37,99.73Z"></path></svg></a>
        </div>
      </div>
      <?php endwhile; endif; wp_reset_postdata(); ?>
    </div>
  </div>
</section>



<?php get_footer(); ?>
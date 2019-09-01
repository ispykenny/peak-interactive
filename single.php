<?php $root = get_template_directory_uri(); ?>
<?php get_header(); 

if(have_posts()) : while(have_posts()) : the_post(); 
$postId = $post->ID;
?>

<header class="blog-hdr">
	<div class="inner">
		<div class="content-area hdr-content">
			<div class="hdr-el">
        <h4><?php the_title();?></h4>
        <div class="blog-info">
          <small>
            <span><span class="green">Posted on:</span> <?php echo get_the_date('F d, Y'); ?></span>
            <span class="line">|</span>
            <span><span class="green">Category:</span> <?php echo the_category(', ');?></span>
          </small>
        </div>
			</div>
		</div>
	</div>
	<div class="bg-el hdr-bg lazy-bg" data-bg="<?php the_post_thumbnail_url(); ?>"></div>
</header>

<section class="default-block">
  <div class="inner flex-layout">
    <article class="general-content">
      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>
    </article>
    <?php 
      endwhile; 
      endif;
      wp_reset_postdata();
    ?>
    <div class="sidebar">
      <h4>Recent Blogs</h4>
      <?php 
      $recentBlogs = new WP_Query(array(
        "posts_per_page" => 3,
        "post__not_in" => array($postId)
      ));
      if($recentBlogs->have_posts()) : while($recentBlogs->have_posts()) : $recentBlogs->the_post(); ?>

        <a href="<?php the_permalink();?>"><?php the_title();?></a>
      <?php 
        endwhile; 
        endif;
        wp_reset_postdata();
      ?>
    </div>
  </div>
</section>

<?php 
  get_footer(); 
?>
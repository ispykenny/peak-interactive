<?php /* Template name: Blog Template */
  $root = get_template_directory_uri();
  get_header(); 
?>

<div class="spacer"></div>
<section>
  <div class="inner center green main-header">
    <h1>Blog</h1>
  </div>
</section>


<section class="default-block">
  <div class="inner">
    <div class="blog-group">


      <?php $blog = new WP_Query(array(
        "post_type" => "post"
      ));

      if($blog->have_posts()) : while($blog->have_posts()) : $blog->the_post(); ?>

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
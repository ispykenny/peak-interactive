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
      </div>
      <div class="hdr-el">
        <div class="blog-info">
          <small>
            <span class="posted-stamp">
              <span class="green type-info">Posted on:</span> <span class="posted-date"><?php echo get_the_date('F d, Y'); ?></span>
            </span>
            <span class="line">-</span>
            <span class="posted-stamp">
              <span class="green type-info">Category:</span> <span class="category-type"><?php echo the_category(' | ');?></span>
            </span>
          </small>
        </div>
      </div>
		</div>
	</div>
	<div class="bg-el hdr-bg lazy-bg" data-bg="<?php the_post_thumbnail_url(); ?>"></div>
</header>

<section class="default-block">
  <div class="inner flex-layout">
    <div class="blog-parent">
      <div class="general-content">
        <div class="article-inner">
          <article>
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
          </article>
          <?php 
          endwhile; 
          endif; 
          ?>

          <div class="share-article">
            <h5>SHARE THIS BLOG</h5>
            <ul class="sharing-nav">
              <li><a href="">EMAIL</a></li>
              <li><a href="">FACEBOOK</a></li>
              <li><a href="">TWITTER</a></li>
            </ul>
          </div>

          <div class="prev-and-next">
            <div class="previous-post">
              <h5>Previous Post:</h5>
              <?php if(get_previous_post_link()) { ?>
                <?php previous_post_link('%link');
              } else { echo "No Newer Post" ?>
             <?php }?>
            </div>
            <div class="next-post">
              <h5>Next Post:</h5>
            <?php if(get_next_post_link()) { ?>
                <?php next_post_link('%link');
              } else { echo "No Older Post" ?>
             <?php }?>
            </div>
          </div>
        </div>
      </div>    
    </div>
    


    <?php wp_reset_postdata(); ?> 
    
    <div class="sidebar">
      <div class="sidebar-inner">
        <h4>RECENT POSTS</h4>
      <?php 
      $recentBlogs = new WP_Query(array(
        "posts_per_page" => 3,
        "post__not_in" => array($postId)
      ));
      if($recentBlogs->have_posts()) : while($recentBlogs->have_posts()) : $recentBlogs->the_post(); ?>

      <?php get_template_part('partials/blog-listing'); ?>
      <?php 
        endwhile; 
        endif;
        wp_reset_postdata();
      ?>
      
      </div>
    </div>
  </div>
</section>

<?php 
  get_footer(); 
?>
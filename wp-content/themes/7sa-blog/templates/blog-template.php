<?php
/**
 * Template Name: Blog
 */
?>
<section class="blog-container animated bounceInLeft">


  <?php $args = array( 'post_type' => 'blog', 'posts_per_page' => 10 ); ?>
  <?php $loop = new WP_Query( $args ); ?>
  <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
    <div class="container">
      <div class="row">
        <div class="col-md-offset-1 col-md-1">
          <div class="a2a_kit a2a_kit_size_35 a2a_default_style" data-a2a-url=<?php the_permalink(); ?> data-a2a-title=<?php the_title(); ?> data-a2a-icon-color="transparent">
        		<a class="a2a_button_twitter"></a>
        		<a class="a2a_button_facebook"></a>
        		<a class="a2a_button_linkedin"></a>
        		<a class="a2a_button_email"></a>
        	</div>
        </div>
        <div class="col-md-6">
          <h1><?php the_title(); ?></h1>
          <p class="date"><?php the_time( get_option( 'date_format' ) ); ?></p>
          <h4>by <?php echo get_field('author'); ?></h4>
          <p>
            <?php the_content(); ?>
          </p>
          <p>
            <?php the_excerpt(); ?>
          </p>

          <button type="button" name="button"><a href="<?php the_permalink(); ?>">Read More</a></button>

        </div>
      </div>
      <hr>
    </div>
  <?php endwhile; ?>

  <style type="text/css">
    a2a_config.icon_color = "transparent";
  </style>

</section>

 <?php
  $args = array(
    'post_type'         => JDESIGNS_PROJECT_CPT_NAME,
    'orderby'           => 'menu_order',
    'order'             => 'ASC',
    'posts_per_page'    => -1
  );
  $project = new WP_Query($args);
  $count = 1;
?>


<?php if( $project -> have_posts() ): ?>

  <section class="section-projects">
    <div class="project-grid">
    <div class="grid-sizer"></div> 
      
      <?php while( $project -> have_posts() ) : $project -> the_post(); 
      
        $image = get_the_post_thumbnail_url( get_the_ID(), 'large' );
        $link = get_permalink();
        // $position = get_field('title');
        // $description = get_field('description');
        
        ?>
        
        <a href="<?php echo $link; ?>" class="project-grid-item <?php the_ID(); ?>">
        <article>
          <div class="project-image" style="background-image: url('<?php echo $image ?>');"></div>
          <div class="hover-content">
            <h3 class="name h2"><?php the_title(); ?></h3>
            <p><?php the_content() ?></p>
            <button>View Project<span>-></span></button>
          </div>
        </article>
      </a>

      <?php endwhile; wp_reset_postdata(); ?>
  </div>
</section>

<?php endif; ?>





 <?php
  $args = array(
    'post_type'         => JDESIGNS_PROJECT_CPT_NAME,
    'orderby'           => 'menu_order',
    'order'             => 'ASC',
    'posts_per_page'    => -1
  );
  $project = new WP_Query($args);
?>


<?php if( $project -> have_posts() ): ?>

  <section class="section-projects">
    <div class="container">
      <div class="project-grid">
      
      <?php while( $project -> have_posts() ) : $project -> the_post(); 
      
        $image = get_the_post_thumbnail_url( get_the_ID(), 'large' );
        // $position = get_field('title');
        // $description = get_field('description');
        
        ?>
        
        <article class="grid-item">
          <div class="project-image" style="background-image: url('<?php echo $image ?>');"></div>
          <div class="hover-content">
            <h3 class="name"><?php the_title(); ?></h3>
            <button>View Project<span>-></span></button>
          </div>
        </article>

      <?php endwhile; wp_reset_postdata(); ?>
    </div>
  </div>
</section>

<?php endif; ?>






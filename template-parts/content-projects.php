 <?php
  $args = array(
    'post_type'         => JDESIGNS_PROJECT_CPT_NAME,
    'orderby'           => 'date',
    'order'             => 'DESC',
    'posts_per_page'    => -1
  );
  $project = new WP_Query($args);
?>


<?php if( $project -> have_posts() ): ?>

  <section class="section-projects">
    <div class="project-grid">
    <div class="grid-sizer"></div> 
    <div class="gutter-sizer"></div>
      
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
            <button class="button">View Project</button>
          </div>
        </article>
      </a>

      <?php endwhile; wp_reset_postdata(); ?>
  </div>
</section>

<?php endif; ?>






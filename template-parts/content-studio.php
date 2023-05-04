<?php
  $args = array(
    'post_type'         => JDESIGNS_TEAM_CPT_NAME,
    'orderby'           => 'menu_order',
    'order'             => 'ASC',
    'posts_per_page'    => -1
  );
  $team = new WP_Query($args);
?>


<?php if( $team -> have_posts() ): ?>

    <div class="team-grid">
      
      <?php while( $team -> have_posts() ) : $team -> the_post(); 
      
        $team_image = get_the_post_thumbnail_url( get_the_ID(), 'large' );
        $link = get_permalink();
        $position = get_field('position');
        
        ?>
  
        <article>
          <div class="team-image small" style="background-image: url('<?php echo $team_image ?>');"></div>
            <h3 class="bold"><?php the_title(); ?></h3>
            <p><?php echo $position; ?></p>
        </article>
    
      <?php endwhile; wp_reset_postdata(); ?>


<?php endif; ?>





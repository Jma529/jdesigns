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

      <?php while( $team -> have_posts() ) : $team -> the_post(); 
      
        $team_image = get_the_post_thumbnail_url( get_the_ID(), 'large' );
        $link = get_permalink();
        $position = get_field('position');
        $bio = get_the_content();
        
        ?>
  
          <div class="team-image small" style="background-image: url('<?php echo $team_image ?>');"></div>
    
      <?php endwhile; wp_reset_postdata(); ?>

<?php endif; ?>





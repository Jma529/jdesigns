 <?php
  $args = array(
    'post_type'         => JDESIGNS_PROJECT_CPT_NAME,
    'orderby'           => 'menu_order',
    'order'             => 'ASC',
    'posts_per_page'    => -1
  );
  $project = new WP_Query($args);
?>


<?php if( $project -> have_posts() ): 
  $count = 2;
  ?>

  <section class="section-projects">
    <div class="filters">
      <button class="button is-checked" data-filter="*">All</button>
      <button class="button" data-filter=".residential">Residential</button>
      <button class="button" data-filter=".commercial">Commercial</button>
      <!-- <button class="button" data-filter=".hospitality">Hospitality</button> -->
    </div>
    <div class="project-grid">
    <div class="grid-sizer"></div> 
    <div class="gutter-sizer"></div>
      
      <?php while( $project -> have_posts() ) : $project -> the_post(); 
        $count++;
        $image = get_the_post_thumbnail_url( get_the_ID(), 'large' );
        $link = get_permalink();
        $categories = get_the_category();

        if ( ! empty( $categories ) ) {
          foreach ( $categories as $cat ) {
              $cats = $cat->slug;
          }
        }
?>
        
      <a href="<?php echo $link; ?>" class="project-grid-item <?php the_ID(); ?> project-<?= $count; ?> <?= $cats; ?>">
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
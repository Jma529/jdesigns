<?php
/**
 * The template for displaying the front page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package jdesigns
 */
/* Template Name: Home */ 

get_template_part('header-home');

 ?>

<main id="primary" class="site">
    <section class="front-page-slider">

    <?php
        //Get the images ids from the post_metadata
        $images = acf_photo_gallery('slide_gallery', $post->ID);
        //Check if any items
        if( count($images) ):
            // Start loop
          foreach($images as $image):
            $id = $image['id']; 
            $full_image_url= $image['full_image_url']; 
            $url= $image['url']; 
            $image_backup = get_the_post_thumbnail_url( get_the_ID(), 'full' );
      ?>
      <div class="section-image-cover">
        <div class="overlay"></div>
      <div class="hero-content">
        <p class="logo lg">
        J Designs
        </p>
        <a class="link" href="/portfolio">Enter<svg width="29" height="17" viewBox="0 0 29 17" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M19.3333 16.9307C19.3333 16.0342 20.219 14.6953 21.1156 13.5716C22.2684 12.1216 23.6459 10.8564 25.2252 9.89099C26.4093 9.1672 27.8448 8.47241 29 8.47241M29 8.47241C27.8448 8.47241 26.4081 7.77762 25.2252 7.05382C23.6459 6.08716 22.2684 4.82203 21.1156 3.37445C20.219 2.24949 19.3333 0.908241 19.3333 0.014074M29 8.47241L-1.69313e-06 8.47241" stroke="white"/>
          </svg></a>
         
      </div>
      <?php if( !empty($url) ){ ?><a href="<?php echo $url; ?>" target="_blank"><?php } ?>
            <img src="<?php echo $full_image_url; ?>" alt="<?php echo $title; ?>" title="<?php echo $title; ?>">
        <?php if( !empty($url) ){ ?></a><?php } ?>
      
      </div>
      <?php endforeach; endif; ?>
      
    </section>

	</main><!-- #main -->

<?php
get_footer();

?>
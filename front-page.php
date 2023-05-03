<?php
/**
 * The template for displaying the front page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package jdesigns
 */
/* Template Name: Home */ 

 get_header();

 ?>

<main id="primary" class="site">
    <section class="front-page-slider">
    <?php
        //Get the images ids from the post_metadata
        $images = acf_photo_gallery('slide_gallery', $post->ID);
        //Check if return array has anything in it
        if( count($images) ):
            //Cool, we got some data so now let's loop over it
          foreach($images as $image):
            $id = $image['id']; // The attachment id of the media
            $full_image_url= $image['full_image_url']; //Full size image url
            $url= $image['url']; //Goto any link when clicked
            $image_backup = get_the_post_thumbnail_url( get_the_ID(), 'full' );
      ?>
      <div class="section-image-cover">
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
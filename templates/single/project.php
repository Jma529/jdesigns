<?php 

// Variables

$images = acf_photo_gallery('project_gallery', $post->ID);

?>


<section class="single-project">
<h1><?php the_title()?></h1>
<div class="project-gallery grid">
  <?php
//Check if return array has anything in it
 if( count($images) ):
  //Cool, we got some data so now let's loop over it
  foreach($images as $image):
      $id = $image['id']; // The attachment id of the media
      $title = $image['title']; //The title
      $caption= $image['caption']; //The caption
      $full_image_url= $image['full_image_url']; //Full size image url
      $full_image_url = acf_photo_gallery_resize_image($full_image_url, 262, 160); //Resized size to 262px width by 160px height image url
      $thumbnail_image_url= $image['thumbnail_image_url']; //Get the thumbnail size image url 150px by 150px
      $url= $image['url']; //Goto any link when clicked
      $target= $image['target']; //Open normal or new tab
?>


  <div class="project-gallery-item">
        <?php if( !empty($url) ){ ?><a class="project-image" href="<?php echo $url; ?>" <?php echo ($target == 'true' )? 'target="_blank"': ''; ?>><?php } ?>
            <div class="project-image" style="background-image: url('<?php echo $full_image_url ?>');"></div>
        <?php if( !empty($url) ){ ?></a><?php } ?>
    </div>
</div>
</section>

<?php endforeach; endif; ?>
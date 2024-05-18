<?php 

// Variables

$images = acf_photo_gallery('project_gallery', $post->ID);
$location = get_field('location');
$photographer = get_field('photographer');
$builder = get_field('builder');
$architect = get_field('architect');


?>


<section class="single-project">
<div class="project-gallery grid">
  <?php

//Check if return array has anything in it
 if( count($images) ):
  //Cool, we got some data so now let's loop over it
  $i = 0;
  foreach($images as $i => $image):
      $project_title = get_the_title();
      $id = $image['id']; // The attachment id of the media
      $title = $image['title']; //The title
      $caption= $image['caption']; //The caption
      $full_image_url= $image['full_image_url']; //Full size image url
      $thumbnail_image_url= $image['thumbnail_image_url']; //Get the thumbnail size image url 150px by 150px
      echo "<div class='project-gallery-item item-{'$i + 2'}'>
            <div class='project-image' style='background-image: url({$full_image_url})'></div>
          </div>";
    if ($i == 0) { 
      ?>
      <div class="project-info grid">
        <h1><?php echo $project_title ?></h2>
        <p><?php the_content();?></p>
        <div class="labels">
          <?php if($location) : ?>
            <p>Location: <?php echo $location ?></p>
            <?php endif; ?>

          <?php if($photographer) : ?>
            <p>Photography by: <?php echo $photographer; ?></p>
            <?php endif; ?>
            
            <?php if($builder) : ?>
            <p>Architecture by: <?php echo $architect; ?></p>
            <?php endif; ?>

          <?php if($builder) : ?>
            <p>Build by: <?php echo $builder ?></p>
            <?php endif; ?>

        </div> 
    </div>
      <?php
      $i++;
    }

?>



<?php endforeach; endif; ?>
</div>


</section>
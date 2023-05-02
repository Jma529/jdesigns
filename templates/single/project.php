<?php 

// Variables

$images = acf_photo_gallery('project_gallery', $post->ID);


?>


<section class="single-project">
<div class="project-gallery grid">
  <?php

//Check if return array has anything in it
 if( count($images) ):
  //Cool, we got some data so now let's loop over it
  $i = 0;
  foreach($images as $image):
      $project_title = get_the_title();
      $id = $image['id']; // The attachment id of the media
      $title = $image['title']; //The title
      $caption= $image['caption']; //The caption
      $full_image_url= $image['full_image_url']; //Full size image url
      $thumbnail_image_url= $image['thumbnail_image_url']; //Get the thumbnail size image url 150px by 150px
      $url= $image['url']; //Goto any link when clicked
      $target= $image['target']; //Open normal or new tab
      echo "<div class='project-gallery-item'>
      <a class='project-image' href='{$image->url}'>
          <div class='project-image' style='background-image: url({$full_image_url})' target='$target'></div>
      </a>
      </div>";
    if ($i == 0) { 
      ?>
      <div class="project-info grid">
        <h1><?php echo $project_title ?></h2>
        <p><?php the_content();?></p>
        <div class="labels">
          <p>Location</p>
          <p>Photography by</p>
          <p>Builder:</p>
        </div> 
    </div>
      <?php
      $i++;
    }

?>



<?php endforeach; endif; ?>
</div>


</section>
<?php 

// Variables

$image_1 = get_field('image_1');
$image_2 = get_field('image_2');
$image_3 = get_field('image_3');
$image_4 = get_field('image_4');
$image_5 = get_field('image_5');
$image_6 = get_field('image_6');
$image_7 = get_field('image_7');
$image_8 = get_field('image_8');
$image_9 = get_field('image_9');
$image_10 = get_field('image_10');
$image_11 = get_field('image_11');
$image_12 = get_field('image_12');
$image_13 = get_field('image_13');
$image_14 = get_field('image_14');
$image_15 = get_field('image_15');
$image_16 = get_field('image_16');

?>



<section class="project-info">
<h1>hello!</h1>
<h2><?php the_title()?></h2>
<div class="grid">
  <div class="grid-item size-4"><img src="<?php echo $image_1;?>"/></div>
  <div class="grid-item size-2"><img src="<?php echo $image_2;?>"/></div>
  <div class="grid-item size-3"><img src="<?php echo $image_3;?>"/></div>
  <div class="grid-item size-4"><img src="<?php echo $image_4;?>"/></div>
  <div class="grid-item size-2"><img src="<?php echo $image_5;?>"/></div>
  <div class="grid-item size-3"><img src="<?php echo $image_6;?>"/></div>
</div>
</section>
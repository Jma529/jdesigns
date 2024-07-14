<?php // Custom fields

$image = get_field('cta_image');
$heading = get_field('cta_heading');
$button_text = get_field('cta_button_text');
$button_link = get_field('cta_button_link');


?>

<div class="section-image-cover cta">
        <div class="overlay"></div>
      <div class="hero-content">
        <p class="h1 text-light"><?= $heading; ?></p>
        <a class="link" href="<?= $button_link;?>"><?= $button_text; ?><svg width="29" height="17" viewBox="0 0 29 17" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M19.3333 16.9307C19.3333 16.0342 20.219 14.6953 21.1156 13.5716C22.2684 12.1216 23.6459 10.8564 25.2252 9.89099C26.4093 9.1672 27.8448 8.47241 29 8.47241M29 8.47241C27.8448 8.47241 26.4081 7.77762 25.2252 7.05382C23.6459 6.08716 22.2684 4.82203 21.1156 3.37445C20.219 2.24949 19.3333 0.908241 19.3333 0.014074M29 8.47241L-1.69313e-06 8.47241" stroke="white"/>
          </svg>
        </a>
      </div>
      <?php if( !empty($image) ){ ?><a href="<?php echo $image; ?>" target="_blank"><?php } ?>
            <img src="<?= $image; ?>" alt="<?php echo $title; ?>" title="<?php echo $title; ?>">
        <?php if( !empty($image) ){ ?></a><?php } ?>
      
</div>
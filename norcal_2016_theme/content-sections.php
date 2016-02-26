
<!-- MAIN CONTENT (optional) -->
<?php if (have_posts()): while (have_posts()): the_post(); if(trim($post->post_content) != "") : ?>
<div class="w-section" style="color:#222;">
      <?php the_content(); ?>
</div>
<?php endif; endwhile; endif; ?>


<!-- SECTION CONTENT -->
<?php
  $counter = 0; // Use to create unique areas for link coloring
  if( have_rows('sections') ):
  while( have_rows('sections') ): the_row();
  // ACF SECTION FIELDS
  $anchor = get_sub_field('section_anchor');
  $bgcolor = get_sub_field('section_background_color');
  $fontcolor = get_sub_field('section_font_color');
  $linkcolor = get_sub_field('section_link_color');
  $width = get_sub_field('section_container_width');
  $customCSS = get_sub_field('section_container_custom_css');
  $content = get_sub_field('section_content');
  $counter++;
?>

  <style>
    #sectionRepeater_<?php echo $counter; ?> a {
      color:<?php echo $linkcolor ?>;
    }
  </style>
  <div id="sectionRepeater_<?php echo $counter; ?>" class="w-section" style="background:<?php echo $bgcolor ?>;color:<?php echo $fontcolor; ?>;<?php echo $customCSS; ?>">
    <a name="<?php echo $anchor; ?>"></a>
    <div class="w-container<?php if(is_front_page()){ echo " blackbox"; } ?>" style="max-width:<?php echo $width; ?>;">
      <?php echo $content; ?>
    </div>
  </div>

<?php endwhile; endif; ?>

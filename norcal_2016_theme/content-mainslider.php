<main id="wrap" class="w-section fh-section">
<?php if( have_rows('main_slider_slides') ): ?>
  <div data-animation="fade" data-duration="700" data-easing="ease-in-quad" data-autoplay-limit="6" class="w-slider slider main">
    <div class="w-slider-mask front-page-mask">

      <?php while( have_rows('main_slider_slides') ): the_row(); 
        // ACF: SLIDE FIELDS
        $bgurl = get_sub_field('slide_background_image');
        $content = get_sub_field('slide_content');
      ?>

      <!-- BEGIN: SLIDE -->
        <div class="w-slide slide_image" style="<?php echo "background:url('$bgurl');" ?>">
          <div class="w-container slide-container-container">
            <div class="tv-screen">
              <?php echo $content; ?>
            </div>
          </div>
        </div>
      <!-- END: SLIDE -->

  <?php endwhile; ?>

    </div>
    <div class="w-slider-arrow-left">
      <div class="w-icon-slider-left left-arrow"></div>
    </div>
    <div class="w-slider-arrow-right">
      <div class="w-icon-slider-right right-arrow"></div>
    </div>
    <div class="w-slider-nav w-slider-nav-invert"></div>
  </div>

<?php endif; ?>
</main>


<?php get_header(); ?>
<style>
  /* page.php */
  .header {position:fixed;background:#000;}
  .footer {bottom:0;background:#000;}
</style>
<?php get_template_part('content', 'navbar'); ?>

<?php get_template_part('content', 'sections'); ?>

<?php get_template_part('content', 'footer'); ?>
<?php get_footer(); ?>

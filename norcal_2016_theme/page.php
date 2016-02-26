
<?php get_header(); ?>
<style>
  /* page.php */
  .header {position:static;background:#333;}
  .footer {position:fixed;bottom:0;background:#333;}
</style>
<?php get_template_part('content', 'navbar'); ?>

<?php get_template_part('content', 'sections'); ?>

<?php get_template_part('content', 'footer'); ?>
<?php get_footer(); ?>

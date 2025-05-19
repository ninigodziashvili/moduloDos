<?php get_header();?>
<div class="parent-checkbox">
  <input type="checkbox" class="checkbox" id="checkbox">
  <label for="checkbox" class="checkbox-label">
    <i class="fa-moon">🌙</i>
    <i class="fa-sun">☀️</i>
    <span class="ball"></span>
  </label>
</div>
<?php the_content();?>
<?php get_footer();?>
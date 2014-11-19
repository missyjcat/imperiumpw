<?php
//kpr(get_defined_vars());
//http://drupalcontrib.org/api/drupal/drupal--modules--node--node.tpl.php
//node--[CONTENT TYPE].tpl.php

//$content['field_name']['#theme'] = "nomarkup";
//hide($content['field_name']);
if ($classes) {
  $classes = ' class="'. $classes . ' "';
}

if ($id_node) {
  $id_node = ' id="'. $id_node . '"';
}

hide($content['comments']);
hide($content['links']);
?>

<!-- node.tpl.php -->
<article <?php print $id_node . $classes .  $attributes; ?> role="article">
  <?php print $mothership_poorthemers_helper; ?>
  <div class="pagebanner">
    <div class="pagebanner__image"></div>
     
    <style> 
      .pagebanner__title { top: -130px; }
      .pagebanner__image { min-height: 200px;}
    </style>
    
  <?php print render($title_prefix); ?>
    <h1<?php print $title_attributes; ?> class="pagebanner__title"><?php print $title; ?></h1>
  <?php print render($title_suffix); ?>
  </div>

  <?php if ($display_submitted): ?>
  <footer>
    <?php print $user_picture; ?>
    <span class="author"><?php print t('Written by'); ?> <?php print $name; ?></span>
    <span class="date"><?php print t('On the'); ?> <time><?php print $date; ?></time></span>

    <?php if(module_exists('comment')): ?>
      <span class="comments"><?php print $comment_count; ?> Comments</span>
    <?php endif; ?>
  </footer>
  <?php endif; ?>

  <div class="content fixed-inner">
    <?php
    // This will print out the Practice pages submenu, but it will only show up on pages with 
    // `practice` in the URL alias
    
    $alias = request_path();
    $alias = explode('/',$alias);
    if ($alias[0] == 'practice'): ?>

    <div class="menu--practice">
    <?php
      $block = block_load('menu', 'menu-practice-areas');
      print render(_block_get_renderable_array(_block_render_blocks(array($block))));
    ?>
    </div>

    <?php endif; ?>

    <?php print render($content);?>
  </div>
<!-- 
  <?php print render($content['links']); ?>

  <?php print render($content['comments']); ?> -->
</article>
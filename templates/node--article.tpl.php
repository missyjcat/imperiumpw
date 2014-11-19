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

// hide($content['field_main_image']);
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
    <h1<?php print $title_attributes; ?> class="pagebanner__title">NEWS</h1>
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
    <h1><?php print $title; ?></h1>
    <?php print render($content['body']);?>
    
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-4dadd8131fbd7441"></script>
    <div class="addthis_sharing_toolbox"></div>
  </div>

  

</article>
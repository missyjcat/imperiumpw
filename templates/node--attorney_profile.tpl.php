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

foreach ($content as $field => $value) {
  hide($content[$field]);
}
?>

<!-- node.tpl.php -->
<article <?php print $id_node . $classes .  $attributes; ?> role="article">
  <?php print $mothership_poorthemers_helper; ?>
  <div class="pagebanner">
    <div class="pagebanner__image"><?php print render($content['field_main_image']); ?></div>
     <?php if (count($node->field_main_image) == 0) : ?>
    <style> 
      .pagebanner__title { top: -130px; }
      .pagebanner__image { min-height: 200px;}
    </style>
    <?php endif; ?>
  <?php print render($title_prefix); ?>
    <h1<?php print $title_attributes; ?> class="pagebanner__title">Attorneys</h1>
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
    <div class="backlink">
      <a href="../attorneys"><span class="backlink__arrow">&#9666;</span> Back to Attorneys</a>
    </div>
    
    <div class="attorney__leftside">
      
      <div class="attorney__photo"><?php print render($content['field_photo']); ?></div>
      <div class="attorney__fullname"><?php print $title; ?></div>
      <div class="attorney__title"><?php print render($content['field_title']); ?></div>
      <div class="attorney__email"><p><i><a href="mailto:<?php print render($content['field_email_address']['#items']['0']['safe_value']); ?>"><?php print render($content['field_email_address']['#items']['0']['safe_value']); ?></a></i></p></div>
      <div class="attorney__phone"><p><i><?php print render($content['field_phone_number']); ?></i></p></div>
      
    </div>
    <div class="attorney__rightside">
      
        <h1><?php print $title; ?></h1>

        <div class="attorney__body"><?php print render($content['body']); ?></div>
        <div class="attorney__areasofpractice"><?php print render($content['field_areas_of_practice']); ?></div>
        <div class="attorney__baradmissions"><?php print render($content['field_bar_admissions']); ?></div>
        <div class="attorney__education"><?php print render($content['field_education']); ?></div>
        <div class="attorney__publishedworks"><?php print render($content['field_published_works']); ?></div>

    </div>
  </div>

  <?php print render($content['links']); ?>

  <?php print render($content['comments']); ?>
</article>
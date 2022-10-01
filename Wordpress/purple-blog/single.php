<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="<?= get_stylesheet_uri() ?>" type="text/css" media="screen" />
</head>
<body>
<div id="container">
  <?php get_header() ?>
  <div id="posts">
    <?php
      if(have_posts()):
        while(have_posts()):
          the_post();
    ?>
    <div class="post">
      <h2><a href="<?=the_permalink(); ?>"><?= the_title(); ?> (<?= the_id(); ?>)</a></h2>
      <p class="date"><?=the_time('F j, Y - H:s A'); ?></p>
      <div class="entry">
        <p class="thumb"><?=the_post_thumbnail(); ?></p>
        <p><?php the_content(); ?></p>
        <p><?php //the_excerpt(); ?></p>
      </div>
      <div class="postmetadata"> <span class="tags"><?=the_category(); ?></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="comments-no"><a href="#">1 Comment</a></span> <br />
      </div>
      <?php comments_template() ?>
    </div>
    <?php          
        endwhile;
      endif;
    ?>
  </div>
<?php get_sidebar() ?>
</div>
<?php get_footer() ?>
</body>
</html>

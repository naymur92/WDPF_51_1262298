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

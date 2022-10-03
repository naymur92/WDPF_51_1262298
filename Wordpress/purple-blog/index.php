  <?php get_header() ?>
  <div id="posts">
    <?php
      if(have_posts()):
        while(have_posts()):
          the_post();
    ?>
    <div class="post">
      <h2><a href="<?=the_permalink(); ?>"><?= the_title(); ?></a></h2>
      <p class="date"><?=the_time('F j, Y - H:s A'); ?></p>
      <div class="entry">
        <p class="thumb"><a href="<?=the_permalink(); ?>"><?=the_post_thumbnail(); ?></a></p>
        <p><?php //the_content('Read more', false); ?></p>
        <p><?php the_excerpt(); ?></p>
      </div>
      <div class="postmetadata">
        <span class="tags"><?=the_category(); ?></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <span class="comments-no">
        <?php comments_number( 'no responses', 'one response', '% responses' ); ?>
          <!-- <a href="#">1 Comment</a> -->
        </span> <br />
      </div>
    </div>
    <?php          
        endwhile;
      endif;
    ?>
  </div>
<?php get_sidebar() ?>
</div>
<?php get_footer() ?>
<?php wp_footer(); ?>
</body>
</html>

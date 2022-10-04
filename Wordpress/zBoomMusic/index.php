<?php get_header(); ?>
<!--------------Content--------------->
  <section id="content">
    <div class="wrap-content zerogrid">
      <div class="row block03">
        <div class="col-2-3">
          <div class="wrap-col">
            <?php
              if(have_posts()):
                while(have_posts()):
                  the_post();
            ?>
            <article>
              <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
              <?php the_post_thumbnail(); ?>
              <div class="info">[By <?php the_author(); ?> on <?php the_time('F j, Y - h:m A') ?> with <a href="<?php the_permalink(); ?>"><?php comments_number('no comment', 'one comment', '% comments'); ?></a>]</div>
              <?php the_excerpt(); ?>
            </article>
            <?php
                endwhile;
              endif;
            ?>
            <ul id="pagi">
              <li><a class="current" href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">next</a></li>
            </ul>
          </div>
        </div>
        <?php get_sidebar(); ?>
      </div>
    </div>
  </section>
<?php get_footer(); ?>
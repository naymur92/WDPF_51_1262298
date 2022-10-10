
<!-- 
	template name: myhome
 -->
<?php get_header(); ?>

<div class="featured">
	<div class="wrap-featured zerogrid">
		<div class="slider">
			<div class="rslides_container">
				<ul class="rslides" id="slider">
					<?php
						$sql = new WP_Query(array(
							'post_type'=>'slider'
						));
						if($sql->have_posts()):
							while($sql->have_posts()): $sql->the_post();								
					?>
					<li><?php the_post_thumbnail(); ?></li>
					<?php
							endwhile;
						endif;
					?>
				</ul>
			</div>
		</div>
	</div>
</div>

<!--------------Content--------------->
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block01">
			<?php
				$sql = new WP_Query(array(
					'post_type'=>'service',
					'posts_per_page'=>3
					
				));

				if($sql->have_posts()):
					while($sql->have_posts()): $sql->the_post();
			?>
			<div class="col-1-3">
				<div class="wrap-col box">
					<h2><?php the_title(); ?></h2>
					<?php the_content(); ?>
					<div class="more"><a href="#">[...]</a></div>
				</div>
			</div>
			<?php
					endwhile;
				endif;
			?>
		</div>
		<div class="row block02">
			<div class="col-2-3">
				<div class="wrap-col">
					<div class="heading"><h2>Latest Blog</h2></div>
					<?php
						$sql = new WP_Query(array(
							'post_type'=>'post',
							'posts_per_page'=>3,
							
						));

						if($sql->have_posts()):
							while($sql->have_posts()): $sql->the_post();
					?>
					<article class="row">
						<div class="col-1-3">
							<div class="wrap-col">
								<?php the_post_thumbnail(); ?>
							</div>
						</div>
						<div class="col-2-3">
							<div class="wrap-col">
								<h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
								<div class="info">By <?php the_author() ?> on <?php the_time("F j, Y - h:m A") ?> with <a href="#"><?php comments_number('no comment', 'one comment', '% comments') ?></a></div>
								<?php the_excerpt() ?>
							</div>
						</div>
					</article>
					<?php
							endwhile;
						endif;
					?>
					
				</div>
			</div>
			<?php dynamic_sidebar('sidebar-1') ?>
		</div>
	</div>
</section>
<!--------------Footer--------------->
<?php get_footer(); ?>

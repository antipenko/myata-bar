<?php
/**
 * Single
 *
 * Loop container for single post content
 */
get_header(); ?>
	<div class="large-12 medium-12 small-12 columns">
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?><!-- BEGIN of Post -->
				<?php $image = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ));  ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
					<h1 class="page_title single-page-title text-center" style="background-image: url('<?php echo $image; ?>'); background-size:cover">
						<span class="ba-menu__title"><?php the_title(); ?> </span>
					</h1>

					<!-- <h6><?php //_e('Written by');?> <?php //the_author_link(); ?> on <?php //the_time(get_option('date_format')); ?></h6> -->
					<?php if ( has_post_thumbnail()) : ?>
						<div title="<?php the_title_attribute(); ?>" class="th ba-post-th">
							<?php //the_post_thumbnail('page-blog'); ?>
						</div>
					<?php endif; ?>
					<?php the_content(); ?>
					<h6><?php _e('Posted Under:', 'foundation' );?> <?php the_category(', '); ?></h6>
					<?php comments_template(); ?>
				</article>
			<?php endwhile; ?><!-- END of Post -->
		<?php endif; ?>
	</div><!-- END of .columns -->
	<!-- <div class="large-4 medium-4 small-12 columns sidebar"> -->
		<?php //get_sidebar('right'); ?>
	</div>END of .columns.sidebar


<?php get_footer(); ?>


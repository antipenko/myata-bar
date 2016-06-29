<?php
/*
 * Template Name: Menu Page
 */
get_header(); ?>




<section class="ba-menu ba-menu-page" id="menu">
	<div class="row">
		<h2 class="text-center main-title ">
			<span class="ba-menu__title">Меню</span>
		</h2>
		<?php
		$menuArgs = array(
			'post_type'=>'menu',
			'posts_per_page'=>-1
			);
			$menu = new WP_Query($menuArgs);?>
			<?php if($menu->have_posts()): ?>
				<?php
				// 	$args = array(
				// 		'show_option_all'    => '',
				// 		'show_option_none'   => __('No categories'),
				// 		'orderby'            => 'name',
				// 		'order'              => 'ASC',
				// 		'show_last_update'   => 0,
				// 		'style'              => '',
				// 		'show_count'         => 0,
				// 		'hide_empty'         => 1,
				// 		'use_desc_for_title' => 1,
				// 		'child_of'           => 0,
				// 		'feed'               => '',
				// 		'feed_type'          => '',
				// 		'feed_image'         => '',
				// 		'exclude'            => '',
				// 		'exclude_tree'       => '',
				// 		'include'            => '',
				// 		'hierarchical'       => true,
				// 		'title_li'           => __( 'Categories' ),
				// 		'number'             => NULL,
				// 		'echo'               => 1,
				// 		'depth'              => 0,
				// 		'current_category'   => 0,
				// 		'pad_counts'         => 0,
				// 		'taxonomy'           => 'category',
				// 		'walker'             => 'Walker_Category',
				// 		'hide_title_if_empty' => false,
				// 		'separator'          => '',
				// 		);

				// 	wp_list_categories( $args );

				?>
				<div class="columns medium-12 ba-page-menu__hook text-center">
					<?php
					$imageHook = get_field('pic-kalyan');
					if( !empty($imageHook) ): ?>
					<img src="<?php echo $imageHook['url']; ?>" alt="<?php echo $imageHook['alt']; ?>" />
				<?php endif; ?>
				<h2 class=" ba-page-menu__title-cat  main-title ">
					<span class="ba-menu__title">Кальяны</span>
				</h2>

				<dl class="ba-menu__list text-left">
					<?php while($menu->have_posts()): $menu->the_post() ?>
						<?php
						$category = get_the_category();
						$nameCategory = $category[0]->cat_name;
						if ($nameCategory === 'Кальяны'):
							?>
						<dt><?php the_title(); ?></dt>
						<dd>
							<span><?php the_field('description'); ?></span>
							<strong><?php the_field('price'); ?> </strong>
						</dd>

					<?php endif ?>
				<?php endwhile; ?>
				<?php wp_reset_query(); ?>
			</dl>
		</div>

		<div class="columns medium-12 ba-page-menu__hook text-center">
			<?php
			$imageFood = get_field('pic-food');
			if( !empty($imageFood) ): ?>
			<img src="<?php echo $imageFood['url']; ?>" alt="<?php echo $imageFood['alt']; ?>" />
		<?php endif; ?>
		<h2 class=" ba-page-menu__title-cat  main-title ">
			<span class="ba-menu__title">Блюда</span>
		</h2>

		<dl class="ba-menu__list text-left">
			<?php while($menu->have_posts()): $menu->the_post() ?>
				<?php
				$category = get_the_category();
				$nameCategory = $category[0]->cat_name;
				if ($nameCategory === 'Блюда'):
					?>
				<dt><?php the_title(); ?></dt>
				<dd>
					<span><?php the_field('description'); ?></span>
					<strong><?php the_field('price'); ?> </strong>
				</dd>

			<?php endif ?>
		<?php endwhile; ?>
		<?php wp_reset_query(); ?>
	</dl>
</div>

<div class="columns medium-12 ba-page-menu__hook text-center">
	<?php
	$imagedrink = get_field('pic-drink');
	if( !empty($imagedrink) ): ?>
	<img src="<?php echo $imagedrink['url']; ?>" alt="<?php echo $imagedrink['alt']; ?>" />
<?php endif; ?>
<h2 class=" ba-page-menu__title-cat  main-title ">
	<span class="ba-menu__title">Напитки</span>
</h2>

<dl class="ba-menu__list text-left">
	<?php while($menu->have_posts()): $menu->the_post() ?>
		<?php
		$category = get_the_category();
		$nameCategory = $category[0]->cat_name;
		if ($nameCategory === 'Напитки'):
			?>
		<dt><?php the_title(); ?></dt>
		<dd>
			<span><?php the_field('description'); ?></span>
			<strong><?php the_field('price'); ?> </strong>
		</dd>

	<?php endif ?>
<?php endwhile; ?>
</dl>
</div>
<?php endif;?>
</div>
</div>
</section>

<?php get_footer(); ?>

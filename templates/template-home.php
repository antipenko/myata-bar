<?php
/*
 * Template Name: Home Page
 */
get_header(); ?>
<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post();
	$image = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ));
	?>
	<section class="ba-main parallax-window" data-parallax="scroll" data-image-src="<?php echo $image;?>">

		<div class="logo small-only-text-center text-center">
			<a href="<?php bloginfo('url'); ?>" ><img src="<?php echo get_header_image(); ?>" alt="<?php bloginfo('name'); ?>"/></a>
		</div> <!-- end of .logo  -->

		<div class="ba-main-inform text-center">
			<h2 class="ba-main-inform__title"> <?php the_field('main_header') ?>	</h2>
			<p class="ba-main-inform__text text-center"> <?php  the_field('main_text') ?>	</p>

			<a href="<?php bloginfo('template_url');?>/contacts" class="button ba-smoke">
				<?php the_field('main_button_text') ?>
				<!-- <i class="fa fa-cutlery" aria-hidden="true"></i> -->
			</a>
			<!-- <div class="main-menu">
				<?php //wp_nav_menu( array( 'theme_location' => 'header-menu', 'fallback_cb' => 'foundation_page_menu', "container" => false, 'walker' => new foundation_navigation() ) ); ?>
			</div> -->

			<div class="main-menu">
				<nav id="ba-menu">
					<ul>
						<li>
							<a href="#menu">
								<p>Меню </p>
								<i class="fa fa-cutlery" aria-hidden="true"></i>
							</a>
						</li>
						<li>
							<a href="#sales">
								<p>Акции </p>
								<i class="fa fa-coffee" aria-hidden="true"></i>
							</a>
						</li>
						<li>
							<a href="#blog">
								<p>Блог </p>
								<i class="fa fa-calendar" aria-hidden="true"></i>
							</a>
						</li>
						<li>
							<a href="#contacts">
								<p>Контакты </p>
								<i class="fa fa-compass" aria-hidden="true"></i>
							</a>
						</li>
					</ul>
				</nav>
			</div>

		<?php endwhile; ?>
	<?php endif; ?>
</section>

<section class="ba-description">
	<div class="row text-center">
		<h2 class="ba-description__title text-center">
			<span class="main-title"><?php the_field('description_title'); ?></span>
			<i><?php the_field('description_sub_title'); ?> </i>
		</h2>
		<div class="ba-description__info">
			<p>
				<?php the_field('description_text') ?>
			</p>

			<?php
			$image = get_field('description_avatar');
			if( !empty($image) ): ?>
			<p class="ba-description__avatar">
				<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"" class="ba-description__image" />
				<strong> <?php the_field('description_name_chef') ?></strong>
			</p>
		<?php endif; ?>
		<span></span>

		<div data-scroll-reveal="enter left over .5s" class="gk-description-left-img" data-scroll-reveal-id="9" data-scroll-reveal-initialized="true" data-scroll-reveal-complete="true">
			<img src="http://shisha-premium.ru/d/745147/d/tabak.png" alt="">
		</div>
		<div data-scroll-reveal="enter right over .5s after .25s" class="gk-description-right-img" data-scroll-reveal-id="10" data-scroll-reveal-initialized="true" data-scroll-reveal-complete="true">
			<img src="http://kalyan4you.ru/upload/image/km1.png" alt="">
		</div>
	</div>
</div>
</section>

<?php
$saleArgs = array(
	'post_type'=>'sale',
	'posts_per_page'=>-1
	// 'orderby'=>'',
	// 'order'=>''
	);
	$sale = new WP_Query($saleArgs);?>
	<?php if($sale->have_posts()): ?>
		<section id="sales" class="ba-sales parallax-window" data-parallax="scroll" data-image-src="<?php bloginfo('template_url');?>/images/sales.jpg">
			<!-- <div class="ba-sales__wrap row"> -->
			<div class="ba-sales__wrap row">
				<div class="ba-sales__wrap-img columns medium-4">
					<?php $image = get_field('sales-img'); ?>
					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"">
				</div>
				<div class="ba-sales__wrap-offer text-center columns medium-8 small-12">
					<h3 >
						<span class=" main-title">
							Акции
						</span>
						<small>Специальное предложение</small>
					</h3>
					<!-- <ul class="ba-sales__list text-center"> -->
					<div class="ba-sales__list">
						<?php while($sale->have_posts()): $sale->the_post() ?>
							<!-- <li class="ba-sale-member"> -->
							<div class="ba-sale-member">
								<h4 >
									<?php the_title( ); ?>
								</h4>
								<strong class="text-left" ><?php the_field('Sale_price') ?></strong>
							<!-- </li> -->
							</div>
						<?php endwhile; ?>
					</div>
					<!-- </ul > -->
				</div>
			</div>
		</section>
	<?php endif;?>

	<section class="ba-menu" id="menu">
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
					<div class='ba-menu-wrap clearfix '>
						<div class="columns medium-4">
							<h4 class="ba-menu__list-name text-center">Кальян</h4>
							<dl class="ba-menu__list">
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
						</dl>
					</div>

					<div class="columns medium-4">
						<h4 class="ba-menu__list-name text-center">Напитки</h4>
						<dl class="ba-menu__list">
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
				<div class="columns medium-4">
					<h4 class="ba-menu__list-name text-center">Блюда</h4>
					<dl class="ba-menu__list">
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
				</dl>
			</div>
		<?php endif;?>
	</div>
	<div class="ba-menu-button text-center">
		<span><a href="<?php bloginfo('template_url');?>/menu" class="button radius large">ИЗУЧИТЬ МЕНЮ</a> </span>
	</div>
</div>
</section>

<section class="ba-blog parallax-window" data-parallax="scroll" data-image-src="<?php bloginfo('template_url');?>/images/news.jpg" id="blog">
	<div class="row">
		<h2 class="text-center main-title ">
			<span class="ba-blog__title">Блог</span>
		</h2>
		<div class="columns">
			<?php
			$latest_blog_posts = new WP_Query( array( 'posts_per_page' => 4 ) );
			$dateFormat = get_option('date_format' );

			?>
			<ul class="ba-blog__list">
				<?php if ($latest_blog_posts->have_posts()) : ?>
					<?php  while ( $latest_blog_posts->have_posts() ) : $latest_blog_posts->the_post(); ?>
						<li class="ba-blog__item">
							<a href="<?php the_permalink(); ?>" class="ba-blog-link-image medium-6 large-6 small-6" title="<?php the_title_attribute(); ?>" >
								<?php the_post_thumbnail('main-page-blog'); ?>
							</a>
							<div class="ba-blog-desc text-center">
								<h3>
									<a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a>
								</h3>
								<time datetime="<?php echo get_the_date($dateFormat); ?>"> <?php echo get_the_date($dateFormat); ?></time>
								<p> <?php echo mb_substr( strip_tags( get_the_content() ), 0, 56 ); ?></p>
							</div>

						</li>

					<?php endwhile; ?>
				<?php endif; ?>
			</ul>
		</div>
	</div>
</section>

<section class="ba-map" id="contacts">
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post();?>
			<?php if( $location = get_field('map') ):?>
				<div class="acf-map">
					<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
				</div>
			<?php endif; ?>
		<?php endwhile; ?>
	<?php endif; ?>
</section>


<div class="row">
	<!--HOME PAGE SLIDER-->
	<?php echo home_slider_template(); ?>
	<!--END of HOME PAGE SLIDER-->
</div>


<div class="row">
	<div class="columns">

		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>
</div>

<?php get_footer(); ?>

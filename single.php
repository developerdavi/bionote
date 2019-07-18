<?php
/*
Template Name: Single post
*/

get_header(); ?>

<div class="ui container" id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<?php
		// Start the loop.
		while (have_posts()) : the_post();
			/*
					* Include the post format-specific template for the content. If you want to
					* use this in a child theme, then include a file called called content-___.php
					* (where ___ is the post format) and that will be used instead.
					*/
			get_template_part('content', get_post_format());

			?>
			<br><br><br>
			<div class="ui stackable grid">
				<div class="ten wide column post">
					<?php
					// var_dump(get_the_category());
					// if (in_array('Podcasts', get_post_categories())) {
					// echo 'PODCAST!';
					// }
					$podcast = false;
					if (in_category('podcast')) :
						$podcast = true; ?>
						<div class="bio hr-title podcasts desktop">
							<h3><span style="float: right; padding-left: 10px; padding-right: 0px; line-height: 0.3em; font-size: 1.7rem; margin-top: -0.2rem"><a href="<?php base_url() ?>/sobre-podcasts">não sabe o que é um podcast?
										clique aqui!</a></span></h3>
						</div>
						<div class="bio hr-title podcasts mobile">
							<h3 style="border-bottom: none !important"><span style="padding-right: 0px; font-size: 1.7rem; line-height: 2rem"><a href="<?php base_url() ?>/sobre-podcasts">não sabe o que é um podcast?
										clique aqui!</a></span></h3>
						</div>
					<?php else : ?>
						<?php
						$categoria = get_the_category();
						$categoria = $categoria[0]->name;
						?>
						<div class="bio hr-title blog">
							<h3><span style="float: right; padding-left: 10px; padding-right: 0px; line-height: 0.3em; font-size: 1.7rem; margin-top: -0.2rem"><a href="<?php base_url() ?>/category/<?php echo $categoria ?>" class="lower"><?php echo $categoria ?></a></span></h3>
						</div>
					<?php endif;
				the_post_thumbnail();
				?>
					<h1>
						<?php the_title(); ?>
					</h1>
					<?php
					define('POST_ID', get_the_id());
					// echo get_the_id();
					// echo "<br><br>";
					the_content();
					?>
				</div>
				<div class="six wide column m-n-p">
					<div class="mobile">
						<hr class="<?php echo $podcast ? 'hr-purple' : 'hr-yellow' ?>">
					</div>
					<br><br>
					<div class="right-align" style="padding-left: 30px">
						<h1 class="post date">
							<?php the_date("j/n/Y") ?>
						</h1>
						<br>
						<div class="<?php echo $podcast ? 'podcast' : 'blog' ?>">
							<?php the_category() ?>
						</div>
						<div style="height: 0rem;">
							<img style="float: left" src="<?php echo get_bloginfo('template_directory'); ?>/img/<?php echo $podcast ? 'blablabla' : 'newspaper' ?>.svg" class="svg" id="post-<?php echo $podcast ? 'blablabla' : 'newspaper' ?>" alt="">
						</div>
						<br>
						<br>
						<?php 
							$avatar = get_avatar_url($post->post_author, array('size'=>'300'));
							if ($avatar != false)	: ?>
							<img class="avatar" src="<?php echo $avatar; ?>" alt="">
						<?php else : ?>
							<!-- <img src="/images/no-image-default.jpg"> -->
							<img class="avatar" src="<?php echo get_bloginfo('template_directory'); ?>/img/avatar.png" alt="">
						<?php endif; ?>
						<h3 class="author name no-margin bold">
							<?php echo get_the_author() ?>
						</h3>
						<br>
						<div class="author description">
							<p>
								<?php echo get_the_author_meta('description') ?>
							</p>
						</div>
						<?php if (get_the_author_meta('user_url') !== null) : ?>
							<br>
							<div class="bio left-padding hr-title <?php echo $podcast ? 'podcasts' : 'blog' ?>">
								<h3><span style="float: right; padding-left: 10px; padding-right: 0px; line-height: 0.3em; font-size: 1rem; margin-top: -0.04rem"><a href="<?php echo get_the_author_meta('user_url') ?>"><?php echo get_the_author_meta('user_url') ?></a></span>
								</h3>
							</div>
						<?php endif; ?>
						<br><br>
						<div style="height: 0rem;">
							<img id="post-links" style="float: left" src="<?php echo get_bloginfo('template_directory'); ?>/img/link.svg" class="svg" alt="">
						</div>
						<br>
						<h2 class="montserrat">Bushnell</h2>
						<div class="bio left-padding hr-title <?php echo $podcast ? 'podcasts' : 'blog' ?>">
							<h3><span style="float: right; padding-left: 10px; padding-right: 0px; line-height: 0.3em; font-size: 1rem; margin-top: -0.04rem"><a href="http://bushnell.com">bushnell.com</a></span></h3>
						</div>
						<br>
						<div style="height: 0rem;">
							<img id="post-folder" style="float: left" src="<?php echo get_bloginfo('template_directory'); ?>/img/folder.svg" class="svg" alt="">
						</div>
						<br><br><br>
						<?php

						$categories = array();
						$podcasts = get_cat_ID("podcast");

						$args = array(
							'posts_per_page'    => 4,
						);

						if ($podcast) :
							$args['category'] = $podcasts;
						else :
							$args['category__not_in'] = $podcasts;
						endif;

						$index = 0;

						$total = 0;

						$catPost = get_posts($args);
						foreach ($catPost as $post) : setup_postdata($post); ?>
							<?php
							if ($total == 3)
								break;
							$index++;

							$titulo = get_the_title();
							$categoria = $podcast ? get_category($podcasts) : get_the_category();

							$categoria = $podcast ? $categoria : $categoria[0]->name;

							$post_id = $podcast ? $categoria : get_category(get_cat_ID($categoria));
							$gambiarra = 0;

							$cat_id = $podcast ? $podcasts : get_cat_ID($categoria);

							if (isset($categories[$cat_id])) {
								$gambiarra = $categories[$cat_id];
								$categories[$cat_id] += 1;
							} else {
								$categories[$cat_id] = 1;
							}

							$post_id = $post_id->count - $gambiarra;

							if ($podcast) {
								$old_titulo = $titulo;
								$titulo = explode(urldecode("%26%238211%3B"), $titulo)[1];
								if (strlen($titulo) < 1) {
									$titulo = explode(urldecode("%E2%80%93"), $old_titulo)[1];
								}
							}
							if (get_the_id() == POST_ID) {
								$gambiarra = isset($gambiarra) ? $gambiarra + 1 : 1;
								continue;
							}

							$total++;
							?>
							<div class="hover-scale minus <?php echo $podcast ? 'hover-purple' : 'hover-yellow' ?> ">
								<a href="<?php the_permalink() ?>" class="inherit">
									<h3 class="no-margin montserrat inherit"><?php
																														echo $podcast ? 'Episódio' : $categoria;
																														echo " #" . $post_id ?>:</h3>
									<h2 class="no-margin montserrat bold inherit"><?php echo $titulo ?></h2>
									<br>
								</a>
							</div>
						<?php endforeach; ?>
						<div style="width: 100%; margin: 0 auto; text-align: right" class="left-padding">
							<a href="<?php base_url() ?>/<?php echo $podcast ? 'podcasts' : 'blog' ?>" class="three-points <?php echo $podcast ? 'purple' : 'yellow' ?>">. . .</a>
						</div>
						<br><br><br><br>
						<div class="d-table w-100">
							<img id="logo-log" src="<?php echo get_bloginfo('template_directory'); ?>/img/log.svg" class="svg <?php echo $podcast ? 'purple' : 'yellow' ?> center" alt="">
							<br>
							<small class="center gray raleway">O Bionote é uma iniciativa da Log Nature, uma empresa especializada na
								venda de materiais para a área biológica e de pesquisa ambiental.</small>
						</div>
					</div>
				</div>
			<?php
		// End the loop.
		endwhile;
		?>
		</div>
		<br><br>
		<?php if ($podcast) : ?>
			<?php include 'snippets/assine.html' ?>
			<div class="center">
        <a class="bio podcast btn" onclick="$('#m-sugestao').modal('show')">
            clique aqui e <b>sugira um tema!</b>
        </a>
			</div>
			<?php include 'snippets/suggest-form.html' ?>
		<?php endif; ?>
		<br><br>
	</main>
</div>
<?php
get_sidebar();
get_footer();

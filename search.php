<?php
/*
Template Name: Search Page
*/

global $query_string;

wp_parse_str( $query_string, $search_query );
$search = new WP_Query( $search_query );

// var_dump($search);

$search_query = $search->query['s'];
?>

<?php get_header() ?>

<?php get_sidebar() ?>

<!-- <br><br> -->

<?php include 'content.php' ?>

<br><br>

<div class="ui container">
    
<div class="ui stackable grid">

<div class="ui twelve wide column">

<div class="bio hr-title green">
    <h3><span style="float: right; padding-left: 10px; padding-right: 0px; line-height: 0.3em; font-size: 1.7rem; margin-top: -0.2rem; text-transform: lowercase">resultados da pesquisa por "<?php echo $search_query ?>"</span></h3>
</div>

<br><br>

<?php

while ( have_posts() ) : the_post();

$podcast = false;
if (in_category('podcast'))
    $podcast = true;

get_template_part( 'template-parts/content', 'page' );

// If comments are open or we have at least one comment, load up the comment template.
if ( comments_open() || get_comments_number() ) :
    comments_template();
endif;

?>
    <div class="ui two column grid">
        <div class="ui column">
            <div class="cat-post">
                <div class="thumbnail">
                    <a href="<?php the_permalink() ?>">
                        <?php the_post_thumbnail() ?>
                    </a>
                </div>
            </div>
        </div>
        <div class="ui column">
            <table>
				<tr>
					<td>
						<img style="float: left" src="<?php echo get_bloginfo('template_directory'); ?>/img/<?php echo $podcast ? 'blablabla' : 'newspaper'?>.svg" class="svg" id="newspaper"
						 alt="">
					</td>
					<td style="width: 100%;">
						<div style="background-color: <?php echo $podcast ? '#c900dd' : '#ffc215'?>; width: 100%; height: 2rem; padding: 5px">
							<h5 class="blog title" style="width: 100%;"><span class="left<?php echo $podcast ? ' white' : ''?>" style="font-weight:100" id="resumo-author">
							<?php the_author() ?></span><span class="right<?php echo $podcast ? ' white' : ''?>" id="resumo-date"><?php the_date("j/n/Y") ?></span></h5>
						</div>
					</td>
				</tr>
			</table>
			<div id="resumo-content">
				<div class="outer">
					<div class="resumo">
						<?php the_excerpt() ?>
					</div>
				</div>
				<div id="resumo-read" class="bio hr-read <?php echo $podcast ? 'podcasts' : 'blog' ?>">
					<h5><a href="<?php the_permalink() ?>"><span>ver mais</span></a></h5>
				</div>
			</div>
        </div>
    </div>


<?php

endwhile; // End of the loop.

?>
<br><br>
<?php

include 'snippets/pagination.html';

?>

</div>
<div class="four wide column">
    <h3 class="raleway italic black right" style="font-size: 1.7rem; margin-top: -0.3rem">categorias</h3>
    <br><br><br><br>
    <div class="right-align">
        <!-- <ul class="post-categories"> -->
            <?php
                $categories = get_categories();

                foreach ($categories as $key => $category) {
                    ?>
                        <!-- <li>
                            <a href="<?php base_url(); ?>/category/<?php echo $category->slug ?>">
                                <?php echo $category->name ?>
                            </a>
                        </li> -->
                        <div class="bio left-padding hr-title green">
                            <h3><span style="float: right; padding-left: 10px; padding-right: 0px; line-height: 0.3em; font-size: 1rem; margin-top: -0.04rem"><a href="<?php base_url(); ?>/category/<?php echo $category->slug ?>"><?php echo $category->name ?></a></span></h3>
                        </div>
                        <!-- <br> -->
                    <?php
                }
            ?>
        <!-- </ul> -->
    </div>
</div>
</div>
</div>
<br><br><br>
<?php get_footer() ?>

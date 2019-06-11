<?php
/*
Template Name: Contact Page

*/

get_header();
?>
<div class="ui container">
    <br><br>
    <div class="center">
        <a style="font-size: 1.7rem" class="raleway green" href="mailto:contato@bionote.com.br">contato@bionote.com.br</a>
    </div>
    <br><br>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
    the_content();
    endwhile; else: ?>
    <p>Sorry, no posts matched your criteria.</p>
    <?php endif; ?>

    <br><br>
</div>
<?php
get_footer();
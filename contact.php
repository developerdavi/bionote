<?php
/*
Template Name: Contact Page

*/

get_header();
?>
<div class="ui container">
    <br>
    <div>
        <img style="max-width: 100% src="<?php echo get_bloginfo('template_directory'); ?>/img/contato_banner.png" alt="">
    </div>
    <br><br>
    <div class="center">
        <a style="font-size: 1.7rem" class="raleway green" href="mailto:contato@bionote.com.br">contato@bionote.com.br</a>
    </div>
    <br><br>

    <div style="max-width: 70%; margin: 0 auto" class="center">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
        the_content();
        endwhile; else: ?>
        <p>Sorry, no posts matched your criteria.</p>
        <?php endif; ?>

        <br><br><br><br><br><br>

        <img class="about-icon large" src="<?php echo get_bloginfo('template_directory'); ?>/img/LOG_Bionote.svg" alt="">

        <br><br><br>
        
        <p style="font-size: 1.2rem" class="raleway">
            O Bionote é uma iniciativa da Log Nature, uma empresa especializada<br>
            na venda de materiais para a área biológica e de pesquisa ambiental
        </p>

        <br>

        <p style="font-size: 1.2rem" class="raleway">
            <b>Acompanhe a Log Nature nas redes sociais e conheça mais sobre o nosso trabalho:</b>
        </p>

        <br><br>

        <div class="ui eight column grid">
            <div class="ui column"></div>
            <div class="ui column"></div>

            <div class="ui column">
                <a href="https://www.facebook.com/logmateriais/">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/img/SVG/facebook-outline.svg" class="bio footer-icon" alt="">
                </a>
            </div>
        
            <div class="ui column">
                <a href="https://www.instagram.com/log_nature/">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/img/SVG/instagram-outline.svg" class="bio footer-icon" alt="">
                </a>
            </div>
        
            <div class="ui column">
                <a href="https://pt.linkedin.com/company/lognature">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/img/SVG/linkedin-outline.svg" class="bio footer-icon" alt="">
                </a>
            </div>
        
            <div class="ui column">
                <a href="https://www.youtube.com/channel/UCsgvnoBMLj_ruR2fGNDr5Iw">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/img/SVG/youtube-outline.svg" class="bio footer-icon" alt="">
                </a>
            </div>

            <div class="ui column"></div>
            <div class="ui column"></div>    
        </div>
    </div>

    <br><br>
</div>
<?php
get_footer();
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="Bionote blog">
  <meta name="author" content="LOG Nature">

  <link rel="icon" href="<?php echo get_bloginfo('template_directory'); ?>/favicon.png" type="image/x-icon" />

  <!-- Bootstrap core CSS -->
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->


  <!-- Custom styles for this template -->
  <link href="https://fonts.googleapis.com/css?family=Arvo:400,700,900|Raleway:400,900|Montserrat" rel="stylesheet">
  <link href="<?php echo get_bloginfo('template_directory'); ?>/blog.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="<?php echo get_bloginfo('template_directory'); ?>/js/materialize.js"></script>
  <link href="<?php echo get_bloginfo('template_directory'); ?>/semantic/semantic.css" rel="stylesheet">
  <script src="<?php echo get_bloginfo('template_directory'); ?>/semantic/semantic.min.js"></script>
  <script src="<?php echo get_bloginfo('template_directory'); ?>/semantic/modal.js"></script>
  <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/semantic/modal.css">
  <script src="<?php echo get_bloginfo('template_directory'); ?>/js/main.js"></script>

  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/materialize.css">

  <!-- Compiled and minified JavaScript -->

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  <style>
    .banner {
      /* background-attachment: scroll; */
      background-image: url("<?php echo get_bloginfo('template_directory'); ?>/img/background-icon.svg");
      background-repeat: no-repeat;
      background-position-x: 150%;
      background-position-y: 10%;
      background-size: 57em;
      background-origin: padding-box;
      background-attachment: fixed;
    }

    .footer {
      /* background-attachment: scroll; */
      background-image: url("<?php echo get_bloginfo('template_directory'); ?>/img/background-icon.svg");
      background-repeat: no-repeat;
      background-position-x: 275%;
      background-position-y: -20%;
      background-size: 57em;
      background-attachment: fixed;
    }
  </style>

  <link rel="profile" href="http://gmpg.org/xfn/11" />
  <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
  <title><?php bloginfo('name'); echo ' - '; bloginfo('description') ?></title>
  <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); wp_head(); ?>
</head>

<body>

  <div class="ui right sidebar inverted vertical menu">
    <a href="<?php base_url() ?>/" class="item <?php echo is_front_page() ? 'green ' : 'white ' ?>">
      início
    </a>
    <a href="<?php base_url() ?>/sobre/"
      class="item <?php echo is_page('sobre-bionote') ? 'green ' : 'white ' ?>">
      sobre
    </a>
    <a href="<?php base_url() ?>/podcasts/" class="item <?php echo is_page('podcasts') ? 'purple ' : 'white ' ?>">
      podcast
    </a>
    <a href="<?php base_url() ?>/blog/" class="item <?php echo is_page('blog') ? 'yellow ' : 'white ' ?>">
      blog
    </a>
    <a href="<?php base_url() ?>/contato/" class="item <?php echo is_page('contato') ? 'green ' : 'white ' ?> ">
      contato
    </a>
  </div>

  <div class="pusher">

    <div class="banner">
      <div class="mobile">
        <div class="container">
          <div class="ui grid">
            <div class="fourteen wide column">
              <a href="<?php base_url() ?>/">
                <img src="<?php echo get_bloginfo('template_directory'); ?>/img/logo.svg" class="banner-logo" alt="">
              </a>
            </div>
            <div class="two wide column green">
              <div class="ui top floating dropdown icon button v-middle transparent"
                style="margin-left: -10px !important;">
                <i class="bars large icon middle green" id="sidebar-button"></i>
                <div class="menu" style="z-index: 999">
                  <a href="<?php base_url() ?>/" class="<?php echo is_front_page() ? 'active green ' : 'white ' ?>item">
                    início
                  </a>
                  <a href="<?php base_url() ?>/sobre/"
                    class="<?php echo is_page('sobre-bionote') ? 'active green ' : 'white ' ?>item">
                    sobre
                  </a>
                  <a href="<?php base_url() ?>/podcasts/"
                    class="<?php echo is_page('podcasts') ? 'active purple ' : 'white ' ?>item">
                    podcast
                  </a>
                  <a href="<?php base_url() ?>/blog/"
                    class="<?php echo is_page('blog') ? 'active yellow ' : 'white ' ?>item">
                    blog
                  </a>
                  <a href="<?php base_url() ?>/contato/"
                    class="<?php echo is_page('contato') ? 'active green ' : 'white ' ?>item ">
                    contato
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <br>
        <br><br><br><br><br>
        <div style="width: 100%">
          <!-- <div class="item center"> -->
          <div class="ui left icon input transparent search-input center"
            style="width: 80%; margin: 0 auto; float: none; display: block">
            <form action="<?php base_url() ?>">
              <table style="margin-top: -4px">
                <tr>
                  <td>
                    <i class="search link icon"></i>
                  </td>
                  <td style="width: 100%">
                    <input type="text" name="s" id="search" style="height: 1rem">
                  </td>
                </tr>
              </table>
            </form>
          </div>
          <!-- </div> -->
        </div>
      </div>
      <div class="container mobile" style="padding: 0">
      </div>

      <div class="ui container desktop">
        <!-- <img src="<?php echo get_bloginfo('template_directory'); ?>/img/bionote-icon.svg" id="banner-icon" alt=""> -->
        <div class="left">
          <a href="<?php base_url() ?>/">
            <img src="<?php echo get_bloginfo('template_directory'); ?>/img/logo.svg" class="banner-logo" alt="">
          </a>
        </div>
        <div class="right">
          <div class="ui secondary menu v-middle" style="margin-left: -20px;">
            <a href="<?php base_url() ?>/" class="<?php echo is_front_page() ? 'active ' : '' ?>item">
              início
            </a>
            <a href="<?php base_url() ?>/sobre/" class="<?php echo is_page('sobre-bionote') ? 'active ' : '' ?>item">
              sobre
            </a>
            <a href="<?php base_url() ?>/podcasts/"
              class="<?php echo is_page('podcasts') ? 'active purple ' : '' ?>item">
              podcast
            </a>
            <a href="<?php base_url() ?>/blog/" class="<?php echo is_page('blog') ? 'active yellow ' : '' ?>item">
              blog
            </a>
            <a href="<?php base_url() ?>/contato/" class="<?php echo is_page('contato') ? 'active ' : '' ?>item">
              contato
            </a>
            <div class="item">
              <div class="ui left icon input transparent search-input">
                <form action="<?php base_url() ?>">
                  <i class="search link icon"></i>
                  <input type="text" name="s" id="search">
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script>
      $(document).ready(() => {
        // $('.ui.dropdown')
        //   .dropdown()
        //   ;
        $('#sidebar-button').click(() => {
          $('.ui.sidebar').sidebar('toggle')
        })
      })
    </script>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">

  <link href='https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i' rel='stylesheet' type='text/css'>

  <link href='https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700' rel='stylesheet' type='text/css'>

  <!-- Add jQuery library -->

  <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

  <!-- Add fancyBox -->

  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />

  <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/source/jquery.fancybox.pack.js?v=2.1.5"></script>


  
 <?php wp_head(); ?>

</head>

<body>
			<ul class="trabalhos">
			<li><a href="http://rafandrade.com.br/category/editorial/">Editorial</a></li>
		  <li><a href="http://rafandrade.com.br/category/ilustracao/">Ilustração</a></li>
			<li><a href="http://rafandrade.com.br/category/identidade-de-marca/">Marca</a></li>
			<li><a href="http://rafandrade.com.br/category/originais/">Originais</a></li>
			</ul>


<div class="col-md-12">

            <div class="header">

                          <div id="blogname">
                          <a href="http://rafandrade.com.br">RAFAEL ANDRADE</a>

                          <div id="site-description">

                          <?php bloginfo( 'description' ) ?>
                          </div>
                          </div>

                            <div class="menu">
                            <?php

                              wp_nav_menu();

                              ?>
                            </div>


                          </div> 

              </div>

              <div class="slider">


                 <section class="section-white">

                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                          <!-- Indicators -->
                          <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                          </ol>

                          <!-- Wrapper for slides -->
                          <div class="carousel-inner">
                            <div class="item active">
                              <img src="http://rafandrade.com.br/wp-content/themes/portfwp/assets/images/homeslider-1.png" alt="...">
                              <div class="carousel-caption">
                     
                              </div>
                            </div>
                            <div class="item">
                              <img src="http://rafandrade.com.br/wp-content/themes/portfwp/assets/images/homeslider-2.png" alt="...">
                              <div class="carousel-caption">

                              </div>
                            </div>
                            <div class="item">
                              <img src="http://rafandrade.com.br/wp-content/themes/portfwp/assets/images/homeslider-3.png" alt="...">
                              <div class="carousel-caption">

                              </div>
                            </div>
                          </div>
                        </div>

                  </section>

              </div>


              <ul class="sochome">

                    <li><a class="soc-facebook" href="https://www.facebook.com/rafandradesign"></a></li>

                    <li><a class="soc-linkedin" href="https://www.linkedin.com/in/rafael-andrade-design"></a></li>

                    <li><a class="soc-behance soc-icon-last" href="https://www.behance.net/faelandrade"></a></li>

              </ul>


</div>


<?php get_footer(); ?>



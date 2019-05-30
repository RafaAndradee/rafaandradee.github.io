<!DOCTYPE html>
<html lang="en">
  <head>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-121803172-1');
    </script>
    <title><?php bloginfo('name'); ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="<?php bloginfo('name'); ?>">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="keywords" content="rafael andrade, rafaandrade, rafadesigner, artes visuais, belém, belem, belém-pa, belem-pa, frelancer, freelancer, capanema-pa, webdesigner, webdesign, art, visual arts, estética, filosofia">
        <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-121803172-1"></script>


 <?php wp_head(); ?>
  </head>

<body>


<?php if (is_home()) {
  get_template_part( 'template-parts/hero' );
}
elseif (is_single()) {
  get_template_part( 'template-parts/hero-single' );
}
else {
  get_template_part( 'template-parts/hero-general' );
}
?>

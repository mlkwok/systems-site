<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/img/favicon.ico" />
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700" rel="stylesheet">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Create the 4-color bar above the header -->
    <div class="header-1"></div><div class="header-2"></div><div class="header-3"></div><div class="header-4"></div>
<div class="blog-header">

 <title> <?php echo get_bloginfo('name'); ?> </title>
      <div class="blog-title"><a href="<?php bloginfo('wpurl');?>"><?php echo get_bloginfo('name');?></a></div>

      <div class="search-box"><?php get_search_form(); ?></div>
    <?php wp_head(); ?>
</div>
  </head>

  <body>

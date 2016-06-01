<!DOCTYPE html>
<html>
<head>
  <title><?php bloginfo(); ?></title>
  <?php wp_head('name'); ?>

  <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
</head>
<body>
  <div class="container">
    <header class="row">
      <div class="twelve columns">
        <h1><?php bloginfo('name'); ?></h1>
        <h2><?php bloginfo('description'); ?></h2>
      </div>
    </header>

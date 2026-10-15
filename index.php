<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>
<body>

  <header class="site-header">
    <a href="#" class="logo">HomeFinder</a>
    <nav>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Properties</a></li>
        <li><a href="#">Agents</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <h1>Find your dream home</h1>
  </main>

  <?php wp_footer(); ?>
</body>
</html>
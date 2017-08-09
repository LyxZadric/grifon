<!DOCTYPE html>
<html>
  <head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width">
    <title><?php bloginfo('name');?></title>
    <?php wp_head();?>
  </head>

  <body>
    <header class="site-header">
        <div>
          <a href="<?php echo home_url();?>"><img src="" alt="logo_grifon"></a>

          <input type="text" name="search" value="Recherche">
          <input type="submit" name="submit" value="">

          <nav>
            <?php
              $args = array(
                'theme_location' => "secondary"
              );
              
              wp_nav_menu($args);
            ?>
          </nav>
        </div>

        <div class="menu">
            <nav>
              <?php
                $args = array(
                  'theme_location' => 'header'
                );
              ?>
              <?php wp_nav_menu($args); ?>
            </nav>
        </div>
    </header>

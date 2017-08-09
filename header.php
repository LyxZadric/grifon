<!DOCTYPE html>
<html>
  <head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width">
    <title><?php bloginfo('name');?></title>
    <?php wp_head();?>
  </head>

  <body>

    <?php include "parameters.php";?>

    <header class="site-header">

<!--LOGO + SEARCH + MENU SECONDAIRE -->
        <div class="header_top">
          <div class="logo_top">
            <a href="<?php echo home_url();?>"><img src="<?php echo $path."elements/logo.png"?>" alt="logo_grifon" id="logo_top"></a>

            <img src="<?php echo $path."elements/icon_hamburger.png"?>" alt="menu_hamburger" id="hamburger">
          </div>

          <div class="search">
            <input type="text" name="search" value="Recherche">
            <input type="submit" name="submit" value="">
          </div>

          <nav class="secondary_menu">
            <?php
              $args = array(
                'theme_location' => "secondary"
              );
              wp_nav_menu($args);
            ?>
          </nav>
        </div>

<!-- MENU PRINCIPAL -->
        <div class="header_menu">

            <nav class="main_menu">
              <?php
                $args = array(
                  'theme_location' => 'header'
                );
                wp_nav_menu($args);
              ?>
            </nav>
        </div>

<!-- IMAGE + DESCRIPTION GRIFON -->
        <div class="header_image">
          <div class="opac">
            <img src="<?php echo $path."elements/logo_blanc.png"?>" alt="logo_grifon">
            <h1><?php bloginfo("description");?></h1>
            <button type="button" name="adherer">Adhérer</button>
          </div>
        </div>
    </header>

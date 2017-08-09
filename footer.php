    <footer>

      <nav>
        <?php
          $args = array(
            'theme_location' => 'footer'
          );
        ?>
        <?php wp_nav_menu();?>
      </nav>

      <p><?php bloginfo('name');?>, copyright <?php echo date('Y');?></p>

    </footer>

  <?php wp_footer();?>
</body>
</html>

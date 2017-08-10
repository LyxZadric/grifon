    <footer>
      <div class="contact">

      </div>

      <div class="footer">
        <nav>
          <?php
            $args = array(
              'theme_location' => 'footer'
            );
          ?>
          <?php wp_nav_menu(); ?>
        </nav>

        <hr>

        <p><?php echo bloginfo('name') . " " . bloginfo('description');?> - copyright <?php echo date('Y');?><p>
        <p>Design par : <a href="">Déborah Boodhoo</a> & <a href="">Quentin Marguerite</a></p>
      </div>

    </footer>

  <?php wp_footer();?>
</body>
</html>

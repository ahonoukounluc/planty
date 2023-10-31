<?php

/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @since plenty 0.1
 */

?>
<footer class="planty-footer">
    <div>
        <div class="planty-footer-1">
            <?php wp_nav_menu(array('theme_location' => 'footer', 'menu_class' => '')); ?>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>
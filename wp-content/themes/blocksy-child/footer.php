<?php

/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @since plenty 0.1
 */

$home = home_url('/');
?>
<footer class="planty-footer">
    <div>
        <div class="planty-footer-1"><a href="<?php echo $home ?>">Mentions légales</a></div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>
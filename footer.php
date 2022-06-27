<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage flexpav
 * @since flexpav 1.0
 */

?>


    <footer>
        <div class="container">
            <div class="row">
                <div class="col">
                    <strong>FlexPav</strong> &copy; 2018 - <?= date("Y") ?> &bullet; Todos os direitos reservados.
                </div>
                <div class="col">
                    Made with &hearts; by Dumr.
                </div>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
    
</body>
</html>
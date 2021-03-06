<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>

			</div><!-- .row -->
		</div><!-- .container -->
	</div><!-- #content -->


   
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container p-3 p-md-5">
			

			<!-- <div class="row">
				<p>451 D St<br>Suite 710,<br>Boston<br>MA 02210</p>
			</div> -->

            <div class="site-logo row">
               
                	<img src="<?php echo esc_attr(get_theme_mod( 'wp_bootstrap_starter_logo' )); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
               
			</div>
        


            <div class="site-info row">
                <p style="margin-bottom: 0"><?php echo date('Y'); ?>&copy; <?php echo '<a href="'.home_url().'">'.get_bloginfo('name').'</a>'; ?></p>
            </div><!-- close .site-info -->
		</div>
	</footer><!-- #colophon -->

</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>

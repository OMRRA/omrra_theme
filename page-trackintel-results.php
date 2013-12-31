<?php
/**
 * Template Name: Track Intel Full Width Results
 * Description: A Page Template that disables a sidebar to pages
 *
 * @package Catch Themes
 * @subpackage Catch_Box
 * @since Catch Box 1.0
 */

get_header(); ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

					<?php comments_template( '', true ); ?>

                    <article class="hentry">
                        <div class="entry-content">
                            <h3>Trackintel results</h3>
                            <iframe id="trackintel-results" class="results" src="https://trackintel.com/ti/omrra/resultindex.html" seamless="seamless" width="100%" height="800px" scrolling="auto"></iframe>
                        </div>
                    </article>

				<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
        
		<?php 
        /** 
         * catchbox_after_content hook
         *
         */
        do_action( 'catchbox_after_content' ); ?>
            
	</div><!-- #primary -->
    
	<?php 
    /** 
     * catchbox_after_primary hook
     *
     */
    do_action( 'catchbox_after_primary' ); ?>    

<?php get_footer(); ?>
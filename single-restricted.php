<?php
get_header();
?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

                $viewRestrictedContent = "dmykos_view_restricted_content";
                $canViewRestrictedContent = user_can( get_current_user_id(), $viewRestrictedContent );

                var_dump($canViewRestrictedContent);

                if($canViewRestrictedContent){
                    get_template_part( 'template-parts/content/content', 'single' );

                    // If comments are open or we have at least one comment, load up the comment template.
                    if ( comments_open() || get_comments_number() ) {
                        comments_template();
                    }
                } else {
                    ?>
                    <h1>Content is Restricted</h1>
                    <?php
                }

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();

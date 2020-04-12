<?php
/**
 * The template for displaying front page
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gooddogs4life
 */

get_header();
?>

	<div id="primary" class="content-area">
        <div class="container-fluid">

        <div class="site-branding row">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$gooddogs4life_description = get_bloginfo( 'description', 'display' );
			if ( $gooddogs4life_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $gooddogs4life_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
        </div><!-- .site-branding -->
        

        
            <div class="row">
                <div class="col-lg-6 col-xl-8">
                    <?php gooddogs4life_post_thumbnail(); ?>
                </div>
                <div class="col-lg-6 col-xl-4">
                    <section class="gd4l_featured">						
                        <h2>Want to up your dog game?</h2>
                        <p>View our online videos to learn how YOU<br/>can become Sexier than a Squirrel!</p>
                        <img src="https://gooddogs4life.com/wp-content/uploads/2020/03/banner.jpg" alt="sexier than a squirrel challenge" />
                        <p class="sexierbutton">25 Days of Video Tuition<br/><a href="https://gooddogs4life.com/blog/sexier-than-a-squirrel/">Learn More CLICK HERE!</a></p>
                    </section>
                </div>
            

          
		        <div class="col-xl-4 green-puppy">
                    <ul>
                        <li>Do you want to enrich the life of your dog?</li>
                        <li>Or mold your puppy to be socially acceptable?</li>
                        <li>Does your dog have some challenging behaviors?</li>
                    </ul>			
			            <div class="row puppycta">	
					        <div class="col-sm-8 col-lg-10 col-xl-7">
						        <p>We are here to help make your dog ownership dreams come true. Together we can create an action plan that will get real results.</p>				
					        </div>
					        <div class="col-sm-4 col-lg-2 col-xl-5">
						        <div class="btn"><a href="#">We Can Help.<br/>LEARN HOW</a></div>
					        </div>			
			            </div>
                </div>
                          	
                <div class="col-xl-4 online-dog-training">			
                        <h2 class="text-center">Online Dog Training</h2>
                    
                        <p>We offer at home video training!<br/><br/>
                        Good dogs 4 Life want to help you stay uplifted during these challenging times.<br/><i>-Scott &amp; Nico</i></p>
                        <div class="btn"><a href="#">Learn More</a></div>				
                </div>
                <div class="col-xl-4">
                    <main id="main" class="site-main">
                        <?php
                        while ( have_posts() ) :
                            the_post();

                            get_template_part( 'template-parts/content', 'page' );

                            // If comments are open or we have at least one comment, load up the comment template.
                            if ( comments_open() || get_comments_number() ) :
                                comments_template();
                            endif;

                        endwhile; // End of the loop.
                        ?>

                    </main><!-- #main -->
                </div><!--off col-->
            </div><!--off row-->
        </div><!--off container-->        
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();

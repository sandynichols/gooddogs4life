<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gooddogs4life
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<?php //if home page ?>	

<div class="container-fluid">
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
	</div>



	<div class="row">
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



		
				<header class="entry-header">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				</header><!-- .entry-header -->

				<div class="entry-content">
					<?php
					the_content();

					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'underboot' ),
						'after'  => '</div>',
					) );
					?>
				</div><!-- .entry-content -->

				<?php if ( get_edit_post_link() ) : ?>
					<footer class="entry-footer">
						<?php
						edit_post_link(
							sprintf(
								wp_kses(
									/* translators: %s: Name of current post. Only visible to screen readers */
									__( 'Edit <span class="screen-reader-text">%s</span>', 'underboot' ),
									array(
										'span' => array(
											'class' => array(),
										),
									)
								),
								get_the_title()
							),
							'<span class="edit-link">',
							'</span>'
						);
						?>
					</footer><!-- .entry-footer -->
				<?php endif; ?>
			</article><!-- #post-<?php the_ID(); ?> -->


		</div><!--off col-->
	</div><!--off row-->
</div><!--off container-->

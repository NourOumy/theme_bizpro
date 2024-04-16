<!-- Start Slider -->
<section id="j-slider">
			<div class="slide-main">

			<?php
            $loop = new WP_Query( array( //variable = tableau. wp_Query = jargon php
                'post_type' => 'slider', // Va rechercher le type de contenu "contenu créé"
                'posts_per_page' => -1, // Affiche tout sans limite grâce au -1, si 10 on met 10
                
            ));
            //problème car dans le html, il ya une classe active donc mettre une condition dans la boucle
             
            ?>
           
            <!-- personnalise la boucle -->
            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <!-- Ce qui doit être "bouclé" -->
            <!-- Slide One - Set the background image for this slide in the line below -->
            
          <!-- Single Slider -->
				<div class="single-slider" style="background-image:url(<?php the_post_thumbnail_url()?>" >
					<div class="container">
						<div class="row">
							<div class="col-md-8 col-sm-12 col-xs-12">
								<!-- Slider Text -->
								<div class="slide-text left">
									<div class="slider-inner">
										<h1><?php bloginfo('description') ?></h1>
										<p><?php the_excerpt()
										?></p>
										<div class="slide-button">
											<a href="#" class="button primary">Contact Us</a>
										</div>
									</div>
								</div>
								<!--/ End Slider Text -->
							</div>
						</div>
					</div>
				</div>
				<!--/ End Single Slider -->
            <!-- ******************* -->
            
            
            <?php endwhile;
            wp_reset_query();
            ?>

				

				

			</div>
		</section>
		<!--/ End Slider -->
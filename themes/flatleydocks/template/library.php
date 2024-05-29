<?php



/**

 * Template name: Document Library

 *

 * Learn more: http://codex.wordpress.org/Template_Hierarchy

 *

 * @package WordPress

 */





get_header(); 

?>

<?php

			

	$document_details = get_field('document_details');	



	if( $document_details ): ?>	

		<section class="content-about">

			<div class="container">

				<div class="row">

					<div class="col-12">

						<div class="writen-conten mb-0">

							<h1 class="title-top"><?php echo $document_details['title']?></h1>

							<p><?php echo $document_details['content']?></p>
							<?php $link_target = $document_details['button']['target'] ? $document_details['button']['target'] : '_self'; ?>
							<button class="btn btn-theme download-huge" type="submit"><a href="<?php echo $document_details['button']['url']; ?>" target="<?php echo $link_target; ?>"><?php echo $document_details['button']['title']; ?></a></button>

						</div>

					</div>

				</div>

			</div>

		</section>

<?php endif; ?>





<section class="products section">

	<div class="container">

		<div class="row">       

			<div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">

				<div class="theme-tabing">

					<ul class="nav nav-pills flex-column" role="tablist">

						

						<?php

							if( have_rows('document_library') ):

								$j = 1;

								while ( have_rows('document_library') ) : the_row();



									$tab_title = get_sub_field('tab_title');

									$space_tab_id = strtolower(str_replace(' ', '', $tab_title));

									$tab_id = preg_replace('/[^A-Za-z0-9\-]/', '', $space_tab_id);

									

									if($j== 1){

									?>

										<li class="nav-item">

											<a class="nav-link active" data-toggle="pill" href="#<?php echo $tab_id; ?>"><?php echo $tab_title; ?></a>

										</li>

									<?php

									}else{ ?>

										<li class="nav-item">

										<a class="nav-link" data-toggle="pill" href="#<?php echo $tab_id; ?>"><?php echo $tab_title; ?></a>

									</li>

									

										

									<?php }

									

										$j++;

								endwhile;

							else :

							endif;

                        ?>

						

						

					</ul>

				</div><!-- /theme-tabing -->

			</div><!-- /col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3 -->

			<div class="col-12 col-sm-12 col-md-12 col-lg-9 col-xl-9">

				<div class="canvas-white">

					<!-- Tab panes -->

					<div class="tab-content">

						<?php

							if( have_rows('document_library') ):

								$j = 1;

								while ( have_rows('document_library') ) : the_row();



									$tab_title = get_sub_field('tab_title');

									$space_tab_id = strtolower(str_replace(' ', '', $tab_title));

									$tab_id = preg_replace('/[^A-Za-z0-9\-]/', '', $space_tab_id);

									if($j==1){

										$tab = 'active';

									}else{

										$tab = 'fade';

									}

									?>

										<div id="<?php echo $tab_id; ?>" class="container tab-pane <?php echo $tab; ?>">

											<div id="accordion">

												

												<?php

													if( have_rows('content') ):

														$k = 1;

														while ( have_rows('content') ) : the_row();

															$accordian_name = str_replace('®', '<span class="copyright">®</span>', get_sub_field('accordian_name'));

															$accordian_content = get_sub_field('accordian_content');

															$collapsed = 'collapsed';


														?>

															<div class="card">

																<div class="card-header">

																	<a class="card-link <?php echo $collapsed?>" data-toggle="collapse" href="#collapse<?php echo $j.$k; ?>">

																		<span style="flex:none;"><?php echo $accordian_name; ?></span>

																	</a>

																</div>

																<div id="collapse<?php echo $j.$k; ?>" class="collapse <?php echo $card_show; ?>" data-parent="#accordion">

																	<div class="card-body">

																		<?php echo $accordian_content; ?>

																	</div>

																</div>

															</div>

														<?php	

														$k++;

														endwhile;

													else :

													endif;

												?>

												

												

											  </div>

										</div>

											

									<?php 

									

											$j++;

								endwhile;

							else :

							endif;

                        ?>

						

						

					</div>

				</div><!-- /canvas-white -->

			</div><!-- /col-12 col-sm-12 col-md-12 col-lg-9 col-xl-9 -->

		</div><!-- /row -->

	</div>

</section>

<section class="section box-menu">

	<div class="container">

		<?php dynamic_sidebar( 'product-section' ); ?>

		<?php //dynamic_sidebar( 'guarantee-section' ); ?>

	</div>

</section>

<?php               

get_footer();



?>  
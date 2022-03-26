<?php
/**
* Template Name: Design
*
**/

get_header();
?>

<div class="content-area">
	<main id="main" class="site-main">
		<?php
		if ( have_posts() ) :
			?>
			<section class="site-content">
				<?php the_breadcrumb();?>
				<h1>
					<?php the_field( "design_t1" );?>	
				</h1>
			</section>
			<div class="big_block">
				<section class="little_block site-content">
					<h2><?php the_field( "design_sub_t1" );?></h2>
					<select class="js-example-programmatic-multi select-design" name="states[]" multiple="multiple">
						<option value="Визитки">Визитки</option>
						<option value="Листовки А7-А5">Листовки А7-А5</option>
						<option value="Листовки А4-А3">Листовки А4-А3</option>
						<option value="Буклеты">Буклеты</option>
						<option value="Каталоги">Каталоги</option>
						<option value="Блакноты">Блакноты</option>
						<option value="Плакаты">Плакаты</option>
						<option value="Баннеры 0,5-6 м2">Баннеры 0,5-6 м2</option>
						<option value="Баннеры 6-12 м2">Баннеры 6-12 м2</option>
						<option value="Баннеры 12-18 м2">Баннеры 12-18 м2</option>
					</select>
					<div class="button_filter">
						<button type="button" class="js-programmatic-multi-button" data-click-value="Визитки">Визитки</button>
						<button type="button" class="js-programmatic-multi-button" data-click-value="Листовки А7-А5">Листовки А7-А5</button>
						<button type="button" class="js-programmatic-multi-button" data-click-value="Листовки А4-А3">Листовки А4-А3</button>
						<button type="button" class="js-programmatic-multi-button" data-click-value="Буклеты">Буклеты</button>
						<button type="button" class="js-programmatic-multi-button" data-click-value="Каталоги">Каталоги</button>
						<button type="button" class="js-programmatic-multi-button" data-click-value="Блакноты">Блакноты</button>
						<button type="button" class="js-programmatic-multi-button" data-click-value="Плакаты">Плакаты</button>
						<button type="button" class="js-programmatic-multi-button" data-click-value="Баннеры 0,5-6 м2">Баннеры 0,5-6 м2</button>
						<button type="button" class="js-programmatic-multi-button" data-click-value="Баннеры 6-12 м2">Баннеры 6-12 м2</button>
						<button type="button" class="js-programmatic-multi-button" data-click-value="Баннеры 12-18 м2">Баннеры 12-18 м2</button>

						<!-- <span class="more_button">Полный перечень</span> -->
					</div>
				</section>

				<section class="little_block site-content">
					<h2><?php the_field( "design_sub_t2" );?></h2>
					<textarea class="my_style text-design" name="my_style" rows="5" placeholder="Опишите желаемый стиль, элементы и полное текстовое содержание. Возможно с примерами. Это ускорит взаимопонимание..."></textarea>
					<!-- <label class="custom-file-upload">
						<input type="file"/>
						<i class="fa fa-link" aria-hidden="true"></i> Выберите файл
					</label> -->
				</section>

				<section class="cost site-content">
					<div class="all_cost">
						<!-- <div class="single_cost">
							<div class="md-3"><h4>Стоимость:</h4></div>
							<div class="md-3"><h5>500 грн</h5></div>
							<div class="md-6"><h6>Дизайн баннера</h6></div>
						</div>
						<div class="single_cost">
							<div class="md-3">&nbsp;</div>
							<div class="md-3"><h5>200 грн</h5></div>
							<div class="md-6"><h6>Дизайн визитки</h6></div>
						</div> -->
					</div>
					<div class="summ_cost">
						<div class="md-3"><h4>Итого:</h4></div>
						<div class="md-3"><h5>0 грн</h5></div>
						<div class="md-6"><a href="#order_design" class="buy buy-design">Заказать</a></div>
					</div>
				</section>
				<div id="order_design" class="pop-up" style="display: none;"><!-- hidden inline form -->
					<h3>Заказать дизайн</h3>
					<?php echo do_shortcode('[contact-form-7 id="394" title="Заказать Дизайн"]'); ?>
				</div>
				
				<section class="little_block site-content how_we_work">
					<h2><?php the_field( "design_t2" );?></h2>
					<?php if( have_rows('design_work') ): ?>
						<div class="design_work-items">
							<?php while ( have_rows('design_work') ) : the_row();?>
								<div class="md-3 design_work-item">
									<img src="<?php the_sub_field('design_work_img');?>">
									<p><?php the_sub_field('design_work_text');?></p>
								</div>

							<?php endwhile;?>
						</div>
						<?php else : ?>
						<?php endif; ?>					
					</section>
				</div>				

				<!-- People -->
				<section class="design_people site-content">
					<div class="container">
						<?php
						$design_t3 = get_field( "design_t3" );

						$design_text_0 = get_field( "design_text_0" );
						$design_text_1 = get_field( "design_text_1" );
						$design_text_2 = get_field( "design_text_2" );
						$design_text_3 = get_field( "design_text_3" );
						$design_text_4 = get_field( "design_text_4" );
						$design_text_5 = get_field( "design_text_5" );
						?>					
						<h2><?php echo $design_t3;?></h2>

						<?php if( have_rows('design_people') ): ?>
							<div class="design_people-items">
								<?php while ( have_rows('design_people') ) : the_row();?>

									<div class="md-4 design_people-item">
										<div class="design_people-item_img" style="background: url('<?php the_sub_field('design_people_img');?>');"></div>
										<h4><?php the_sub_field('design_people_name');?></h4>

										<div class="design_people_skill">
											<h5><?php echo $design_text_0;?></h5>
											<?php 
											$skill_level_rang_n_1 = get_sub_field('design_people_parameter_1');
											$skill_level_rang_1 = $skill_level_rang_n_1 / 5 * 100;

											$skill_level_rang_n_2 = get_sub_field('design_people_parameter_2');
											$skill_level_rang_2 = $skill_level_rang_n_2 / 5 * 100;

											$skill_level_rang_n_3 = get_sub_field('design_people_parameter_3');
											$skill_level_rang_3 = $skill_level_rang_n_3 / 5 * 100;

											$skill_level_rang_n_4 = get_sub_field('design_people_parameter_4');
											$skill_level_rang_4 = $skill_level_rang_n_4 / 5 * 100;

											$skill_level_rang_n_5 = get_sub_field('design_people_parameter_5');
											$skill_level_rang_5 = $skill_level_rang_n_5 / 5 * 100;																																																				
											?>
											<div class="design_people_skill_item">
												<div class="md-6">
													<span><?php echo $design_text_1;?></span>
												</div>
												<div class="md-6">
													<div class="skill_level">
														<span style="width: <?php echo $skill_level_rang_1;?>%" class="skill_level_rang">
															<?php echo $skill_level_rang_n_1;?> из 5
														</span>
													</div>
												</div>												
											</div>
											<div class="design_people_skill_item">
												<div class="md-6">
													<span><?php echo $design_text_2;?></span>
												</div>
												<div class="md-6">
													<div class="skill_level">
														<span style="width: <?php echo $skill_level_rang_2;?>%" class="skill_level_rang">
															<?php echo $skill_level_rang_n_2;?> из 5
														</span>
													</div>
												</div>												
											</div>
											<div class="design_people_skill_item">
												<div class="md-6">
													<span><?php echo $design_text_3;?></span>
												</div>
												<div class="md-6">
													<div class="skill_level">
														<span style="width: <?php echo $skill_level_rang_3;?>%" class="skill_level_rang">
															<?php echo $skill_level_rang_n_3;?> из 5
														</span>
													</div>
												</div>												
											</div>
											<div class="design_people_skill_item">
												<div class="md-6">
													<span><?php echo $design_text_4;?></span>
												</div>
												<div class="md-6">
													<div class="skill_level">
														<span style="width: <?php echo $skill_level_rang_4;?>%" class="skill_level_rang">
															<?php echo $skill_level_rang_n_4;?> из 5
														</span>
													</div>
												</div>												
											</div>
											<div class="design_people_skill_item">
												<div class="md-6">
													<span><?php echo $design_text_5;?></span>
												</div>
												<div class="md-6">
													<div class="skill_level">
														<span style="width: <?php echo $skill_level_rang_5;?>%" class="skill_level_rang">
															<?php echo $skill_level_rang_n_5;?> из 5
														</span>
													</div>
												</div>												
											</div>																																																
										</div>
										<p><?php the_sub_field('design_people_text');?></p>
									</div>

								<?php endwhile;?>
							</div>
							<?php else : ?>
							<?php endif; ?>					
						</div>
					</section>
					<?php
				endif;
				?>

				<!-- Portfolio -->
				<section class="portfolio site-content">
					<div class="container">
						<?php
						$portfolio_title = get_field( "portfolio_title", 71 );
						?>					
						<h3><?php echo $portfolio_title;?></h3>

						<?php if( have_rows('portfolio', 71) ): ?>
							<div class="portfolio-items">
								<?php while ( have_rows('portfolio', 71) ) : the_row();?>

									<div class="portfolio-item">
										<a data-fancybox="gallery" href="<?php the_sub_field('portfolio_img_big', 71);?>" alt="<?php the_sub_field('portfolio_text', 71);?>"><img src="<?php the_sub_field('portfolio_img', 71);?>"></a>
									</a>
								</div>

							<?php endwhile;?>
						</div>
						<?php else : ?>
						<?php endif; ?>

					</div>
				</section>

			</main><!-- #main -->
		</div><!-- #primary -->

		<?php
		get_footer();

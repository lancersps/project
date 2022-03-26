<?php
/**
* Template Name: My Page
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
						<?php the_title();?>	
					</h1>					
					<?php// the_content();?>	

					<div class="info_block">
						<div class="personal_info">
							<h5>Профиль</h5>
							<p><span>Имя: </span>Андрей</p>
							<p><span>Телефон: </span>068 668 43 43</p>
							<p><span>Сфера: </span>442 9424 59232 528</p>
							<p><span>Е-mail: </span>artem.milicyn@gmail.com</p>
							<a href="#fogot_pass" rel="nofollow" class="modalbox"><h6>Хотите сменить текущий пароль?</h6></a>
						</div>
						<div class="bonus_info">
							<h5>Бонусная система</h5>
							<div class="bonus">
								<span class="current" style="width: 70%;">Вы заказали услуг на сумму: <b>2435 грн</b></span><span class="tric"></span>
								<span class="bonus_proccent">7,4%</span>
							</div>
							<div class="bonus_block_text">
								<div class="bonus_number_text">
									<div>
										<h6>Ваша скидка на данный момент: <span>Скидка не распостраняется на раздел “Вывески”</span></h6>
										<h3>5%</h3>
										<button class="change">Обменять</button>
									</div>
									
								</div>
								<div class="bonus_text">
									<p>Накопительная система бонусов. После каждого заказа на производство менеджер начисляет Вам бонусы по принципу 1грн = 1 бонус. Действие - 30 дней.</p> <p>Текущий бонус можно перекрыть более высоким бонусом. Бонусы не суммируются.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="history">
						<h5>История заказов</h5>
						<form method="get" id="searchformhistory" action="http://gromov.podarunoc.com.ua/">
							<input type="text" class="field search_form_history" name="s" id="s" placeholder="Введите номер заказа">
							<button type="submit" class="submit search_button_history" name="submit" id="searchSubmitHistory">
							    <img class="magnifying-glass svg" src="<?php bloginfo('template_url') ?>/img/magnifying-glass.svg" alt="search">
							</button>
						</form>

						<table class="main-header">
							<thead>
								<tr>
									<th width="23%">Номер</th>
									<th width="23%">Дата заказа</th>
									<th width="23%">Сроки</th>
									<th width="23%">Производство</th>
									<th width="23%">Дизайн</th>
									<th>Тип доставки</th>
								</tr>
							</thead>
						</table>

						<div class="single_order">
							<div  class="accordion">
								<table class="order">
									<thead>
										<tr>
											<th>42052</th>
											<th>02/04/19</th>
											<th>5 суток</th>
											<th>2425 грн</th>
											<th>300 грн</th>
											<th>Самовывоз из Новой Почты</th>
										</tr>
									</thead>
								</table>
							</div>
								<div  class="panel">
									<table class="order_detail">
										<tbody>
											<tr>
												<td>Постер</td>
												<td>02/04/19</td>
												<td>2 суток</td>
												<td>1240 грн/200 шт.</td>
												<td>0 грн</td>
												<td></td>
											</tr>
											<tr>
												<td>Этикетки</td>
												<td>02/04/19</td>
												<td>5 суток</td>
												<td>120 грн/10 шт.</td>
												<td>300 грн</td>
												<td></td>
											</tr>
											<tr>
												<td>Билеты</td>
												<td>02/04/19</td>
												<td>3 суток</td>
												<td>1240 грн/200 шт.</td>
												<td>0 грн</td>
												<td></td>
											</tr>
											<tr>
												<td>Билеты</td>
												<td>02/04/19</td>
												<td>5 суток</td>
												<td>1240 грн/200 шт.</td>
												<td>0 грн</td>
												<td></td>
											</tr>											
										</tbody>
									</table>
								</div>
						</div>
						<div class="single_order">
							<div  class="accordion">
								<table class="order">
									<thead>
										<tr>
											<th>42051</th>
											<th>02/04/19</th>
											<th>5 суток</th>
											<th>2425 грн</th>
											<th>0 грн</th>
											<th>Самовывоз из Новой Почты</th>
										</tr>
									</thead>
								</table>
							</div>
								<div  class="panel">
									<table class="order_detail">
										<tbody>
											<tr>
												<td>Постер</td>
												<td>02/04/19</td>
												<td>2 суток</td>
												<td>1240 грн/200 шт.</td>
												<td>0 грн</td>
												<td></td>
											</tr>
											<tr>
												<td>Билеты</td>
												<td>02/04/19</td>
												<td>5 суток</td>
												<td>1240 грн/200 шт.</td>
												<td>0 грн</td>
												<td></td>
											</tr>											
										</tbody>
									</table>
								</div>
						</div>
						<div class="single_order">
							<div  class="accordion">
								<table class="order">
									<thead>
										<tr>
											<th>42050</th>
											<th>02/04/19</th>
											<th>2 суток</th>
											<th>1240 грн</th>
											<th>0 грн</th>
											<th>Самовывоз из Новой Почты</th>
										</tr>
									</thead>
								</table>
							</div>
								<div  class="panel">
									<table class="order_detail">
										<tbody>
											<tr>
												<td>Постер</td>
												<td>02/04/19</td>
												<td>2 суток</td>
												<td>1240 грн/200 шт.</td>
												<td>0 грн</td>
												<td></td>
											</tr>											
										</tbody>
									</table>
								</div>
						</div>
					</div>
				</section>
			<?php else : ?>
			<?php endif; ?>		
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();

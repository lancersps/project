<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gromov
 */

?>


	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<div class="container">
				<!-- <div class="wrapper"> -->
					<div class="our-contact">
						<div class="title"><?php the_field('footer_our_text', 'option'); ?></div>
							<div class="wrapper">
								<div class="md-4">
									<?php
										// check if the repeater field has rows of data
										if( have_rows('footer_phone', 'option') ):
										 	// loop through the rows of data
										    while ( have_rows('footer_phone', 'option') ) : the_row();
										        // display a sub field value
											    ?>
													<h3><a href="tel:<?php the_sub_field('footer_phone_href', 'option');?>"><?php the_sub_field('footer_phone_num', 'option');?></a></h3>
											    <?php
										    endwhile;
										else :
										    // no rows found
										endif;
									?>									
								</div>
								<div class="md-8">
									<h3><a href="<?php the_field('footer_email_href', 'option'); ?>"><?php the_field('footer_address', 'option'); ?></a></h3>
									<h3><a href="mailto:<?php the_field('footer_email', 'option'); ?>"><?php the_field('footer_email', 'option'); ?></a></h3>	
								</div>								
							</div>
					</div>
					<div class="about">
						<?php 
						$footer_menu_about_us = get_field('footer_menu_about_us', 'option');
						if( $footer_menu_about_us ): 
						?>
						<div class="title"><?php the_field('footer_about_us_text', 'option'); ?></div>
						<ul>
							<?php foreach( $footer_menu_about_us as $footer_menu_about_us_li ): ?>
							<li>
								<a href="<?php echo $footer_menu_about_us_li ?>"><?php echo get_the_title(url_to_postid($footer_menu_about_us_li));  ?></a>
							</li>
							<?php endforeach; ?>
						</ul>
						<?php endif; ?>						
					</div>
					<div class="help">
						
						<?php 
						$footer_menu_help = get_field('footer_menu_help', 'option');
						if( $footer_menu_help ): 
						?>
						<div class="title"><?php the_field('footer_help_text', 'option'); ?></div>
						<ul>
							<?php foreach( $footer_menu_help as $footer_menu_help_li ): ?>
							<li>
								<a href="<?php echo $footer_menu_help_li ?>"><?php echo get_the_title(url_to_postid($footer_menu_help_li));  ?></a>
							</li>
							<?php endforeach; ?>
						</ul>
						<?php endif; ?>								
					</div>					
				<!-- </div> -->
			</div>
		</div><!-- .site-info -->
		<div class="footer-bottom">
			<div class="container">
					<!-- <div class="wrapper"> -->
						<div class="md-1">
							<div class="logo">
								<div class="logo_h1">
									<?php the_field('footer_logo_h1', 'option'); ?>
								</div>
								<div class="logo_h2">
									<?php the_field('footer_logo_h2', 'option'); ?>	
								</div>
							</div>
						</div>
						<div class="md-2">
							<div class="social">							
								<?php
									// check if the repeater field has rows of data
									if( have_rows('footer_soc', 'option') ):
									 	// loop through the rows of data
									    while ( have_rows('footer_soc', 'option') ) : the_row();
									        // display a sub field value
										    ?>
												<a href="<?php the_sub_field('footer_soc_href', 'option');?>" target="_blank"><i class="fab <?php the_sub_field('footer_soc_icon', 'option');?>"></i></a>
										    <?php
									    endwhile;
									else :
									    // no rows found
									endif;
								?>
							</div>
						</div>
						<div class="md-5">
							<p><?php the_field('footer_copy', 'option'); ?></p>
						</div>											
						<div class="md-4">
							<div class="paysystem">
								<?php
									// check if the repeater field has rows of data
									if( have_rows('footer_pay', 'option') ):
									 	// loop through the rows of data
									    while ( have_rows('footer_pay', 'option') ) : the_row();
									        // display a sub field value
										    ?>
												<a href="<?php the_sub_field('footer_pay_href', 'option');?>" target="_blank" title="<?php the_sub_field('footer_pay_text', 'option');?>"><img src="<?php the_sub_field('footer_pay_img', 'option');?>"></a>
										    <?php
									    endwhile;
									else :
									    // no rows found
									endif;
								?>
							</div>
						</div>
					<!-- </div> -->
				</div>
		</div><!-- .footer-bottom -->	
	</footer><!-- #colophon -->
</div><!-- #page -->



<div id="fogot_pass" class="pop-up"><!-- hidden inline form -->
    <h3>Сменить пароль</h3>
    <form id="f_contact" name="contact" action="#" method="post">
        <label for="old_pass">Старый пароль</label><br>
        <input type="text" id="old_pass" name="old_pass" placeholder="Ваш старый пароль"><br>
        <label for="new_pass">Введите новый пароль</label><br>
        <input type="text" id="new_pass" name="new_pass" placeholder="Ваш новый пароль"><br>
        <input type="text" id="new_pass_rep" name="new_pass_rep" placeholder="Повторите новый пароль"><br>
        <button id="f_send" class="change_pass_button">Сменить пароль</button>
    </form>
</div>


<div id="logon" class="pop-up"><!-- hidden inline form -->
	<div class="registration-bar">
	  <button class="registration-bar-button activeTab" onclick="loginType('Login')">Вход в личный кабинет</button>
	  <button class="registration-bar-button" onclick="loginType('Registration')">Регистрация</button>
	</div>

    <div id="Login" class="typeRegistration">
    	<div class="loginDiv">
		    <form id="f_contact" name="contact" action="#" method="post">
		        <label for="email">Электронная почта или телефон</label><br>
		        <input type="text" id="email" name="email" placeholder="Ваш номер телефона или e-mail"><br>
		        <label for="pass">Пароль</label><br>
		        <input type="text" id="pass" name="pass" placeholder="Ваш пароль"><br>
    			<a href="#fogot_pass" rel="nofollow" class="modalbox">Забыли пароль?</a>
				  <label class="container-checkbox">Запомнить меня
				    <input type="checkbox" checked="checked">
				    <span class="checkmark"></span>
				  </label>   			
		        <button id="f_send" class="change_pass_button">Войти</button>
		    </form>	
    	</div>
    	<div class="loginDiv">
			<label for="social">Авторизироваться как пользователь</label><br>
			<button class="button_facebook"><i class="fab fa-facebook-square"></i> Войти с помощью Facebook</button>
			<button class="button_google"><i class="fab fa-google-plus-square"></i> Войти с помощью Google</button>
    	</div>
	</div>

	<div id="Registration" class="typeRegistration" style="display:none">
    	<div class="loginDiv">
		    <form id="f_contact" name="contact" action="#" method="post">
		        <label for="name">Имя</label><br>
		        <input type="text" id="name" name="name" placeholder="Ваше имя"><br>
		        <label for="emailPhone">Электронная почта или телефон</label><br>
		        <input type="text" id="emailPhone" name="emailPhone" placeholder="Ваш номер телефона или e-mail"><br>
		        <label for="pass">Пароль</label><br>
		        <input type="text" id="pass" name="pass" placeholder="Ваш пароль"><br>
		        	<div class="radio_button">
					  <label class="container-radio radioSingleBuy">Розничный
				        <input type="radio" checked="checked" name="radioBuy">
				        <span class="checkmark"></span>
				      </label>
		        	</div>

		        	<div class="radio_button">
						<label class="container-radio radioOptBuy">Оптовый
					        <input type="radio" name="radioBuy">
					        <span class="checkmark"></span>
					    </label>			      			
		        	</div>
		        <button id="f_send" class="change_pass_button hidden_button">Зарегистрироваться</button>
		    </form>	
    	</div>
    	<div class="loginDiv">
    		<div class="singleBuy">
				<label for="social">Зарегистрироваться через соц.сети</label><br>
				<button class="button_facebook"><i class="fab fa-facebook-square"></i> Войти с помощью Facebook</button>
				<button class="button_google"><i class="fab fa-google-plus-square"></i> Войти с помощью Google</button>
    		</div>
    		<div class="optBuy">
		        <label for="nameOrg">Название Вашей компании</label><br>
		        <input type="text" id="nameOrg" name="nameOrg" placeholder="Ваше имя"><br>
		        <label for="EDRPOU">ЕДРПОУ</label><br>
		        <input type="text" id="EDRPOU" name="EDRPOU" placeholder="Ваш код ЕДРПОУ"><br>
		        <button id="f_send" class="change_pass_button">Зарегистрироваться</button>
    		</div>    		
    	</div>
	</div>

	<div id="call_me" class="pop-up" style="display: none;"><!-- hidden inline form -->
		<h3>Оставьте нам ваши контакты и мы к вам перезвоним в течение рабочего дня</h3>
		<?php echo do_shortcode('[contact-form-7 id="395" title="Перезвоните мне"]'); ?>
	</div>

	<div id="order_print" class="pop-up" style="display: none;"><!-- hidden inline form -->
		<h3>Оставьте вашу заявку онлайн и мы с вами свяжемся</h3>
		<?php echo do_shortcode('[contact-form-7 id="397" title="Заказать печать"]'); ?>
	</div>	
</div>

<?php wp_footer(); ?>

</body>
</html>

<?php
/**
 * Single Product title
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/title.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see        https://docs.woocommerce.com/document/template-structure/
 * @package    WooCommerce/Templates
 * @version    1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// the_title( '<h1 class="product_title entry-title">', '</h1>' );
?>
<!-- <div class="product_block"> -->
<div class="filter_parameter">

  <div class="description_block">
    <?php the_content();?> 
  </div>  
  <div class="description_block">
    <a href="#call_me" class="call_me">Перезвоните мне</a>
    <a href="#order_print" class="order_print">Заказать печать</a>
  </div>
  <div class="filter_block_parameter">
    <?php the_content();?> 

    <h3>Размер визитки</h3>
      <select class="single-select-size" id="select-size" name="size">
        <option selected>90 х 50 Визитка</option>
        <option value="1">85 х 55 Евро</option>
        <option value="2">70 х 40 Мини</option>
      </select>    

    <h4>Свой размер</h4>
    <form class="my_size">
      <div class="md-4">
        <label for="width">Ширина</label>
        <input type="text" id="width" name="width">
        <span> x </span>    
      </div>

      <div class="md-4">
        <label for="height">Высота</label>
        <input type="text" id="height" name="height">
      </div>

      <div class="md-2">
        <label for="units"></label>
        <select class="single-select-size" id="select-units" name="units">
          <option selected>мм</option>
          <option value="1">см</option>
        </select>
      </div>    
    </form>
  </div>

  <div class="filter_block_parameter">
    <h3>Тираж</h3>
    <div id="js-example-change-value">
    	<div class="range-amount"><input type="number" id="amount-circulation"/><span>шт.</span></div>
  		<div class="rangeslider-wrap">
  		  <input type="range" min="100" max="10000" step="1" data-rangeslider>
  		</div>
    </div>
  </div>

  <div class="filter_block_parameter">
    <h3>Количество сторон печати</h3>
      <fieldset>
        <div class="toggle">
          <input type="radio" name="pageNumber" value="one" id="onePage" checked="checked" />
          <label for="onePage">Односторонние</label>
          <input type="radio" name="pageNumber" value="two" id="twoPage" />
          <label for="twoPage">Двосторонние</label>
        </div>
      </fieldset>
  </div>

  <div class="filter_block_parameter">
    <h3>Материал печати</h3>
      <fieldset>
        <div class="toggle">
          <input type="radio" name="material" value="weight" id="paper" checked="checked" />
          <label for="paper">Бумага</label>
          <input type="radio" name="material" value="dimensions" id="cardboard" />
          <label for="cardboard">Дизайнерский картон</label>
        </div>
      </fieldset>    
    <h3>Выберите тип дизайнерского картона</h3>
      <label class="container-radio">Mondi DNS PREMIUM 250
        <input type="radio" checked="checked" name="radio">
        <span class="checkmark"></span>
      </label>
      <label class="container-radio">Mondi DNS PREMIUM 300
        <input type="radio" name="radio">
        <span class="checkmark"></span>
      </label>
      <label class="container-radio">Mondi DNS PREMIUM 250
        <input type="radio" name="radio">
        <span class="checkmark"></span>
      </label>
      <label class="container-radio">Mondi DNS PREMIUM 250
        <input type="radio" name="radio">
        <span class="checkmark"></span>
      </label>
  </div>

  <div class="filter_block_parameter">
    <h3>Нанесение</h3>
      <select class="single-select-size" id="select-laying" name="laying">
        <option selected>Без нанесения</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
      </select>      
  </div>

  <div class="filter_block_parameter">
    <h3>Послепечатная обработка</h3>
      <label class="container-checkbox">Скругление углов
        <input type="checkbox" checked="checked">
        <span class="checkmark"></span>
      </label>

      <label class="container-checkbox">Сверление
        <input type="checkbox">
        <span class="checkmark"></span>
      </label>

      <label class="container-checkbox">Один сгиб
        <input type="checkbox">
        <span class="checkmark"></span>
      </label>

      <label class="container-checkbox">Два сгиба
        <input type="checkbox" checked="checked">
        <span class="checkmark"></span>
      </label>

      <label class="container-checkbox">Переменные данные
        <input type="checkbox">
        <span class="checkmark"></span>
      </label>

      <label class="container-checkbox">Перфорация
        <input type="checkbox">
        <span class="checkmark"></span>
      </label>
  </div>

  <div class="filter_block_parameter">
    <h3>Срок выполнения</h3>
    <div id="js-example-change-value" class="filter_time">
      <div class="rangeslider-wrap">
        <input type="range" min="1" max="5" step="1" data-rangeslider>
      </div>
    </div>
  </div>




<!-- </div> -->
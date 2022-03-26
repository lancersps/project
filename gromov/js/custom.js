//a.stets start
function PriceDesign(param='') {
	var total = 0;
	if(param == 'Визитки') {
		total = 150;
	}
	if(param == 'Листовки А7-А5') {
		total = 150;
	}
	if(param == 'Листовки А4-А3') {
		total = 150;
	}
	if(param == 'Буклеты') {
		total = 200;
	}
	if(param == 'Каталоги') {
		total = 200;
	}
	if(param == 'Блакноты') {
		total = 200;
	}
	if(param == 'Плакаты') {
		total = 200;
	}
	if(param == 'Баннеры 0,5-6 м2') {
		total = 100;
	}
	if(param == 'Баннеры 6-12 м2') {
		total = 200;
	}
	if(param == 'Баннеры 12-18 м2') {
		total = 300;
	}
	return total;
}
//a.stets end

jQuery(document).ready(function() {

	// Main menu
	jQuery("#main_menu").click(function(){
		if ( jQuery(".main-navigation").hasClass('active') ) {
	        // jQuery(".main-navigation").removeClass('active');

	        jQuery(".main-navigation").fadeOut("slow", function() {
	        	jQuery(this).removeClass("active");
	        });	        
	    } else {
	        // jQuery(".main-navigation").addClass('active');  

	        jQuery(".main-navigation").fadeIn("slow", function() {
	        	jQuery(this).addClass("active");
	        });

	    }
	});

	// Click behind menu
	jQuery(function($){
		$(document).mouseup(function (e){ // событие клика по веб-документу
			var div = $(".main-navigation"); // тут указываем ID элемента
			if (!div.is(e.target) // если клик был не по нашему блоку
			    && div.has(e.target).length === 0) { // и не по его дочерним элементам
				jQuery(".main-navigation").fadeOut("slow", function() {
					jQuery(this).removeClass("active");
				});	
		}
	});
	});

	// Блок телефона
	jQuery(function(f){
		var element = f('#phone_block');
		f(window).scroll(function(){
			element['fade'+ (f(this).scrollTop() > 2000 ? 'Out': 'In')](500);           
		});
	});

	var imageUrl = document.location.origin + "/content/themes/gromov/img/poligraf.png";
	jQuery( ".second-level-ul .menu-item-96").addClass('active');
	jQuery(".main-navigation").css("background-image", 'url(' + imageUrl + ')');

	jQuery( ".first-level-ul .menu-item a" ).hover(function() {
		var idMenu = jQuery( this ).parent();			

		if (jQuery(idMenu).hasClass('menu-item-96')) {
			var imageUrl = document.location.origin + "/content/themes/gromov/img/poligraf.png";

			jQuery(".second-level-ul .menu-item-96").fadeIn("slow", function() {
				jQuery(this).addClass("active");
			});
			jQuery(".second-level-ul .menu-item-87").fadeOut(0, function() {
				jQuery(this).removeClass("active");
			});
			jQuery(".second-level-ul .menu-item-90").fadeOut(0, function() {
				jQuery(this).removeClass("active");
			});	    	

		} else if(jQuery(idMenu).hasClass('menu-item-87')){
			var imageUrl = document.location.origin + "/content/themes/gromov/img/baner.png";
			jQuery(".second-level-ul .menu-item-87").fadeIn("slow", function() {
				jQuery(this).addClass("active");
			});
			jQuery(".second-level-ul .menu-item-96").fadeOut(0, function() {
				jQuery(this).removeClass("active");
			});
			jQuery(".second-level-ul .menu-item-90").fadeOut(0, function() {
				jQuery(this).removeClass("active");
			});	    	
		} else if(jQuery(idMenu).hasClass('menu-item-90')){
			var imageUrl = document.location.origin + "/content/themes/gromov/img/title.png";

			jQuery(".second-level-ul .menu-item-90").fadeIn("slow", function() {
				jQuery(this).addClass("active");
			});    	    	
			jQuery(".second-level-ul .menu-item-90").fadeIn("slow", function() {
				jQuery(this).addClass("active");
			});
			jQuery(".second-level-ul .menu-item-96").fadeOut(0, function() {
				jQuery(this).removeClass("active");
			});
			jQuery(".second-level-ul .menu-item-87").fadeOut(0, function() {
				jQuery(this).removeClass("active");
			});	    		
		} else {
			var imageUrl = "";
			jQuery(".second-level-ul .menu-item-96").fadeOut(0, function() {
				jQuery(this).removeClass("active");
			});
			jQuery(".second-level-ul .menu-item-87").fadeOut(0, function() {
				jQuery(this).removeClass("active");
			});
			jQuery(".second-level-ul .menu-item-90").fadeOut(0, function() {
				jQuery(this).removeClass("active");
			});	    			       	    	
		}

		jQuery(".main-navigation").css("background-image", 'url(' + imageUrl + ')');
	}
	);

	// Slick Slider
	jQuery(".center").slick({
		dots: false,
		infinite: true,
		centerMode: false,
		slidesToShow: 6,
		slidesToScroll: 3,
		responsive: [
		{
			breakpoint: 742,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1
			}
		}
		]	
	});

	jQuery('.slider-for').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		fade: true,
		asNavFor: '.slider-nav'
	});
	jQuery('.slider-nav').slick({
		slidesToShow: 6,
		slidesToScroll: 1,
		infinite: true,
		asNavFor: '.slider-for',
		focusOnSelect: true,
		arrows: true,
		prevArrow: jQuery('.prev'),
		nextArrow: jQuery('.next'),
	});

	// Возможность красить SVG с класом .svg 
	jQuery(function(){
		jQuery('img.svg').each(function(){
			var $img = jQuery(this);
			var imgID = $img.attr('id');
			var imgClass = $img.attr('class');
			var imgURL = $img.attr('src');

			jQuery.get(imgURL, function(data) {
	            // Get the SVG tag, ignore the rest
	            var $svg = jQuery(data).find('svg');

	            // Add replaced image's ID to the new SVG
	            if(typeof imgID !== 'undefined') {
	            	$svg = $svg.attr('id', imgID);
	            }
	            // Add replaced image's classes to the new SVG
	            if(typeof imgClass !== 'undefined') {
	            	$svg = $svg.attr('class', imgClass+' replaced-svg');
	            }

	            // Remove any invalid XML tags as per http://validator.w3.org
	            $svg = $svg.removeAttr('xmlns:a');
	            
	            // Check if the viewport is set, else we gonna set it if we can.
	            if(!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) {
	            	$svg.attr('viewBox', '0 0 ' + $svg.attr('height') + ' ' + $svg.attr('width'))
	            }

	            // Replace image with new SVG
	            $img.replaceWith($svg);

	        }, 'xml');    
		});


		jQuery('.benefits .items .item img').each(function(){
			var $img = jQuery(this);
			var imgID = $img.attr('id');
			var imgClass = $img.attr('class');
			var imgURL = $img.attr('src');

			jQuery.get(imgURL, function(data) {
	            // Get the SVG tag, ignore the rest
	            var $svg = jQuery(data).find('svg');

	            // Add replaced image's ID to the new SVG
	            if(typeof imgID !== 'undefined') {
	            	$svg = $svg.attr('id', imgID);
	            }
	            // Add replaced image's classes to the new SVG
	            if(typeof imgClass !== 'undefined') {
	            	$svg = $svg.attr('class', imgClass+' replaced-svg');
	            }

	            // Remove any invalid XML tags as per http://validator.w3.org
	            $svg = $svg.removeAttr('xmlns:a');
	            
	            // Check if the viewport is set, else we gonna set it if we can.
	            if(!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) {
	            	$svg.attr('viewBox', '0 0 ' + $svg.attr('height') + ' ' + $svg.attr('width'))
	            }

	            // Replace image with new SVG
	            $img.replaceWith($svg);

	        }, 'xml');    
		});

		jQuery('.how_we_work .design_work-items .design_work-item img').each(function(){
			var $img = jQuery(this);
			var imgID = $img.attr('id');
			var imgClass = $img.attr('class');
			var imgURL = $img.attr('src');

			jQuery.get(imgURL, function(data) {
	            // Get the SVG tag, ignore the rest
	            var $svg = jQuery(data).find('svg');

	            // Add replaced image's ID to the new SVG
	            if(typeof imgID !== 'undefined') {
	            	$svg = $svg.attr('id', imgID);
	            }
	            // Add replaced image's classes to the new SVG
	            if(typeof imgClass !== 'undefined') {
	            	$svg = $svg.attr('class', imgClass+' replaced-svg');
	            }

	            // Remove any invalid XML tags as per http://validator.w3.org
	            $svg = $svg.removeAttr('xmlns:a');
	            
	            // Check if the viewport is set, else we gonna set it if we can.
	            if(!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) {
	            	$svg.attr('viewBox', '0 0 ' + $svg.attr('height') + ' ' + $svg.attr('width'))
	            }

	            // Replace image with new SVG
	            $img.replaceWith($svg);

	        }, 'xml');    
		});				
	});

/*
* Filters
*/

	//Search
	
	jQuery(document).ready(function() {
		var $exampleMulti = jQuery(".js-example-programmatic-multi").select2({
			minimumResultsForSearch: Infinity
		});


		jQuery(".js-programmatic-multi-button").on("click", function () {
			//Определяем клик
			var clickValue = jQuery(this).data("clickValue");
			// Отмечаем селект
			jQuery(this).attr('selected', true);
			// Считіваем существующие
			arr = jQuery.makeArray(jQuery(".js-example-programmatic-multi").val());

			var blkstr = [];
			jQuery.each(arr, function(idx2,val2) {                    
				var str = val2;
				blkstr.push(str);
			});
			



			//a.stets start
			if(blkstr.indexOf(clickValue) == -1) {
				var sum_total = jQuery('.summ_cost .md-3 h5').text();
				var sum_total = parseInt(sum_total.replace(/[^\d;]/g, ''));

				var total = PriceDesign(clickValue);
				jQuery('.all_cost').append('<div class="single_cost"> <div class="md-3"><h4>Стоимость:</h4></div> <div class="md-3"><h5>от ' + total +' грн</h5></div> <div class="md-6"><h6>'+ clickValue +'</h6></div> </div>');
				sum_total = sum_total + total;
				jQuery('.summ_cost .md-3 h5').html('от ' + sum_total + ' грн');
			}
			//a.stets end



			blkstr.push(clickValue);
			var arrayCurentValue = blkstr.join(" ");


			$exampleMulti.val([arr[0], arr[1], arr[2], arr[3], arr[4], arr[5], arr[6], arr[7], arr[8], arr[9], clickValue]).trigger("change");

			//console.log(arr);

		});		


		

	});
	jQuery('.select-design').on('select2:unselect', function (e) {
		var data = e.params.data.text;

		var NewTotal = PriceDesign(data);
		var NewSum_total = jQuery('.summ_cost .md-3 h5').text();
		var NewSum_total = parseInt(NewSum_total.replace(/[^\d;]/g, ''));
		NewSum_total = NewSum_total - NewTotal;
		jQuery('.summ_cost .md-3 h5').html('от ' + NewSum_total + ' грн');

		jQuery( ".single_cost" ).each(function() {
			var tmpTitle = jQuery(this).find('h6').text();
			if(tmpTitle == data) {
				jQuery(this).remove();
			}
		});

		//console.log(data);
		//console.log(NewSum_total);
	});

	// Size
	jQuery(document).ready(function() {
		jQuery('#select-size').select2({
			minimumResultsForSearch: Infinity
		});
	});

	// Units
	jQuery(document).ready(function() {
		jQuery('#select-units').select2({
			minimumResultsForSearch: Infinity
		});
	});	

	// Laying
	jQuery(document).ready(function() {
		jQuery('#select-laying').select2({
			minimumResultsForSearch: Infinity
		});
	});

	// Post
	jQuery(document).ready(function() {
		jQuery('#select-post').select2({
			minimumResultsForSearch: Infinity
		});
	});

	// Town
	jQuery(document).ready(function() {
		jQuery('#select-town').select2({
			minimumResultsForSearch: Infinity
		});
	});

	// Branches
	jQuery(document).ready(function() {
		jQuery('#select-branches').select2({
			minimumResultsForSearch: Infinity
		});
	});


	//Range
	jQuery('input[type="range"]').rangeslider({
		polyfill: false,

	    // Default CSS classes
	    rangeClass: 'rangeslider',
	    disabledClass: 'rangeslider--disabled',
	    horizontalClass: 'rangeslider--horizontal',
	    fillClass: 'rangeslider__fill',
	    handleClass: 'rangeslider__handle',

	    // Callback function
	    onInit: function() {
	    	$rangeEl = this.$range;
	      // add value label to handle
	      var $handle = $rangeEl.find('.rangeslider__handle');
	      var handleValue = '<div class="rangeslider__handle__value">' + this.value + '</div>';
	      $handle.append(handleValue);
	  },

	    // Callback function
	    onSlide: function(position, value) {
	    	var $handle = this.$range.find('.rangeslider__handle__value');
	    	$handle.text(this.value);
		//input  
		jQuery("#amount-circulation").val(this.value); 
	},

	    // Callback function
	    onSlideEnd: function(position, value) {}
	});

	// Pop Up 

	//a.stets start
	jQuery(".buy.buy-design").fancybox({
		beforeShow   : function() {
			var sum_total_tmp = jQuery('.summ_cost .md-3 h5').text();
			var sum_total_tmp = parseInt(sum_total_tmp.replace(/[^\d;]/g, ''));
			var optionDesign = jQuery('.select-design').val();
			var textDesign = jQuery('.text-design').val();
			jQuery('input[name="your-option-design"]').val(optionDesign);
			jQuery('input[name="your-comments"]').val(textDesign);
			jQuery('input[name="your-total"]').val(sum_total_tmp);

		}
	});
	//a.stets end

	
	jQuery(".modalbox").fancybox();
	jQuery("#f_contact").submit(function(){ return false; });
	jQuery("#f_send").on("click", function(){

		jQuery("#f_contact").fadeOut("fast", function(){
			jQuery(this).before("<p><strong>Ваше сообщение отправлено!</strong></p>");
			setTimeout("$.fancybox.close()", 1000);
		});
	});

	jQuery(".registration-bar-button").click(function(){
		jQuery(".registration-bar-button").removeClass("activeTab");
		jQuery(this).addClass("activeTab");
	});

	jQuery(".radioSingleBuy").click(function(){
		jQuery(".singleBuy").css("display", "block");
		jQuery(".hidden_button").css("display", "block");
		jQuery(".optBuy").css("display", "none");
	});


	jQuery(".radioOptBuy").click(function(){
		jQuery(".singleBuy").css("display", "none");
		jQuery(".hidden_button").css("display", "none");
		jQuery(".optBuy").css("display", "block");
	});


	jQuery(".call_me").fancybox();
	document.addEventListener( 'wpcf7mailsent', function( event ) {
		jQuery("#call_me h3").fadeOut("fast", function(){
			jQuery(this).before("<h3>Спасибо! Наш менеджер скоро с вами свяжется</h3>");
			setTimeout("$.fancybox.close()", 1000);
		});
		jQuery("#call_me .wpcf7-form").css("display","none");
	}, false );



	jQuery(".order_print").fancybox();
	document.addEventListener( 'wpcf7mailsent', function( event ) {
		jQuery("#order_print h3").fadeOut("fast", function(){
			jQuery(this).before("<h3>Спасибо! Наш менеджер скоро с вами свяжется</h3>");
			setTimeout("$.fancybox.close()", 1000);
		});
		jQuery("#order_print .wpcf7-form").css("display","none");
	}, false );
});

function loginType(typeReg) {
	var i;
	var x = document.getElementsByClassName("typeRegistration");
	for (i = 0; i < x.length; i++) {
		x[i].style.display = "none"; 
	}
	document.getElementById(typeReg).style.display = "block";

}

// Range and input
jQuery(document).on('hover', '#js-example-change-value .rangeslider-wrap', function(e) {
	jQuery("#amount-circulation").bind("change paste keyup", function() {
		var $inputRange = jQuery('[data-rangeslider]', e.target.parentNode);
		var value = jQuery('input[type="number"]')[0].value;
		$inputRange.val(value).change();

	    //console.log(value);
	});    
});


jQuery(function($){
	$('#true_loadmore').click(function(){
		$(this).text('Загрузка...');
		var category = $(this).attr("data-category");
		var is_in_list = $(this).attr("data-is_in_list");
		var data = {
			'action': 'loadmore',
			'category': category,
			'is_in_list': is_in_list,
		};
		$.ajax({
			url:'http://gromov.podarunoc.com.ua/wp-admin/admin-ajax.php',
			data:data, 
			type:'POST', 
			success:function(data){
				if( data ) { 
					$('#more_data').before(data);
					$('#true_loadmore').remove();
				}
			}
		});
	});
});


jQuery(document).ready(function() {
	var acc = document.getElementsByClassName("accordion");
	var iii;
	for (iii = 0; iii < acc.length; iii++) {
		acc[iii].addEventListener("click", function() {
			jQuery('.single_order .accordion').removeClass('active');
				jQuery('.single_order .panel').css('max-height','0');
				var panel = this.nextElementSibling;
				jQuery(this).addClass("active");
				panel.style.maxHeight = panel.scrollHeight + "px";
		});
	}
});



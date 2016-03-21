jQuery(document).ready(function($) {
	$('#delivery_app').deliveryApp('init');
});

(function( $ ){

	var methods = {
		mainObj : {},		// содержит все варианты
		variants_rows : {}, 	// строки вариантов
		top_menu : {}, 			// меню тиражей
		checkbox_main : {}, 	// чек управления группой
  	

		init : function( options ) {

			return this.each(function(){
				var $this = $(this);

				$this.addClass('delivery_app');

				// описание шапки
				methods.head = 	$this.find('#header');
				// выход
				methods.head.find('#js_app_close').click(function(event) {
					show_simple_dialog_window('выход')
					// echo_message_js('выход');
				});
				methods.head.find('#js-helper_window').click(function(event) {
					show_simple_dialog_window('График поездок в Проект111, Интерпрезент, Оазис:<br>'+
'1. Интерпрезент – едем только в среду и пятницу (т.к. машина из Москвы приходит во вторник и четверг)<br>'+
'2. Проект111, Оазис - ездим туда по пн,ср,пт','ВНИМАНИЕ!!!')
					// echo_message_js('выход');
				});


				// контент
				methods.body_content = 	$this.find('#body_content');
				// methods.top_menu_div = 		$this.find('#js-main-service_center-top_menu ul');
				// methods.top_menu = 			$this.find('#js-main-service_center-top_menu ul li');
				// methods.checkbox_main = 	$this.find('#js-main-service_center-variants-table thead tr th:nth-of-type(2) div.js-psevdo_checkbox');
				
				// methods.services_tbl =		$this.find('#js-main-service_center-variants-services-div-table table');

				// // собираем главный объект
				// methods.variants_rows.each(function(index, el) {
				// 	var dop_row_id = $(this).attr('data-dop_row_id');
				// 	methods.mainObj[dop_row_id] = [];
				// 	methods.mainObj[dop_row_id]['variant'] = [];
				// 	// console.log($(this).find('.js-variant_services_json div').html())
				// 	methods.mainObj[dop_row_id]['variant'] = jQuery.parseJSON($(this).find('.js-variant_info div').html());
				// 	methods.mainObj[dop_row_id]['services'] = [];
				// 	methods.mainObj[dop_row_id]['services'] = jQuery.parseJSON($(this).find('.js-variant_services_json div').html());
				// });

				
			});

		},
		delete:function(){

		}
	};

	$.fn.deliveryApp = function( method ) {
    
		// логика вызова метода
		if ( methods[method] ) {
	        // если запрашиваемый метод существует, мы его вызываем
	        // все параметры, кроме имени метода прийдут в метод
	        // this так же перекочует в метод
	        return methods[ method ].apply( this, Array.prototype.slice.call( arguments, 1 ));

	    } else if ( typeof method === 'object' || ! method ) {
	        // если первым параметром идет объект, либо совсем пусто
	        // выполняем метод init
	        return methods.init.apply( this, arguments );
	    } else {
	        // если ничего не получилось
		  echo_message_js( 'Метод с именем ' +  method + ' не существует для jQuery.tooltip' );
		} 
	};

})( jQuery );




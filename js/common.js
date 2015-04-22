$(function() {
		$(".currencyBox").hover(function() {
			$(this).addClass('active');
			$(".currency_detial").stop(true, true).delay(300).slideDown(500, "easeOutBounce");
			},  
			function() {
			$(".currency_detial").stop(true, true).delay(300).fadeOut(100, "easeInCubic");
		});
		$(".cart-block").hover(function() {
			$(this).addClass('active');
			$("#minicart").stop(true, true).delay(300).slideDown(500, "easeOutBounce");
			},  
			function() {
			$("#minicart").stop(true, true).delay(300).fadeOut(100, "easeInCubic");
		});
});
$(document).ready(function(){
		ddsmoothmenu.init({
		mainmenuid: "smoothmenu1", //menu DIV id
		orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
		classname: 'ddsmoothmenu', //class added to menu's outer DIV
		//customtheme: ["#1c5a80", "#18374a"],
		contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
	});

	$('.menuBox').click(function() {
			if ($('#menuInnner').is(":hidden"))
			{
			$('#menuInnner').slideDown("fast");
			} else {
			$('#menuInnner').slideUp("fast");
			}
			return false;
			});
			if($(window).width() <= 1000){
				$('#smoothmenu1').hide();
				$('.mobMenu').show();
			}else{
				$('#smoothmenu1').show();
				$('.mobMenu').hide();
				}
});
jQuery(function() {
	var jQueryallVideos = jQuery("iframe[src^='http://player.vimeo.com']"),jQueryfluidEl = jQuery(".about-banner");
	jQueryallVideos.each(function() {
		jQuery(this)
			.data('aspectRatio', this.height / this.width)
			.removeAttr('height')
			.removeAttr('width');
	});
	jQuery(window).resize(function() {
		var newWidth = jQueryfluidEl.width();
		jQueryallVideos.each(function() {
			var jQueryel = jQuery(this);
			jQueryel
				.width(newWidth)
				.height(newWidth * jQueryel.data('aspectRatio'));
		});
		if($(window).width() <= 1000){
			$('#smoothmenu1').hide();
			$('.mobMenu').show();
		}else{
			$('#smoothmenu1').show();
			$('.mobMenu').hide();
			}
	}).resize();

});


var SierraTecnologia = (function () {
    "use strict";
    // VARIAVEIS PRIMARIAS
    var Pag = window.paginatual;
    function Controle(){
        if(Pag==='home'){
            Controle_Home_Cursos();
        }else if(Pag==='turma'){
            Controle_Turma_Listagem(window.paginaid);
        }
        Controle_Menu_Cursos();
    }
    
    function Controle_Home_Cursos(){ 
        $('.col-main-left').append(Visual_Home_Cursos(Modelo('Curso')));
    }
    
    function Controle_Menu_Cursos(){ 
        $('.menucursos
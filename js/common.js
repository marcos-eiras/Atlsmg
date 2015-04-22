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
    
    /**
     * Funço Main(), Executada Automaticamente quando a pagina  carregada
     */
    function Main(){
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
        $('.menucursos').append(Visual_Menu_Cursos(Modelo('Curso')));
    }    
    
    function Controle_Turma_Listagem(Curso){ 
        $('#conteudo').append(Visual_Turma_Listagem(Modelo_Turma(Curso)));
    }
    
    /**
     * Funço Responsvel por fazer a conexao e retornar o json com o servidor
     */
    function Modelo(tipo){
        var resultado = false;
        $.ajax({
            // url para o arquivo json.php
            url : "index.php?TemaTipo="+tipo,
            async: false,
            // dataType json
            dataType : "json",
            // função para de sucesso
            success : function(data){
            // vamos gerar um html e guardar nesta variável
                resultado = data;
                return true;
            }
        });//termina o ajax
        return resultado;
    }
    /**
     * 
     * @param {int} Curso ->  o Curso correspondente as turmas
     * @returns {undefined}
     */
    function Modelo_Turma(Curso){
        return Modelo('Turma&id='+Curso);
    }

    function Visual_Menu_Cursos(data){
        var html = "";
        var i;

        if(data===false) return '';

        for(i=0; i < data.length; i++){
            
             html = html+"<li class=parent><a href=\"index.php?pg=turma&id="+data[i].id+"\">"+data[i].nome+"</a></li><br><br>";
        }
        
        return html;
    }

    function Visual_Home_Cursos(data){
        var html = "";
        var i;
        
        if(data===false) return '';

        for(i=0; i < data.length; i++){
            html = html+"<div class=\"block-01\"><p><span style=\"color:#08c; font-size:22px;\">"+data[i].nome+"</span><br>"+data[i].descricao+"</p><br><p><span style=\"color:#08c;\">Requisitos:</span> "+data[i].requisito+"<br><span style=\"color:#08c;\">Valor:</span> "+Converter_Float_Real(data[i].valor)+"</p></div>";
        }
        
        return html;
    }
    
    function Visual_Turma_Listagem(data){
        var html = "";
        var i;

        if(data===false) return '';

        for(i=0; i < data.length; i++){
            
             html = html+
                ""+
                data[i].id+
                ""+
                data[i].id+
                ""+
                data[i].nome+
                ""+
                data[i].qnt+
                ""+
                data[i].inicio+
                ""+
                data[i].fim+
                ""+
                data[i].carga+
                ""+
                data[i].descricao+
                "<br><br>";
        }
        
        console.log('Chamou');
        
        
        
        if(i==0){
            html = html + "No tem conteudo";
        }
        
        return html;
    }
    
    function Atualizar(){
        
    }
    
    function Converter_Real_Float(valor) {
        valor = valor.replace("R$ ","");
        valor = valor.replace(".","");
        valor = valor.replace(",",".");
        valor = parseFloat(valor);
        return valor;
    }
    function Converter_Float_Real(valor) {
        var inteiro = null, 
            decimal = null, 
            c = null, 
            j = null,
            aux = new Array();
        valor = ""+valor;
        c = valor.indexOf(".",0);
        //encontrou o ponto na string
        if (c > 0) {
           //separa as partes em inteiro e decimal
           inteiro = valor.substring(0,c);
           decimal = valor.substring(c+1,valor.length);
        }else{
           inteiro = valor;
        }

        //pega a parte inteiro de 3 em 3 partes
        for (j = inteiro.length, c = 0; j > 0; j-=3, c++) {
           aux[c]=inteiro.substring(j-3,j);
        }

        //percorre a string acrescentando os pontos
        inteiro = "";
        for (c = aux.length-1; c >= 0; c--) {
           inteiro += aux[c]+'.';
        }
        //retirando o ultimo ponto e finalizando a parte inteiro

        inteiro = inteiro.substring(0,inteiro.length-1);

        decimal = parseInt(decimal);
        if (isNaN(decimal)) {
           decimal = "00";
        }else{
           decimal = ""+decimal;
           if (decimal.length === 1) {
              decimal = decimal+"0";
           }
        }


        valor = "R$ "+inteiro+","+decimal;


        return valor;
    }
    
    Main();
        
    return {
        Main: Main,
    }
}());
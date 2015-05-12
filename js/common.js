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
            Controle_Home_Noticias();
        }else if(Pag==='turma'){
            Controle_Turma_Listagem(window.paginaid);
        }else if(Pag==='noticia'){
            Controle_Noticia_Listagem(window.paginaid);
        }else if(Pag==='noticias'){
            Controle_Noticias_Listagem(window.paginaid);
        }
        Controle_Menu_Cursos();
        console.log('Chamou -> Main()');
    }
    
    function Controle_Home_Cursos(){ 
        console.log('Chamou -> Controle_Home_Cursos()');
        $('.col-main-left').append(Visual_Home_Cursos(Modelo('Curso')));
    }
    
    function Controle_Menu_Cursos(){ 
        console.log('Chamou -> Controle_Menu_Cursos()');
        $('.menucursos').append(Visual_Menu_Cursos(Modelo('Curso')));
    }    
    
    function Controle_Turma_Listagem(Curso){ 
        console.log('Chamou -> Controle_Turma_Listagem(Curso)',Curso);
        $('#conteudo').append(Visual_Turma_Listagem(Modelo_Turma(Curso)));
    }
    
    function Controle_Noticias_Listagem(){ 
        console.log('Chamou -> Controle_Noticias_Listagem()');
        $('#conteudo').append(Visual_Noticias_Listagem(Modelo("Noticias")));
    }
    
    function Controle_Noticia_Listagem(Noticia){ 
        console.log('Chamou -> Controle_Noticia_Listagem(Noticia)',Noticia);
        $('#conteudo').append(Visual_Noticia_Listagem(Modelo_Noticia(Noticia)));
    }

    function Controle_Home_Noticias(){ 
        console.log('Chamou -> Controle_Home_Noticias()');
        $('.menunoticias').append(Visual_Home_Noticias(Modelo('Noticias')));
    }    
    
    /**
     * Funço Responsvel por fazer a conexao e retornar o json com o servidor
     */
    function Modelo(tipo){
        console.log('Chamou -> Modelo(tipo)',tipo);
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
        console.log('Chamou -> Modelo_Turma(Curso)',Curso);
        return Modelo('Turma&id='+Curso);
    }

    function Modelo_Noticia(Noticia){
        console.log('Chamou -> Modelo_Noticia(Noticia)',Noticia);
        return Modelo('Noticia&id='+Noticia);
    }

    function Visual_Menu_Cursos(data){
        console.log('Chamou -> Visual_Menu_Cursos(data)',data);
        var html = "";
        var i;

        if(data===false) return '';

        for(i=0; i < data.length; i++){
            
             html = html+"<li class=parent><a href=\"index.php?pg=turma&id="+data[i].id+"\">"+data[i].nome+"</a></li><br><br>";
        }
        
        return html;
    }

    function Visual_Home_Cursos(data){
        console.log('Chamou -> Visual_Home_Cursos(data)',data);
        
        var html = "";
        var i;
        
        if(data===false) return '';

        for(i=0; i < data.length; i++){
            html = html+"<div class=\"block-01\"><p><span style=\"color:#08c; font-size:22px;\"><a href=\"index.php?pg=turma&id="+data[i].id+"/\">"+data[i].nome+"</a></span><br>"+data[i].descricao+"</p><br><p><span style=\"color:#08c;\">Requisitos:</span> "+data[i].requisito+"<br><span style=\"color:#08c;\">Valor:</span> "+Converter_Float_Real(data[i].valor)+
                    
                    "<br><a href=\"index.php?pg=turma&id="+data[i].id+"/\">Veja lista completa de turmas e data</a></p></div>";
        }
        
        return html;
    }
    
    function Visual_Turma_Listagem(data){
        console.log('Chamou -> Visual_Turma_Listagem(data)',data);
        
        var html = "<div class=\"row\"><div class=\"row-same-height\">";
        var i;

        if(data===false) return '';

        for(i=0; i < data.length; i++){
            
            // Para não exibir null na descrição
            if (data[i].descricao == null)
            {
              data[i].descricao = '';  
            }
            
            html = html+"<div class=\"col-xs-6 col-xs-height\"><p><span style=\"color:#08c; font-size:22px;\">"+data[i].nome+"</span>\n\
            <br></p><p><span style=\"color:#08c;\">Início:</span> "+data[i].inicio+"<br>\n\
            <span style=\"color:#08c;\">Fim:</span> "+data[i].fim+"<br/><span style=\"color:#08c;\">Carga Horária:</span> ";
            // Quantidade de horas no plural e singular
            html = html+data[i].carga;
            if(data[i].carga==='1'){
                html = html+" hora<br>\n";
            }else{
                html = html+" horas<br>\n";
            }
            if(data[i].descricao!==''){
                html = html+"<span style=\"color:#08c;\">Horário:</span> "+data[i].descricao+"<br/>";
            }
            html = html+"<a href=\"index.php?pg=inscricao&id="+data[i].id+"\"><img border=\"0\" src=\"img/inscreva1.jpg\" /></a></p></div>";    
            //"+ window.url_sistema+"/Curso/Turma/Inscricao_Fazer/"+data[i].id+"/
        }
        
        
        
        if(i==0){
            html = html + "Não tem conteúdo";
        }
        html = html + "</div></div>";
        
        return html;
    }
    
    function Visual_Noticia_Listagem(data){
        var html = "";
        var i;

        if(data===false) return '';

        for(i=0; i < data.length; i++){
            
             html = html+
                ""+
                data[i].texto+
                "<br><br>";
        }
        
        console.log('Chamou');
        
        
        
        if(i==0){
            html = html + "Não tem conteúdo";
        }
        
        return html;
    }
    
    
    function Visual_Home_Noticias(data){
        console.log('Chamou -> Visual_Home_Noticias(data)',data);
        
        var html = "";
        var i;

        if(data===false) return '';

        for(i=0; i < data.length; i++){

            html = html+"<div class=\"block-01\"><p><span style=\"color:#08c; font-size:22px;\"><a href=\"index.php?pg=noticia&id="+data[i].id+"\">"+data[i].nome+"</a></span>\n\
            <br></p><span style=\"color:#08c;\">Data do Cadastro:</span> "+data[i].data+"</div><br>";
            
        }
        
                
        
        if(i==0){
            html = html + "Não tem conteúdo";
        }
        
        return html;
    }
    
    function Visual_Noticias_Listagem(data){
        console.log('Chamou -> Visual_Noticias_Listagem(data)',data);
        
        var html = "";
        var i;

        if(data===false) return '';

        for(i=0; i < data.length; i++){

           //html = html+"<div class=\"block-01\"><p><span style=\"color:#08c; font-size:22px;\">"+data[i].nome+"</span>\n\
            //<br></p><span style=\"color:#08c;\">Texto:</span> "+data[i].texto+"<p><span style=\"color:#08c;\">Data:</span> "+data[i].data+"</div>"; 
            
            //html = html+"<div class=\"block-01\"><p><span style=\"color:#08c; font-size:22px;\">"+data[i].nome+"</span>\n\
            //<br></p><span style=\"color:#08c;\">Data:</span> "+data[i].data+"</div><br>";

           // html = html+"<div class=\"block-01\"><p><span style=\"color:#08c; font-size:22px;\"><li class=parent><a href=\"index.php?pg=noticia&id="+data[i].id+"\">"+data[i].nome+"</a></span></li>\n\
           // <br></p><span style=\"color:#08c;\">Data:</span> "+data[i].data+"</div><br>";

            html = html+"<div class=\"block-01\"><p><span style=\"color:#08c; font-size:22px;\"><a href=\"index.php?pg=noticia&id="+data[i].id+"\">"+data[i].nome+"</a></span>\n\
            <br></p><span style=\"color:#08c;\">Data do Cadastro:</span> "+data[i].data+"</div><br>";
            
        }
        
        
        
        
        if(i==0){
            html = html + "Não tem conteúdo";
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

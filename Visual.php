<!doctype html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>
<?php
		include'header.php';	
	?>

</head>
<body>
	<div class="mainContainer sixteen container">
            <!--Header Block-->
            <div class="header-wrapper">
              <header class="container">
                <div class="head-right">
                     <?php
		include'top.php';	
	?>
                  <section class="header-bottom">
                    <!--<div class="search-block">
                      <input type="text" value="" placeholder="Procurar" />
                      <input type="submit" value="" title="Search" />
                    </div>-->
                  </section>
                </div>
                <h1 class="logo"><a href="index.php" title="Logo">
                  <img title="Logo" alt="Logo" src="images/logo.png" />
                  </a></h1>
              <?php $current = 1; include("menu.php"); ?>
            
                
              </header>
            </div>
            <!--Banner Block-->
            <section class="banner-wrapper">
              <div class="banner-block container">
                <div class="flexslider">
                  <ul class="slides">
                    <li><img title="Banner" alt="Banner" src="banner/banner1.jpg" /></li>
                    <li><img title="Banner" alt="Banner" src="banner/banner2.jpg" /></li>
                  </ul>
                </div>
                <ul class="banner-add">
                  <li class="add1"><a href="#" title=""><img title="add1" alt="add1" src="curso/box2.jpg" /></a></li>
                  <li class="add2"><a href="#" title=""><img title="add2" alt="add2" src="curso/box1.jpg" /></a></li>
                </ul>
              </div>
            </section>
            <!--Content Block-->
            
           <section class="content-wrapper">
	<div class="content-container container">
		<div class="col-main-left">
                    <h1 class="page-title">Cursos</h1>
                </div>
		<aside class="right-sidebar">
			<div class="block widget-searchwidget">
				<input type="text" value="" placeholder="Procurar..."/>
			</div>
			<div class="block listing-block">
				<p>
					<strong>Próximas datas</strong>
					fique po dentro da data de começo do curso!
				</p>
				<div class="jaarkalender" style="background: url(images/backfade.png) no-repeat 0px 0px; text-align: center; margin-right: 12px; margin-bottom: 12px; float: left; width: 248px; height: 210px;">
        <table border="0" class="calendar" cellpadding="2" cellspacing="0">
            <caption class="calendar-title" title="Calendario enero&nbsp;2015">
            <b><a href="http://www.calendario-365.es/calendario/2015/enero.html" style="border-bottom: dotted 1px #fff;
                background: url(images/93.png) no-repeat scroll 0px 0px transparent;" class="calendar-title-link">Janeiro&nbsp;2015</a></b></caption>
        <tbody>
        <tr>
            <th class="wknr" title="Número de semana">N.º</th>
            <th abbr="Segunda" title="Segunda">Seg</th>
            <th abbr="Terça" title="Terça">Ter</th>
            <th abbr="Quarta" title="Quarta">Qua</th>
            <th abbr="Quinta" title="Quinta">Qui</th>
            <th abbr="Sexta" title="Sexta">Sex</th>
            <th abbr="Sábado" title="Sábado">Sá</th>
            <th abbr="Domingo" title="Domingo">Do</th>
        </tr>
        <tr></tr>
        <tr>
            <td class="wknr" title="Número de semana 1">1</td>
            <td colspan="3" class="emptycells">&nbsp;</td>
            <td class="vak"><a href="#" title="Ano novo 2015">1</a></td>
            <td>2</td><td class="wd_5">3</td><td class="wd_6">4</td>
        </tr>
        <tr>
            <td class="wknr" title="Número de semana 2">2</td>
            <td>5</td>
            <td class="vak"><a href="#" title="Dias de reis">6</a></td>
            <td>7</td><td>8</td>
            <td>9</td>
            <td class="wd_5">10</td>
            <td class="wd_6">11</td>
        </tr>
        <tr>
            <td class="wknr" title="Número de semana 3">3</td>
            <td>12</td>
            <td>13</td>
            <td class="vandaag">14</td>
            <td>15</td>
            <td>16</td>
            <td class="wd_5">17</td>
            <td class="wd_6">18</td>
        </tr>
        <tr>
            <td class="wknr" title="Número de semana 4">4</td>
            <td>19</td>
            <td>20</td>
            <td>21</td>
            <td>22</td>
            <td>23</td>
            <td class="wd_5">24</td>
            <td class="wd_6">25</td>
        </tr>
        <tr>
            <td class="wknr" title="Número de semana 5">5</td>
            <td>26</td>
            <td>27</td>
            <td>28</td>
            <td>29</td>
            <td>30</td>
            <td class="wd_5">31</td>
            <td colspan="1" class="emptycells">&nbsp;</td>
        </tr>
        <tr>
            <td class="wknr"></td>
            <td colspan="7" class="emptycells">&nbsp;</td>
        </tr>
        </tbody>
    </table>
</div><!--Fim calendário-->
			</div>
			
		</aside>
		<div class="clearfix"></div>
		<div class="news-letter-container">
              <?php
		include'newsletter.php';	
	?>
	</div>
</section>
    </div> 
    <!--Ver detalhes Block-->
<article style="display:none;">
	<section id="quick-view-container" class="quick-view-wrapper">
	<div class="quick-view-container">
		<div class="quick-view-left">
			<h2>Sunglass RB3184</h2>
			<div class="product-img-box">
				<p class="product-image">
					<img src="images/sale_icon_img.png" title="Sale" alt="Sale" class="sale-img" />
					<a href="view.html" title="Image"><img src="images/quick_view_img.png" title="Image" alt="Image" /></a></p>
				<ul class="thum-img">
					<li><img  src="images/quick_thum_img.png" title="" alt="" /></li>
					<li><img  src="images/quick_thum_img.png" title="" alt="" /></li>
				</ul>
			</div>
		</div>
		<div class="quick-view-right tabs">
			<ul class="tab-block tabNavigation">
				<li><a class="selected" title="Overview" href="#tabDetail">Detalhes</a></li>
				<li><a title="Description" href="#tabDes">Descrição</a></li>
			</ul>
			<div id="tabDetail" class="tabDetail">
            	<div class="first-review">Seja o primeiro a comentar o produto</div>
			<div class="price-box">
				<span class="price">R$ 600.00</span>			</div>
			<div class="availability">em estoque</div>
			<div class="color-size-block">
				<div class="label-row">
					<label><em>*</em> cor</label>
					<span class="required">* Campos obrigatórios</span>				</div>
				<div class="select-row">
					<select><option>-- Please Select --</option></select>
				</div>
				<div class="label-row">
					<label><em>*</em> tamanho</label>
				</div>
				<div class="select-row">
					<select><option>-- Please Select --</option></select>
				</div>
			</div>
			<div class="add-to-cart-box">
				<span class="qty-box">
					<label for="qty">Qtd:</label>
					<a class="prev" title="" href="#"><img alt="" title="" src="images/qty_prev.png"></a>
					<input type="text" name="qty" class="input-text qty" id="qty" maxlength="12" value="1">
					<a class="next" title="" href="#"><img alt="" title="" src="images/qty_next.png"></a>				</span>
				<button title="Adicionar ao Carrinho" class="form-button"><span>Adicionar ao Carrinho</span></button>
			</div>
            </div>
            <div id="tabDes" class="tabDes">
            	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas erat odio, suscipit eu porta et, ultricies id sapien. Quisque posuere odio eget lectus suscipit sodales. Sed consequat, leo ut varius scelerisque, augue massa tincidunt est, et tincidunt enim tortor a metus. In sit amet diam in tellus tincidunt mollis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Morbi hendrerit eleifend tortor, a dapibus tellus suscipit porta. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. In mollis adipiscing mi et volutpat. Aliquam vitae dui nunc. Nulla ac ante eu massa dictum volutpat. Sed mauris sem, posuere sit amet pretium consectetur, ullamcorper vel orci. Aenean feugiat luctus lectus ac hendrerit. Fusce pulvinar, mauris eget sodales suscipit, diam neque condimentum lectus, id imperdiet felis turpis egestas neque. In aliquet orci eget nisl sollicitudin sed gravida tortor commodo</p>
            </div>
		</div>
		<div class="clearfix"></div>
	</div>
</section>
</article>       
            <!--Footer Block-->
            <section class="footer-wrapper">
              <footer class="container">
                <?php
        	include'footer.php';
		?>
              </footer>
            </section>
            
<!--js-->
<script src="js/jquery-1.8.2.min.js"></script>
<script src="js/common.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/ddsmoothmenu.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/jquery.elastislide.js"></script>
<script src="js/jquery.jcarousel.min.js"></script>
<script src="js/jquery.accordion.js"></script>
<script src="js/light_box.js"></script>
<script type="text/javascript">$(document).ready(function(){$(".inline").colorbox({inline:true, width:"50%"});});</script>
<!--end js-->
<script type="text/javascript">
jQuery (function(){
    var tabContainers=jQuery('div.tabs > div');
    tabContainers.hide().filter(':first').show();
    jQuery('div.tabs ul.tabNavigation a').click(function(){
        tabContainers.hide();
        tabContainers.filter(this.hash).show();
        jQuery('div.tabs ul.tabNavigation a').removeClass('selected');
        jQuery(this).addClass('selected');
        return false;
    }).filter(':first').click();
});
        

	$('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
	  $('#mix').jcarousel({
			scroll: 1,
			easing: 'swing',
			animation: 750,
			visible: 0,
			auto: 0
		});	
		$('#like-pro').jcarousel({
			scroll: 1,
			easing: 'swing',
			animation: 750,
			visible: 0,
			auto: 0
		});
		$('#related-pro').jcarousel({
			scroll: 1,
			easing: 'swing',
			animation: 750,
			visible: 0,
			auto: 0
		});
		$('#moreView').jcarousel({
			scroll: 1,
			easing: 'swing',
			animation: 750,
			visible: 0,
			auto: 0
		});
			
		
</script>
</body>
</html>
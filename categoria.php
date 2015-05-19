<!doctype html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>

<?php
		include'header2.php';	
	?>
   <link rel="stylesheet" href="jscript/css/main.css" type="text/css" />
<!--<script src="jscript/jquery.min.js"></script>-->
<script src="jscript/imtech_pager.js"></script>

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
                    <div class="cart-block">
					<ul>
						<li>(2)</li>
						<li><a href="cart.html" title="Cart"><img title="Item" alt="Item" src="img/item_icon.png" /></a></li>
						<li>Item</li>
					</ul>
					<div id="minicart" class="remain_cart" style="display: none;">
						 <p class="empty">You have 2 items in your shopping cart.</p>
						 <ol>
						 	<li>
								<div class="img-block"><img src="img/small_img.png" title="" alt="" /></div>
								<div class="detail-block">
									<h4><a href="#" title="Htc Mobile 1120">Htc Mobile 1120</a></h4>
									<p>
										<strong>1</strong> x $900.00
									</p>
									<a href="#" title="Details">Details</a>
								</div>
								<div class="edit-delete-block">
									<a href="#" title="Edit"><img src="img/edit_icon.png" alt="Edit" title="Edit" /></a>
									<a href="#" title="Remove"><img src="img/delete_item_btn.png" alt="Remove" title="Remove" /></a>
								</div>
							</li>
							<li>
								<div class="img-block"><img src="img/small_img.png" title="" alt="" /></div>
								<div class="detail-block">
									<h4><a href="#" title="Htc Mobile 1120">Htc Mobile 1120</a></h4>
									<p>
										<strong>1</strong> x $900.00
									</p>
									<a href="#" title="Details">Details</a>
								</div>
								<div class="edit-delete-block">
									<a href="#" title="Edit"><img src="img/edit_icon.png" alt="Edit" title="Edit" /></a>
									<a href="#" title="Remove"><img src="img/delete_item_btn.png" alt="Remove" title="Remove" /></a>
								</div>
							</li>
							<li>
								<div class="total-block">Total:<span>$1,900.00</span></div>
								<a href="cart.html" title="Checkout" class="colors-btn">Checkout</a>
								<div class="clear"></div>
							</li>
						 </ol>
					</div>
				</div>
                  <!--  <div class="search-block">
                       <input type="text" value="" placeholder="Procurar" />
                      <input type="submit" value="Search" title="Search" />
                    </div>-->
                  </section>
                </div>
                <h1 class="logo"><a href="index.php" title="Logo">
                  <img title="Logo" alt="Logo" src="img/logo.png" />
                  </a></h1>
              <?php $current = 3; include("menu.php"); ?>      
            </div>
                
              </header>
            </div><br/><br/>
<!--Content Block-->
<section class="content-wrapper">
	<div class="content-container container">
		<!--<div class="breadcrum-container">
			<ul>
				<li><a href="#" title="Home">Home</a></li>
				<li>Man</li>
			</ul>
		</div>-->
		<div class="col-left">
			<div class="block man-block">
				<div class="block-title">NOVIDADES</div>
				<ul>
					<li><a href="#" title="">Descontos de até 70%</a></li>
					<li><a href="#" title="">Site afiliado ao Pag Seguro</a></li>
					<li><a href="#" title="">Grande número de vagas</a></li>
					<li><a href="#" title="">Opção de data para  curso</a></li>
					<li><a href="#" title="">Impressão de Certificado</a></li>
				</ul>
			</div>
			<div class="block shop-by-block">
				<div class="block-title">PREÇOS</div>
				<ul>
					
					<li><a href="#" title="">R$0,00</a></li>
					<li><a href="#" title="">R$0,00</a></li>
					<li><a href="#" title="">R$0,00</a></li>
					<li><a href="#" title="">R$0,00</a></li>
				</ul>
			</div>
			<div class="block compare-block">
				<div class="block-title">COMO ACESSAR UM CURSO</div>
				<ul>
					<li>Clique aqui para mais informações</li>
				</ul>
			</div>
			<!--<div class="block community-block">
				<div class="block-title">COMMUNITY POLL</div>
				<ul>
					<li class="question-row">WHAT IS YOUR FAVORITE COLOR</li>
					<li><input type="radio"><a href="#" title="Green">Green</a></li>
					<li><input type="radio"><a href="#" title="Red">Red</a></li>
					<li><input type="radio"><a href="#" title="Black">Black</a></li>
					<li><input type="radio"><a href="#" title="Magenta">Magenta</a></li>
					<li class="vote-row"><button title="Vote">Vote</button></li>
				</ul>
			</div>-->
			<div class="paypal-block">
				<a href="#" title="Paypal"><img src="img/banner_pagseguro.gif" title="Paypal" alt="Paypal" /></a>
			</div>
		</div>
		<div class="col-main">
			<div class="category-banner"><img src="img/education.jpg" title="Banner" alt="Banner" /></div>
			<div class="pager-container">
				<!--<div class="pager">
					<div class="show-items">6 Item(s)</div>
					<div class="show-per-page"><label>Show</label> <select><option>09</option></select></div>
				</div>-->
				<!--<div class="view-by-block">
					<ul class="view-by">
						<li>View as:</li>
						<li><a href="#" title="Grid" class="grid">Grid</a></li>
						<li><a href="#" title="List" class="list">List</a></li>
					</ul>
					<div class="short-by">
						<label>Sort By</label><select><option>Position</option></select>
					</div>
				</div>-->
			</div>
		<div class="example">
        <div id="content">	
    <div class="z"><?php
		include'pag1.php';	
	?></div>
      <div class="z"><?php
		include'pag2.php';	
	?></div>
      <div class="z"><?php
		include'pag3.php';	
	?></div></div>
     <div id="pagingControls"></div>
</div>
    <script type="text/javascript">
var pager = new Imtech.Pager();
$(document).ready(function() {
    pager.paragraphsPerPage = 1; // set amount elements per page
    pager.pagingContainer = $('#content'); // set of main container
    pager.paragraphs = $('div.z', pager.pagingContainer); // set of required containers
    pager.showPage(1);
});
</script>
    

			<div class="pager-container">
				<!--<div class="pager">
					<div class="show-items">6 Item(s)</div>
					<div class="show-per-page"><label>Show</label> <select><option>09</option></select></div>
				</div>-->
				<!--<div class="view-by-block">
					<ul class="view-by">
						<li>View as:</li>
						<li><a href="#" title="Grid" class="grid">Grid</a></li>
						<li><a href="#" title="List" class="list">List</a></li>
					</ul>-->
					<!--<div class="short-by">
						<label>Sort By</label><select><option>Position</option></select>
					</div>
				</div>-->
			</div>
		</div>
		<div class="clearfix"></div>
		<div class="news-letter-container">
			<?php
		
	?>
	</div>
</section>
</div>
    <!--Quick view Block-->
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
</script>
<article style="display:none;">
	<section id="quick-view-container" class="quick-view-wrapper">
	<div class="quick-view-container">
		<div class="quick-view-left">
			<h2>Sunglass RB3184</h2>
			<div class="product-img-box">
				<p class="product-image">
					<img src="img/sale_icon_img.png" title="Sale" alt="Sale" class="sale-img" />
					<a href="view.html" title="Image"><img src="img/quick_view_img.png" title="Image" alt="Image" /></a>				</p>
				<ul class="thum-img">
					<li><img  src="img/quick_thum_img.png" title="" alt="" /></li>
					<li><img  src="img/quick_thum_img.png" title="" alt="" /></li>
				</ul>
			</div>
		</div>
		<div class="quick-view-right tabs">
			<ul class="tab-block tabNavigation">
				<li><a class="selected" title="Overview" href="#tabDetail">Overview</a></li>
				<li><a title="Description" href="#tabDes">Description</a></li>
			</ul>
			<div id="tabDetail" class="tabDetail">
            	<div class="first-review">Be the first to review this product</div>
			<div class="price-box">
				<span class="price">$600.00</span>			</div>
			<div class="availability">In stock</div>
			<div class="color-size-block">
				<div class="label-row">
					<label><em>*</em> color</label>
					<span class="required">* Required Fields</span>				</div>
				<div class="select-row">
					<select><option>-- Please Select --</option></select>
				</div>
				<div class="label-row">
					<label><em>*</em> size</label>
				</div>
				<div class="select-row">
					<select><option>-- Please Select --</option></select>
				</div>
			</div>
			<div class="add-to-cart-box">
				<span class="qty-box">
					<label for="qty">Qty:</label>
					<a class="prev" title="" href="#"><img alt="" title="" src="img/qty_prev.png"></a>
					<input type="text" name="qty" class="input-text qty" id="qty" maxlength="12" value="1">
					<a class="next" title="" href="#"><img alt="" title="" src="img/qty_next.png"></a>				</span>
				<button title="Add to Cart" class="form-button"><span>Add to Cart</span></button>
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
</body>
</html>
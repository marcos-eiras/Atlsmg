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
                    <!--<div class="search-block">
                       <input type="text" value="" placeholder="Procurar" />
                      <input type="submit" value="Search" title="Search" />
                    </div>-->
                  </section>
                </div>
                <h1 class="logo"><a href="index.php" title="Logo">
                  <img title="Logo" alt="Logo" src="img/logo.png" />
                  </a></h1>
              <?php $current = 4; include("menu.php"); ?>      
            </div>
                
              </header>
            </div>
<!--Content Block-->
<section class="content-wrapper">
	<div class="content-container container">
		<div class="col-main-left">
			<h1 class="page-title">FAQ</h1>
			<div class="block-01">
				<h4>Perguntas Frequentes</h4>
				<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                 <script>
					$(function() {
						$( "#accordion" ).accordion();
					});
					</script>
				<ul id="accordion" class="q-a-block">
					<li>
                    <a href="#" title="">1- Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</a>
                    <div>
Cras dictum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia mauris vel est.
Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat lectus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                    </div>
                    </li>
					<li>
                    <a href="#" title="">2- Vivamus porttitor, neque at volutpat rutrum, purus nisi eleifend libero.</a>
                    <div>
Cras dictum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia mauris vel est.
Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat lectus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                    </div>
                    </li>
					<li>
                    <a href="#" title="">3- Mauris neque metus, malesuada nec, ultricies sit amet, porttitor mattis, enim.</a>
                    <div>
Cras dictum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia mauris vel est.
Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat lectus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                    </div>
                    </li>
					<li>
                    <a href="#" title="">4- Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</a>
                    <div>
Cras dictum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia mauris vel est.
Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat lectus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                    </div>
                    </li>
					<li>
                    <a href="#" title="">5- Etiam nulla massa, pharetra facilisis, volutpat in, imperdiet sit amet, sem.</a>
                    <div>
Cras dictum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia mauris vel est.
Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat lectus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                    </div>
                    </li>
					<li>
                    <a href="#" title="">6- Maecenas placerat, nisl at consequat rhoncus, sem nunc gravida justo, quis eleifend quis lacus.</a>
                    <div>
Cras dictum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia mauris vel est.
Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat lectus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                    </div>
                    </li>
				</ul>
			</div>
			<div class="block-01">
				
				<div class="about-banner" style="border: none;">
              
                <div class="clear"></div></div>
			</div>
		</div>
		<aside class="right-sidebar" style="margin-top: 32px;">
			<!--<div class="block widget-searchwidget">
				<input type="text" value="Type to search..." />
			</div>-->
			 <ul class="banner-add">
                  <li class="add1"><a href="#" title=""><img title="add1" alt="add1" src="curso/box2.jpg" /></a></li>
                  <li class="add2"><a href="#" title=""><img title="add2" alt="add2" src="curso/box1.jpg" /></a></li>
                </ul>
			
		</aside>
		<div class="clearfix"></div>
		<div class="news-letter-container">
		   <?php
		
	?>
	</div>
</section>
</div>
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
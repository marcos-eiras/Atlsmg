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
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>	
	<script src="mtlsr-lightbox.js"></script>
	<!--CSS que precisa para o lightbox funcionar-->
	<link rel="stylesheet" href="mtlsr-lightbox.css" />
	
	<!--CSS que eu coloquei apenas para melhorar apresentação-->
	<style type="text/css">
		*{font-family: "Arial", sans-serif;}
		body{background-color:#f5f5f5}
		
		header{max-width:1000px;text-align:center;display:block;margin:30px auto}
		header h1{color:#666;font-size:28px;font-weight:lighter}
		
		.mtlsr-images-for-lightbox{max-width:600px;margin:0 auto;overflow:hidden}
		.mtlsr-images-for-lightbox ul li{float:left;display:inline;width:14%;margin:1%; padding:0px 0px 0px/*padding:2%*/;/*background-color:#fff;*/border-top:2px solid #598dca}
		.mtlsr-images-for-lightbox ul li a img{width:100%;height:auto;}
		.mtlsr-lightbox{			
			/* IE9 SVG, needs conditional override of 'filter' to 'none' */
			background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIxMDAlIiB5Mj0iMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iIzAwMDAwMCIgc3RvcC1vcGFjaXR5PSIwLjciLz4KICAgIDxzdG9wIG9mZnNldD0iMTAwJSIgc3RvcC1jb2xvcj0iIzAwMDAwMCIgc3RvcC1vcGFjaXR5PSIwLjciLz4KICA8L2xpbmVhckdyYWRpZW50PgogIDxyZWN0IHg9IjAiIHk9IjAiIHdpZHRoPSIxIiBoZWlnaHQ9IjEiIGZpbGw9InVybCgjZ3JhZC11Y2dnLWdlbmVyYXRlZCkiIC8+Cjwvc3ZnPg==);
			background: -moz-linear-gradient(left,  rgba(0,0,0,0.7) 0%, rgba(0,0,0,0.7) 100%); /* FF3.6+ */
			background: -webkit-gradient(linear, left top, right top, color-stop(0%,rgba(0,0,0,0.7)), color-stop(100%,rgba(0,0,0,0.7))); /* Chrome,Safari4+ */
			background: -webkit-linear-gradient(left,  rgba(0,0,0,0.7) 0%,rgba(0,0,0,0.7) 100%); /* Chrome10+,Safari5.1+ */
			background: -o-linear-gradient(left,  rgba(0,0,0,0.7) 0%,rgba(0,0,0,0.7) 100%); /* Opera 11.10+ */
			background: -ms-linear-gradient(left,  rgba(0,0,0,0.7) 0%,rgba(0,0,0,0.7) 100%); /* IE10+ */
			background: linear-gradient(to right,  rgba(0,0,0,0.7) 0%,rgba(0,0,0,0.7) 100%); /* W3C */
			filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#b3000000', endColorstr='#b3000000',GradientType=1 ); /* IE6-8 */
		}
		.mtlsr-lightbox .image-in-lightbox{
			border-radius:5px
		}
		
		.close, .next, .prev{color:#F5F2F2;font-size:30px;text-decoration:none;}
		.next, .prev{color:#aaa;font-size:80px;}
		.close:hover, .next:hover, .prev:hover{color:#fff;}
	</style>
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
						<li><a href="cart.html" title="Cart"><img title="Item" alt="Item" src="images/item_icon.png" /></a></li>
						<li>Item</li>
					</ul>
					<div id="minicart" class="remain_cart" style="display: none;">
						 <p class="empty">You have 2 items in your shopping cart.</p>
						 <ol>
						 	<li>
								<div class="img-block"><img src="images/small_img.png" title="" alt="" /></div>
								<div class="detail-block">
									<h4><a href="#" title="Htc Mobile 1120">Htc Mobile 1120</a></h4>
									<p>
										<strong>1</strong> x $900.00
									</p>
									<a href="#" title="Details">Details</a>
								</div>
								<div class="edit-delete-block">
									<a href="#" title="Edit"><img src="images/edit_icon.png" alt="Edit" title="Edit" /></a>
									<a href="#" title="Remove"><img src="images/delete_item_btn.png" alt="Remove" title="Remove" /></a>
								</div>
							</li>
							<li>
								<div class="img-block"><img src="images/small_img.png" title="" alt="" /></div>
								<div class="detail-block">
									<h4><a href="#" title="Htc Mobile 1120">Htc Mobile 1120</a></h4>
									<p>
										<strong>1</strong> x $900.00
									</p>
									<a href="#" title="Details">Details</a>
								</div>
								<div class="edit-delete-block">
									<a href="#" title="Edit"><img src="images/edit_icon.png" alt="Edit" title="Edit" /></a>
									<a href="#" title="Remove"><img src="images/delete_item_btn.png" alt="Remove" title="Remove" /></a>
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
                   <!-- <div class="search-block">
                       <input type="text" value="" placeholder="Procurar" />
                      <input type="submit" value="Search" title="Search" />
                    </div>-->
                  </section>
                </div>
                <h1 class="logo"><a href="index.php" title="Logo">
                  <img title="Logo" alt="Logo" src="images/logo.png" />
                  </a></h1>
              <?php $current = 7; include("menu.php"); ?>      
            </div>
                
              </header>
            </div>
<!--Content Block-->
<section class="content-wrapper" style="background-color: #CCCECF;">
				<div class="mtlsr-images-for-lightbox">
		<ul>
			<li>
				<a href="galeria/thumbnail/1.jpg">
					<img src="galeria/medium/1p.jpg" alt="" />
				</a>
			</li>
			<li>
				<a href="galeria/thumbnail/2.jpg">
					<img src="galeria/medium/2p.jpg" alt="" />
				</a>
			</li>
			<li>
				<a href="galeria/thumbnail/3.jpg">
					<img src="galeria/medium/3p.jpg" alt="" />
				</a>
			</li>
			<li>
				<a href="galeria/thumbnail/4.jpg">
					<img src="galeria/medium/4p.jpg" alt="" />
				</a>
			</li>
			<li>
				<a href="galeria/thumbnail/5.jpg">
					<img src="galeria/medium/5p.jpg" alt="" />
				</a>
			</li>
<!-- <center><hr style="width: 98%; height: 1px; background-color: rgb(89, 141, 202);"></hr></center>-->
             <li>
				<a href="galeria/thumbnail/6.jpg">
					<img src="galeria/medium/6p.jpg" alt="" />
				</a>
			</li>
             <li>
				<a href="galeria/thumbnail/7.jpg">
					<img src="galeria/medium/7p.jpg" alt="" />
				</a>
			</li>
            <li>
				<a href="galeria/thumbnail/8.jpg">
					<img src="galeria/medium/8p.jpg" alt="" />
				</a>
			</li>
            <li>
				<a href="galeria/thumbnail/9.jpg">
					<img src="galeria/medium/9p.jpg" alt="" />
				</a>
			</li>
            <li>
				<a href="galeria/thumbnail/10.jpg">
					<img src="galeria/medium/10p.jpg" alt="" />
				</a>
			</li>
             <li>
				<a href="galeria/thumbnail/11.jpg">
					<img src="galeria/medium/11p.jpg" alt="" />
				</a>
			</li>
             <li>
				<a href="galeria/thumbnail/12.jpg">
					<img src="galeria/medium/12p.jpg" alt="" />
				</a>
			</li>
             <li>
				<a href="galeria/thumbnail/13.jpg">
					<img src="galeria/medium/13p.jpg" alt="" />
				</a>
			</li>
             <li>
				<a href="galeria/thumbnail/14.jpg">
					<img src="galeria/medium/14p.jpg" alt="" />
				</a>
			</li>
             <li>
				<a href="galeria/thumbnail/15.jpg">
					<img src="galeria/medium/15p.jpg" alt="" />
				</a>
			</li>
            
             <li>
				<a href="galeria/thumbnail/16.jpg">
					<img src="galeria/medium/16p.jpg" alt="" />
				</a>
			</li>
              <li>
				<a href="galeria/thumbnail/17.jpg">
					<img src="galeria/medium/17p.jpg" alt="" />
				</a>
			</li>
              <li>
				<a href="galeria/thumbnail/18.jpg">
					<img src="galeria/medium/18p.jpg" alt="" />
				</a>
			</li>
              <li>
				<a href="galeria/thumbnail/19.jpg">
					<img src="galeria/medium/19p.jpg" alt="" />
				</a>
			</li>
            <li>
				<a href="galeria/thumbnail/20.jpg">
					<img src="galeria/medium/20p.jpg" alt="" />
				</a>
			</li>
            
             <li>
				<a href="galeria/thumbnail/21.jpg">
					<img src="galeria/medium/21p.jpg" alt="" />
				</a>
			</li>
             <li>
				<a href="galeria/thumbnail/22.jpg">
					<img src="galeria/medium/22p.jpg" alt="" />
				</a>
			</li>
             <li>
				<a href="galeria/thumbnail/23.jpg">
					<img src="galeria/medium/23p.jpg" alt="" />
				</a>
			</li>
             <li>
				<a href="galeria/thumbnail/24.jpg">
					<img src="galeria/medium/24p.jpg" alt="" />
				</a>
			</li>
            <li>
				<a href="galeria/thumbnail/25.jpg">
					<img src="galeria/medium/25p.jpg" alt="" />
				</a>
			</li>
               <li>
				<a href="galeria/thumbnail/26.jpg">
					<img src="galeria/medium/26p.jpg" alt="" />
				</a>
			</li>
                     
           <li>
				<a href="galeria/thumbnail/27.jpg">
					<img src="galeria/medium/27p.jpg" alt="" />
				</a>
			</li>
            
              <li>
				<a href="galeria/thumbnail/28.jpg">
					<img src="galeria/medium/28p.jpg" alt="" />
				</a>
			</li>
            <li>
				<a href="galeria/thumbnail/29.jpg">
					<img src="galeria/medium/29p.jpg" alt="" />
				</a>
			</li>
            <li>
				<a href="galeria/thumbnail/30.jpg">
					<img src="galeria/medium/30p.jpg" alt="" />
				</a>
			</li>
             <li>
				<a href="galeria/thumbnail/31.jpg">
					<img src="galeria/medium/31p.jpg" alt="" />

				</a>
			</li>
              <li>
				<a href="galeria/thumbnail/32.jpg">
					<img src="galeria/medium/32p.jpg" alt="" />
				</a>
			</li>
            <li>
				<a href="galeria/thumbnail/33.jpg">
					<img src="galeria/medium/33p.jpg" alt="" />
				</a>
			</li>
            <li>
				<a href="galeria/thumbnail/34.jpg">
					<img src="galeria/medium/34p.jpg" alt="" />
				</a>
			</li>
            <li>
				<a href="galeria/thumbnail/35.jpg">
					<img src="galeria/medium/35p.jpg" alt="" />
				</a>
			</li>
              <li>
				<a href="galeria/thumbnail/36.jpg">
					<img src="galeria/medium/36p.jpg" alt="" />
				</a>
			</li>
             <li>
				<a href="galeria/thumbnail/37.jpg">
					<img src="galeria/medium/37p.jpg" alt="" />
				</a>
			</li>
            <li>
				<a href="galeria/thumbnail/38.jpg">
					<img src="galeria/medium/38p.jpg" alt="" />
				</a>
			</li>
            <li>
				<a href="galeria/thumbnail/39.jpg">
					<img src="galeria/medium/39p.jpg" alt="" />
				</a>
			</li>
            <li>
				<a href="galeria/thumbnail/40.jpg">
					<img src="galeria/medium/40p.jpg" alt="" />
				</a>
			</li>
            <li>
				<a href="galeria/thumbnail/41.jpg">
					<img src="galeria/medium/41p.jpg" alt="" />
				</a>
			</li>
            <li>
				<a href="galeria/thumbnail/42.jpg">
					<img src="galeria/medium/42p.jpg" alt="" />
				</a>
			</li>
            <li>
				<a href="galeria/thumbnail/43.jpg">
					<img src="galeria/medium/43p.jpg" alt="" />
				</a>
			</li>
            <li>
				<a href="galeria/thumbnail/44.jpg">
					<img src="galeria/medium/44p.jpg" alt="" />
				</a>
			</li>
            <li>
				<a href="galeria/thumbnail/45.jpg">
					<img src="galeria/medium/45p.jpg" alt="" />
				</a>
			</li>
		</ul>
       
        
	</div><br/>
   </header>
   
	<div class="mtlsr-lightbox">
		<a href="#" class="close" style="padding: 32px 321px 0px;">&#9421;</a>
		<a href="#" class="prev">&lsaquo;</a>
		<a href="#" class="next">&rsaquo;</a>
	</div> <div class="clear"></div></div>
			</div>
		</div>
      
		<aside class="right-sidebar" style="margin-top: 32px;">
			<!--<div class="block widget-searchwidget">
				<input type="text" value="Type to search..." />
			</div>-->
			 <!--<ul class="banner-add">
                  <li class="add1"><a href="#" title=""><img title="add1" alt="add1" src="curso/box2.jpg" /></a></li>
                  <li class="add2"><a href="#" title=""><img title="add2" alt="add2" src="curso/box1.jpg" /></a></li>
                </ul>-->
			
		</aside>
		
		

</div>

</section>
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
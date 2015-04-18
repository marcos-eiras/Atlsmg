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
                    <div class="search-block">
                      <input type="text" value="" placeholder="Procurar" />
                      <input type="submit" value="Search" title="Search" />
                    </div>
                  </section>
                </div>
                <h1 class="logo"><a href="index.php" title="Logo">
                  <img title="Logo" alt="Logo" src="images/logo.png" />
                  </a></h1>
               <?php
		include'menu.php';	
	?>
            </div>
                
              </header>
            </div>
<!--Content Block-->
<section class="content-wrapper">
	<div class="content-container container">
		<div class="col-main-left">
			<h1 class="page-title"></h1>
			
			<div class="block-01">
				<h4>MENSAGEM ENVIADA COM SUCESSO !</h4>
				<p><a href="index.php">Clique aqui</a> para voltar à página inicial</p>
			</div>
						
		</div>
		<aside class="right-sidebar" style="margin-top: 32px;">
			<div>
				<!--<input type="text" value="Type to search..." />-->
			</div>
			
			
			
				<!--<p>
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
    </table>-->
<!--Fim calendário-->
			
		</aside>
		<div class="clearfix"></div>
		<div class="news-letter-container">
			   <?php
		include'newsletter.php';	
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
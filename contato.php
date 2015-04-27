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
                  <!--  <div class="search-block">
                      <input type="text" value="" placeholder="Procurar" />
                      <input type="submit" value="Search" title="Search" />
                    </div>-->
                  </section>
                </div>
                <h1 class="logo"><a href="index.php" title="Logo">
                  <img title="Logo" alt="Logo" src="img/logo.png" />
                  </a></h1>
                <?php $current = 5; include("menu.php"); ?>
            </div>
                
              </header>
            </div>
<!--Content Block-->
<section class="content-wrapper">
	<div class="content-container container">
		<div class="col-left">
			<div class="block compare-block">
				<div class="block-title">Nossos Telefones</div>
				<ul>
					<li>(31) 3142-5522</li>
				</ul>
			</div>
			<div class="block community-block">
				<div class="block-title">Endereço</div>
				<ul>
					
					<li>Avenida Nossa Senhora de Copacabana n° 613 - sala 302</li>
				
				</ul>
			</div>
            <div class="block community-block">
				<div class="block-title">E-mail</div>
				<ul>
					
					<li>web@atlsmg.com.br</li>
				
				</ul>
			</div>
		</div>
		<div  class="col-main">
			<h1 class="page-title">Contato</h1>
			<div class="contact-form-container">
				<form  action="http://www.fenixdigital.net.br/formail/formail.php" method="post" name="formulario" onsubmit="return valida(this)">
				<ul class="form-fields">
					<li class="left">
						<label>Nome<em>*</em></label>
						<input type="text" name="Nome" required/>
					</li>
					<li class="left">
						<label>Email<em>*</em></label>
						<input type="text" name="Email" required/>
					</li>
					<li class="left">
						<label>Telefone</label>
						<input type="text" name="Telefone" required/>
					</li>
					<li class="full-row">
						<label>Mensagem<em>*</em></label>
						<textarea name="Mensagem" placeholder="Mensagem" required/></textarea>
					</li>
				</ul>
				<div class="button-set">
					<p class="required">* Campos Obrigatórios</p>
					<button type="submit" class="form-button"><span>Enviar</span></button>
                    <!-- CONTEUDO FORMULARIO - CAMPOS -->

<input name="nome_empresa" type="hidden" value="ATLSMG" />
<input name="destinario" type="hidden" value="comercial@fenixdigital.com.br" />
<input name="assunto" type="hidden" value="[CONTATO SITE - ATLSMG CURSOS]" />
<input name="remetente" type="hidden" value="comercial@fenixdigital.com.br" />
<input name="retorno" type="hidden" value="http://fenixdigital.net.br/teste/atlsmg/enviado-sucesso.php"/>
	
							    		</form>
				</div>
			</div>
		</div>
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
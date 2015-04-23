 <nav id="smoothmenu1" class="ddsmoothmenu mainMenu">
     
 <?php $active[$current] = "class=active"; ?>
                  <ul id="nav">
                    <li <?php if(isset($active[1])) echo $active[1] ?>><a href="index.php" title="Home">Home</a></li>
                    <li <?php if(isset($active[2])) echo $active[2] ?>><a href="cadastrar.php" title="Médico">Cadastro de Médico</a></li>
                     <li <?php if(isset($active[6])) echo $active[6] ?>><a href="quem_somos.php" title="Médico">Quem somos</a></li>
                     <li <?php if(isset($active[7])) echo $active[7] ?>><a href="fotos.php" title="Médico">Fotos</a></li>
                    <li <?php if(isset($active[3])) echo $active[3] ?> class="parent"><a href="#" title="curso">Curso</a>
                      <ul style="width: 100px; display: none;">
                       <!--<li class="parent"><a href="categoria.php">Cardiologia</a></li>-->
                        <li class="li menucursos"></li>
                      </ul>
                    </li>
                   <li <?php if(isset($active[4])) echo $active[4] ?>><a href="faq.php" title="Faq">Faq</a></li>
                   <li <?php if(isset($active[5])) echo $active[5] ?>><a href="contato.php" title="contato">Contato</a></li>                
                   <li <?php if(isset($active[6])) echo $active[6] ?>><a href="index.php?pg=noticias" title="noticias">Notícias</a></li><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://www.facebook.com/pages/Atlsmg/1560131997587069" title="facebook" target="_blank"><img src="img/facebook.jpg" height="30px" width="25px"/></a>
                </nav>
                
                <div class="mobMenu">
            <h1>
            <span>Menu</span>
            <a class="menuBox highlight" href="javascript:void(0);">ccc</a>
            <span class="clearfix"></span>
            </h1>
            <div id="menuInnner" style="display:none;">
                   <ul class="accordion">
                     <li <?php if(isset($active[1])) echo $active[1] ?>><a href="index.php" title="Home">Home</a></li>
                    <li <?php if(isset($active[2])) echo $active[2] ?>><a href="cadastrar.php" title="Médico">Cadastro de Médico</a></li>
                     <li <?php if(isset($active[6])) echo $active[6] ?>><a href="quem_somos.php" title="Médico">Quem somos</a></li>
                     <li <?php if(isset($active[7])) echo $active[7] ?>><a href="fotos.php" title="Médico">Fotos</a></li>
                    <li <?php if(isset($active[3])) echo $active[3] ?>><a href="#" title="curso">Curso</a>
                      <ul>
                        <li class="li menucursos"></li>
                      </ul>
                    </li>
                    <li <?php if(isset($active[4])) echo $active[4] ?>><a href="faq.php" title="Faq">Faq</a></li>
                   <li <?php if(isset($active[5])) echo $active[5] ?>><a href="contato.php" title="contato">Contato</a></li>
                   <li <?php if(isset($active[6])) echo $active[6] ?>><a href="index.php?pg=noticias" title="noticias">Notícias</a></li>
                   <li><a href="https://www.facebook.com/pages/Atlsmg/1560131997587069" title="facebook" target="_blank"><img src="img/facebook.jpg" height="30px" width="25px"/></a></li>
                      <span class="clearfix"></span>
                   </ul>
                  
             </div>     
             </div>
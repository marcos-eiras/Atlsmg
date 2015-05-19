<?php
include('SiTec_Config.php');


$grupo = 15;
$grupo_nome = 'Médico';
$mensagem = 'Cadastro de '.$grupo_nome.' efetuado com Sucesso.';

if(isset($_GET['acao']) && $_GET['acao']==='adicionar'){
    
    $db = new \Framework\App\Conexao();
    
    if(SISTEMA_DEBUG===false)
        $recarrega_securimage = 'document.getElementById(\'captcha_image\').src = \''.$endereco_admin_parcial.'Classes/Securimage/securimage_show.php?\' + Math.random();';
    
    // Adiciona ou Retorna Erros
    $Visual = new Visual();
    $erros = 0;
    /*//
    $mensagens = array(
        "tipo"              => 'erro',
        "mgs_principal"     => 'Registro Duplicado',
        "mgs_secundaria"    => 'Dados já registrados: '.$indice_campos.'.'
    );
    $Visual->Json_IncluiTipo('Mensagens',$mensagens);
    $Visual->Javascript_Executar(
            '$("#'.$valor2.'").css(\'border\', \'2px solid #FFAEB0\').focus();'
    );*/
    
   if(isset($_POST['crm'])){
       $crm = anti_injection($_POST['crm']);
       $mensagem .= '<br><b>CRM:</b>'.$crm;
    }else{
        $crm = '';
    }
   if(isset($_POST['fisica'])){
       $fisica = anti_injection($_POST['fisica']);
       $mensagem .= '<br><b>Fisica:</b>'.$fisica;
    }else{
        $fisica = '';
    }
   if(isset($_POST['nome'])){
       $nome = anti_injection($_POST['nome']);
       $mensagem .= '<br><b>Nome:</b>'.$nome;
    }else{$nome = '';}
   if(isset($_POST['rg'])){
       $rg = anti_injection($_POST['rg']);
       $mensagem .= '<br><b>Rg:</b>'.$rg;
    }else{$rg = '';}
   if(isset($_POST['orgao'])){
       $orgao = anti_injection($_POST['orgao']);
       $mensagem .= '<br><b>Orgão:</b>'.$orgao;
    }else{$orgao = '';}
   if(isset($_POST['razao_social'])){
       $razao_social = anti_injection($_POST['razao_social']);
       $mensagem .= '<br><b>Razão Social:</b>'.$razao_social;
    }else{$razao_social= '';}
   if(isset($_POST['nome_contato'])){
       $nome_contato = anti_injection($_POST['nome_contato']);
       $mensagem .= '<br><b>Nome do Contato:</b>'.$nome_contato;
    }else{$nome_contato = '';}
   if(isset($_POST['nomefantasia'])){
       $nomefantasia = anti_injection($_POST['nomefantasia']);
       $mensagem .= '<br><b>Nome Fantasia:</b>'.$nomefantasia;
    }else{$nomefantasia = '';}
   if(isset($_POST['cnpj'])){
       $cnpj = anti_injection($_POST['cnpj']);
       $mensagem .= '<br><b>Cnpj:</b>'.$cnpj;
    }else{$cnpj = '';}
   if(isset($_POST['cnpj_insc'])){
       $cnpj_insc = anti_injection($_POST['cnpj_insc']);
       $mensagem .= '<br><b>Cnpj Inscrição:</b>'.$cnpj_insc;
    }else{$cnpj_insc = '';}
   if(isset($_POST['perfil_nascimento'])){
       $perfil_nascimento = anti_injection($_POST['perfil_nascimento']);
       $mensagem .= '<br><b>Nascimento:</b>'.$perfil_nascimento;
    }else{$perfil_nascimento = '';}
   if(isset($_POST['email'])){
       $email = anti_injection($_POST['email']);
       $mensagem .= '<br><b>Email:</b>'.$email;
    }else{$email = '';}
   if(isset($_POST['telefone'])){
       $telefone = anti_injection($_POST['telefone']);
       $mensagem .= '<br><b>Telefone:</b>'.$telefone;
    }else{$telefone = '';}
   if(isset($_POST['celular'])){
       $celular = anti_injection($_POST['celular']);
       $mensagem .= '<br><b>Celular:</b>'.$celular;
    }else{$celular = '';}
   if(isset($_POST['login'])){
       $login = anti_injection($_POST['login']);
       $mensagem .= '<br><b>Login:</b>'.$login;
    }else{exit;}
   if(isset($_POST['senha'])){
       $senha = \Framework\App\Sistema_Funcoes::Form_Senha_Blindar($_POST['senha']);
    }else{exit;}
    if(isset($_POST['telefone2'])){
        $telefone2 = anti_injection($_POST['telefone2']);
       $mensagem .= '<br><b>Telefone2:</b>'.$telefone2;
    }else{
        $telefone2 = '';
    }
    if(isset($_POST['pais'])){
        $pais = anti_injection($_POST['pais']);
       $mensagem .= '<br><b>Pais:</b>'.$pais;
    }else{
        $pais = '1';
    }
    if(isset($_POST['estado'])){
        $estado = anti_injection($_POST['estado']);
       $mensagem .= '<br><b>Estado:</b>'.$estado;
    }else{
        $estado = '0';
    }
    if(isset($_POST['cidade'])){
        $cidade = anti_injection($_POST['cidade']);
       $mensagem .= '<br><b>Cidade:</b>'.$cidade;
    }else{
        $cidade = '0';
    }
    if(isset($_POST['bairro'])){
        $bairro = anti_injection($_POST['bairro']);
       $mensagem .= '<br><b>Bairro:</b>'.$bairro;
    }else{
        $bairro = '0';
    }
    if(isset($_POST['endereco'])){
        $endereco = anti_injection($_POST['endereco']);
       $mensagem .= '<br><b>Endereço:</b>'.$endereco;
    }else{
        $endereco = '0';
    }
    if(isset($_POST['numero'])){
        $numero = anti_injection($_POST['numero']);
       $mensagem .= '<br><b>Número:</b>'.$numero;
    }else{
        $numero = '0';
    }
    if(isset($_POST['site'])){
        $site = anti_injection($_POST['site']);
       $mensagem .= '<br><b>Site:</b>'.$site;
    }else{
        $site = 'http://';
    }
    if(isset($_POST['cep'])){
        $cep = anti_injection($_POST['cep']);
       $mensagem .= '<br><b>Cep:</b>'.$cep;
    }else{
        $cep = '0';
    }


    //Verifica Grupos
    if ($_POST['senha']=='' || $login=='' || $email=='') {
        $mensagens = array(
            "tipo"              => 'erro',
            "mgs_principal"     => 'Categoria Incorreta',
            "mgs_secundaria"    => 'Preencha Todos os Dados Obrigatorios'
        );
        $Visual->Json_IncluiTipo('Mensagens',$mensagens);
        ++$erros;
    }    
    
    if(SISTEMA_DEBUG===false){
        $captcha = @$_POST['ct_captcha'];
        $captcha = anti_injection($captcha);
        $securimage = new \Framework\Classes\Securimage();
        if ($securimage->check($captcha) == false) {
            $mensagens = array(
                "tipo"              => 'erro',
                "mgs_principal"     => 'Captcha Incorreto',
                "mgs_secundaria"    => 'Por favor Preencha Novamente'
            );
            $Visual->Json_IncluiTipo('Mensagens',$mensagens);
            ++$erros;
        }
    }
    
    // Procura LOGIN
    $procurar = $db->query('SELECT login FROM usuario WHERE login=\''.$login.'\'');
    $contador = 0;
    while ($procurar->fetch_object()) {
        ++$contador;
    }
    if($contador!==0){
        $mensagens = array(
            "tipo"              => 'erro',
            "mgs_principal"     => 'Login já Existe',
            "mgs_secundaria"    => 'Por favor Escolha um Outro'
        );
        $Visual->Json_IncluiTipo('Mensagens',$mensagens);
        $Visual->Javascript_Executar(
                '$("#login").css(\'border\', \'2px solid #FFAEB0\').focus();'
        );
        ++$erros;
    }
    
    // Procura Email
    $procurar = $db->query('SELECT email FROM usuario WHERE email=\''.$email.'\'');
    $contador = 0;
    while ($procurar->fetch_object()) {
        ++$contador;
    }
    if($contador!==0){
        $mensagens = array(
            "tipo"              => 'erro',
            "mgs_principal"     => 'Email já Existe',
            "mgs_secundaria"    => 'Por favor Escolha um Outro'
        );
        $Visual->Json_IncluiTipo('Mensagens',$mensagens);
        $Visual->Javascript_Executar(
                '$("#email").css(\'border\', \'2px solid #FFAEB0\').focus();'
        );
        ++$erros;
    }
    
    // Verifica Erros ou Insere
    if($erros>0){
        // Troca Imagem de Segurança
        if(SISTEMA_DEBUG===false){
            $Visual->Javascript_Executar(
                $recarrega_securimage
            );
        }
        
        $javascript = $Visual->Javascript_Executar();
        if($javascript!=''){
            $Visual->Json_IncluiTipo('JavascriptInterno',$javascript);
            //zera js
            $Visual->Javascript_Executar(false);
        }
        $Visual->Json_Info_Update('Historico', false);
        echo $Visual->Json_Retorna();
        exit;
    }else{
        // Cadastrar
        
        $sucesso = $db->query('INSERT INTO usuario 
    (servidor,grupo,fisica,crm,nome,rg,orgao,razao_social,nome_contato,nomefantasia,cnpj,cnpj_insc,perfil_nascimento,email,telefone,celular,login,senha,
    
    site,cep,pais,estado,cidade,bairro,endereco,numero,telefone2, log_date_add)
    VALUES (\'Fenix_Atls\',\''.$grupo.'\',\''.$fisica.'\',\''.$crm.'\',\''.$nome.'\',\''.$rg.'\',\''.$orgao.'\',\''.$razao_social.'\',\''.$nome_contato.'\',\''.$nomefantasia.'\',\''.$cnpj.'\',\''.$cnpj_insc.'\',\''.$perfil_nascimento.'\',\''.$email.'\',\''.$telefone.'\',\''.$celular.'\',\''.$login.'\',\''.$senha.'\','
                . ''
                . '\''.$site.'\',\''.$cep.'\',\''.$pais.'\',\''.$estado.'\',\''.$cidade.'\',\''.$bairro.'\',\''.$endereco.'\',\''.$numero.'\',\''.$telefone2.'\',\''.APP_HORA.'\')');
        if($sucesso===false){
            
            $mensagens = array(
                "tipo"              => 'erro',
                "mgs_principal"     => 'Falha na Inserçao',
                "mgs_secundaria"    => 'Ligue para o Administrador do Sistema'
            );
            $Visual->Json_IncluiTipo('Mensagens',$mensagens);
            $Visual->Json_Info_Update('Historico', false);
            echo $Visual->Json_Retorna();
            exit;
        }
        $identificador = $db->query('SELECT id FROM usuario WHERE login=\''.$login.'\' LIMIT 1');
        while ($valor = $identificador->fetch_object()) {
            $identificador_id = $valor->id;
        }
        
        // Verifica se tem grupos
        //caminhoneiro
        // Cadastros especificos

        if(isset($_POST['categoria'])){$categoria = anti_injection($_POST['categoria']);
         }else{$categoria = '';}
        if(isset($_POST['capacidade'])){$capacidade = anti_injection($_POST['capacidade']);
         }else{$capacidade = '';}
        if(isset($_POST['telefone'])){$telefone = anti_injection($_POST['telefone']);
         }else{$telefone = '';}
        if(isset($_POST['carteira'])){$carteira = anti_injection($_POST['carteira']);
         }else{$carteira = '';}
        if(isset($_POST['ano'])){$ano = anti_injection($_POST['ano']);
         }else{$ano = '';}
        if(isset($_POST['placa'])){$placa = anti_injection($_POST['placa']);
         }else{$placa = '';}
        if(isset($_POST['renavan'])){$renavan = anti_injection($_POST['renavan']);
         }else{$renavan = '';}
        if(isset($_POST['ipva'])){$ipva = anti_injection($_POST['ipva']);
         }else{$ipva = '';}
        if(isset($_POST['obs1'])){$obs1 = anti_injection($_POST['obs1']);
         }else{$obs1 = '';}
        if(isset($_POST['obs2'])){$obs2 = anti_injection($_POST['obs2']);
         }else{$obs2 = '';}
        if(isset($_POST['obs3'])){$obs3 = anti_injection($_POST['obs3']);
         }else{$obs3 = '';}


        
        
        // Mensagem
        // Redirecionar
        $Visual->Javascript_Executar(
                'window.open("'.$endereco_admin.'","_TOP");'
        );
        $javascript = $Visual->Javascript_Executar();
        if($javascript!=''){
            $Visual->Json_IncluiTipo('JavascriptInterno',$javascript);
            //zera js
            $Visual->Javascript_Executar(false);
        }
        $mensagens = array(
            "tipo"              => 'sucesso',
            "mgs_principal"     => 'Sucesso',
            "mgs_secundaria"    => 'Cadastro de Médico com Sucesso'
        );
        $Visual->Json_IncluiTipo('Mensagens',$mensagens);
        
        // Redireciona
        
        //$params = Array('Url'=>$endereco_admin,'Tempo'=>10);
        //$Visual->Json_IncluiTipo('Redirect',$params);
        
        
        
        $Visual->Json_Info_Update('Historico', false);
        echo $Visual->Json_Retorna();
        
        
        // Envia EMAIL
        require_once CLASS_PATH . 'Email'.DS.'Email'.'.php';
        $mailer = new \Framework\Classes\Email();
        $send	= $mailer->setTo('atls@atlsmg.com.br', 'Ricardo Sierra')
                    ->setSubject('Erro - '.$errno.' - '.SISTEMA_NOME)
                    ->setFrom(SISTEMA_EMAIL, SISTEMA_NOME)
                    ->addGenericHeader('X-Mailer', 'PHP/' . phpversion())
                    ->addGenericHeader('Content-Type', 'text/html; charset="utf-8"')
                    ->setMessage($mensagem)
                    ->setWrap(78)->send();
        
        
        
        exit;
    }
    
}
?>


<!doctype html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <link href="<?php echo $endereco_admin; ?>/web/min/?f=sistema/jquery-ui/jquery-ui.min.css,sistema/bootstrap/css/bootstrap.min.css,sistema/bootstrap/css/bootstrap-theme.min.css,sistema/nprogress/nprogress.css,sistema/toastr/toastr.min.css,css/plugins/jquery.tiptip.css,css/plugins/jquery.blockui.css,css/jcalendar.css,css/plugins/jquery.fullcalendar.css,css/plugins/jquery.fullcalendar.print.css,assets/font-awesome/css/font-awesome.css,assets/metr-folio/css/metro-gallery.css,assets/uniform/css/uniform.default.css,assets/chosen/chosen.min.css,assets/jquery-tags-input/jquery.tagsinput.css,assets/bootstrap-datepicker/css/datepicker.css,assets/bootstrap-timepicker/compiled/timepicker.css,assets/bootstrap-colorpicker/css/colorpicker.css,assets/bootstrap-daterangepicker/daterangepicker.css,assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css,sistema/bootstrap-duallistbox/bootstrap-duallistbox.css,sistema/data-tables/DT_bootstrap.css,css/sistema.css" rel="stylesheet" />
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
                    <div class="search-block">
                      <input type="text" value="" placeholder="Procurar" />
                      <input type="submit" value="" title="Search" />
                    </div>
                  </section>
                </div>
                <h1 class="logo"><a href="index.php" title="Logo">
                  <img title="Logo" alt="Logo" src="img/logo.png" />
                  </a></h1>
              <?php $current = 2; include("menu.php"); ?>
            
                
              </header>
            </div>
            
           <section class="content-wrapper">
	<div class="content-container container">


   <?php /* FORMULARIO */ ?>
             <!-- BEGIN PAGE CONTAINER-->
             <div class="container-fluid">
                <!-- BEGIN PAGE HEADER-->   
                <div class="row-fluid">
                   <div class="col12">
                        <!-- END THEME CUSTOMIZER-->
                        <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                        <h3 class="page-title">
                          <span id="Framework_Titulo">Cadastro<?php if($grupo!==0) echo ' de '.$grupo_nome; ?></span>
                        </h3>
                                          <!-- END PAGE TITLE & BREADCRUMB-->
                   </div>
                </div>
                <!-- END PAGE HEADER-->
                <!-- BEGIN PAGE CONTENT-->
                <div class="row-fluid">
                    <div class="col12" id="blocounico">
                        <div class="widget png">
                            <div class="widget-body">
                                <div class="container-fluid">
                                    <form id="form_Sistema_Admin_Usuarios" class="formajax form-horizontal" action="cadastrar.php?acao=adicionar" method="post" enctype="multipart/form-data" autocomplete="off">
  
                                
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label" for="nome">Nome Completo*:</label>
                                            <div class="col-sm-10">
                                                                <input tabindex="1" type="text" value="" MAXLENGTH="100" id="nome" name="nome" class="form-control obrigatorio masc_letras" /> 
                                                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label" for="cpf">CRM:</label>
                                            <div                        class="col-sm-10">
                                                                <input tabindex="2" type="text" value="" MAXLENGTH="200" id="crm" name="crm" class="form-control" /> 
                                                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-sm-2 control-label" for="cpf">CPF:</label>
                                            <div class="col-sm-10">
                                                                <input tabindex="3" type="text" value="" MAXLENGTH="200" id="cpf" name="cpf" class="form-control masc_cpf" /> 
                                                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label" for="rg">Identidade (RG):</label>
                                            <div class="col-sm-10">
                                                                <input tabindex="4" type="text" value="" MAXLENGTH="200" id="rg" name="rg" class="form-control masc_rg" /> 
                                                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="cep" class="col-sm-2 control-label">Cep:</label>
                                            <div class="col-sm-10">
                                                <input type="text" validar="Control_Layoult_Valida_Cep" onblur="Sierra.Control_Layoult_Pesquisa_Cep('#cep')" class="form-control masc_cep" name="cep" id="cep" maxlength="200" value="" tabindex="5"> 
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label" for="estado">Estado*</label>
                                            <div class="col-sm-10">
                                                <!--Comeca Select-->
                                                <select data-placeholder="Escolha um Estado" class="form-control form-select-padrao obrigatorio" onchange="Sierra.Modelo_Ajax_Chamar('<?php echo $endereco_admin; ?>/_Sistema/Recurso/Select_Recarrega_Extrangeira/U/estado/'+this.value,'','get',true)" id="estado" name="estado" tabindex="6" style="display: none;">    <option selected="" value="1">AC</option>

                                                    <option value="2">AL</option>

                                                    <option value="3">AM</option>

                                                    <option value="4">AP</option>

                                                    <option value="5">BA</option>

                                                    <option value="6">CE</option>

                                                    <option value="7">DF</option>

                                                    <option value="8">ES</option>

                                                    <option value="9">GO</option>

                                                    <option value="10">MA</option>

                                                    <option value="11">MG</option>

                                                    <option value="12">MS</option>

                                                    <option value="13">MT</option>

                                                    <option value="14">PA</option>

                                                    <option value="15">PB</option>

                                                    <option value="16">PE</option>

                                                    <option value="17">PI</option>

                                                    <option value="18">PR</option>

                                                    <option value="19">RJ</option>

                                                    <option value="20">RN</option>

                                                    <option value="21">RO</option>

                                                    <option value="22">RR</option>

                                                    <option value="23">RS</option>

                                                    <option value="24">SC</option>

                                                    <option value="25">SE</option>

                                                    <option value="26">SP</option>

                                                    <option value="27">TO</option>

                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label" for="cidade">Cidade*</label>
                                            <div class="col-sm-10">
                                            <!--Comeca Select--><SELECT tabindex="7" name="cidade" id="cidade" onchange="Sierra.Modelo_Ajax_Chamar('<?php echo $endereco_admin; ?>/_Sistema/Recurso/Select_Recarrega_Extrangeira/U/cidade/'+this.value,'','get',true)" class="form-control form-select-padrao obrigatorio" data-placeholder="Escolha uma Cidade">

                                            <OPTION VALUE="" selected></OPTION>


                                            </SELECT>
                                        </div></div>

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label" for="bairro">Bairro*</label>
                                            <div class="col-sm-10">
                                            <!--Comeca Select--><SELECT tabindex="8" name="bairro" id="bairro" class="form-control form-select-padrao obrigatorio" data-placeholder="Escolha um Bairro">

                                            <OPTION VALUE="" selected></OPTION>


                                            </SELECT>
                                        </div></div>

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label" for="endereco">Endereço:</label>
                                            <div class="col-sm-10">
                                                                <input tabindex="9" type="text" value="" MAXLENGTH="200" id="endereco" name="endereco" class="form-control"  /> 
                                                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label" for="numero">Número:</label>
                                            <div class="col-sm-10">
                                                                <input tabindex="10" type="text" value="" MAXLENGTH="15" id="numero" name="numero" class="form-control" onkeydown="Sierra.Visual_Formulario_Mascara(this,'Numero');"  /> 
                                                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label" for="complemento">Complemento:</label>
                                            <div class="col-sm-10">
                                                                <input tabindex="11" type="text" value="" MAXLENGTH="15" id="complemento" name="complemento" class="form-control"  /> 
                                                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="telefone" class="col-sm-2 control-label">Telefone*:</label>
                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control obrigatorio masc_fone" name="telefone" id="telefone" maxlength="30" value="" tabindex="12"> 
                                                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label" for="celular">Celular:</label>
                                            <div class="col-sm-10">
                                                                <input tabindex="13" type="text" value="" MAXLENGTH="30" id="celular" name="celular" class="form-control masc_cel"  /> 
                                                                            </div>
                                        </div>




                                        <div class="form-group">
                                            <label class="col-sm-2 control-label" for="email">Email 1*:</label>
                                            <div class="col-sm-10">
                                                                <input tabindex="14" type="text" value="" MAXLENGTH="200" id="email" name="email" class="form-control obrigatorio" validar="Control_Layoult_Valida_EMAIL"  /> 
                                                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label" for="email2">Email 2:</label>
                                            <div class="col-sm-10">
                                                                <input tabindex="15" type="text" value="" MAXLENGTH="100" id="email2" name="email2" class="form-control" validar="Control_Layoult_Valida_EMAIL"  /> 
                                                                            </div>
                                        </div>




                                        <div class="form-group">
                                            <label class="col-sm-2 control-label" for="login">Login*:</label>
                                            <div class="col-sm-10">
                                                                <input tabindex="16" type="text" value="" MAXLENGTH="200" id="login" name="login" class="form-control obrigatorio"  /> 
                                                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label" for="senha">Senha*:</label>
                                            <div class="col-sm-10">
                                                                        <input tabindex="17" type="password" value="" MAXLENGTH="200" id="senha" name="senha" class="form-control obrigatorio"  /> 
                                            </div>  
                                        </div>
                                        <div class="form-group">
                                            <label for="obs" class="col-sm-2 control-label">Observação</label>
                                            <div class="col-sm-10">
                                                            <textarea style="height:200px; max-width:100%;" class="form-control" id="obs" name="obs" maxlength="10000" tabindex="18"></textarea>
                                                            <!---->
                                            </div>
                                        </div>
                                        
                                        <?php if(SISTEMA_DEBUG===false){ ?>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label" for="ct_captcha">Preencha por segurança*:</label>
                                                <div class="col-sm-10">                    
                                                <?php
                                                  // show captcha HTML using Securimage::getCaptchaHtml()
                                                  $options = array();
                                                  $options['input_name'] = 'ct_captcha'; // change name of input element for form post

                                                  if (!empty($_SESSION['ctform']['captcha_error'])) {
                                                    // error html to show in captcha output
                                                    $options['error_html'] = $_SESSION['ctform']['captcha_error'];
                                                  }
                                                    // Viu como eu chamo algo doframework sem precisar carregar nada dele ?

                                                  echo \Framework\Classes\Securimage::getCaptchaHtml($options);
                                                ?>
                                                </div>
                                            </div>
                                        <?php } ?>



                                        <div class="form-actions">
                                            <input type="submit" class="btn btn-success" value="Cadastrar" tabindex="19" />
                                        </div>
                                        
                                        
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row-fluid">
                    <div class="col8" id="blocomaior" style="display: none;">
                                        </div>
                    <div class="col4" id="blocomenor" style="display: none;">
                                        </div>
                </div>
                <!-- END PAGE CONTENT-->         
             </div>
             <!-- END PAGE CONTAINER-->
          </div>
          <!-- END PAGE -->  
          <?php /* FIM FORMULARIO */ ?>


            </div>
    </div>











</div>
</section>
    </div> 
<article style="display:none;">
	<section id="quick-view-container" class="quick-view-wrapper">
	<div class="quick-view-container">
		<div class="quick-view-left">
			<h2>Sunglass RB3184</h2>
			<div class="product-img-box">
				<p class="product-image">
					<img src="img/sale_icon_img.png" title="Sale" alt="Sale" class="sale-img" />
					<a href="view.html" title="Image"><img src="img/quick_view_img.png" title="Image" alt="Image" /></a></p>
				<ul class="thum-img">
					<li><img  src="img/quick_thum_img.png" title="" alt="" /></li>
					<li><img  src="img/quick_thum_img.png" title="" alt="" /></li>
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
					<a class="prev" title="" href="#"><img alt="" title="" src="img/qty_prev.png"></a>
					<input type="text" name="qty" class="input-text qty" id="qty" maxlength="12" value="1">
					<a class="next" title="" href="#"><img alt="" title="" src="img/qty_next.png"></a>				</span>
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

<?php /*LAYOULT DO ADMIN */  /*?>
      
      
      
   </div>
   <!-- END CONTAINER -->

   <!-- BEGIN FOOTER -->
   <div id="footer">
       Copyright &copy; 2014 <strong>Carga na Web</strong> Direitos <strong>Carga na Web</strong>
   </div>
   <!-- END FOOTER -->  */ ?>
    
   <!-- BEGIN JAVASCRIPTS -->
   <!-- Load javascripts at bottom, this will reduce page load time --> 
    <script type="text/javascript">console.time('Sistema');</script>  
    
    
      <div class="push"></div><!-- .push --><div id="escondido"></div><div class="growlUI" style="display:none;"><h1>SierraTecnologia</h1> <h2>Ricardo Sierra sierra.csi@gmail.com</h2></div><div id="popup" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="popup" aria-hidden="true"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><h3 id="popuptitulo">Popup</h3></div><div class="modal-body"></div><div class="modal-footer"></div></div><script type="text/javascript" src="<?php echo $endereco_admin; ?>/web/min/?f=lang/ptBR/Linguagem.js,sistema/modernizr/modernizr.js,sistema/jquery/jquery.min.js,sistema/jquery.browser.js,sistema/historico/jquery.history.js,sistema/nprogress/nprogress.js,sistema/toastr/toastr.min.js,js/jquery/jquery.blockUI.js,js/jquery/jquery.tabify.js,js/jquery/jquery.limit.js,assets/bootstrap-mask/jquery.maskedinput-1.3.min.js,js/jquery/jquery.fullcalendar.js,sistema/jquery-ui/jquery-ui.min.js,sistema/bootstrap/js/bootstrap.min.js,sistema/data-tables/jquery.dataTables.js,assets/uniform/jquery.uniform.min.js,assets/chosen/chosen.jquery.min.js,assets/jquery-tags-input/jquery.tagsinput.min.js,assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js,assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js,sistema/bootstrap-duallistbox/jquery.bootstrap-duallistbox.js,assets/bootstrap-datepicker/js/bootstrap-datepicker.js,assets/bootstrap-timepicker/js/bootstrap-timepicker.js,assets/bootstrap-timepicker/jquery-ui-timepicker-addon.js,assets/bootstrap-daterangepicker/date.js,assets/bootstrap-daterangepicker/daterangepicker.js,assets/jquery-slimscroll/jquery.slimscroll.min.js,assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js,assets/bootstrap-inputmask/bootstrap-inputmask.min.js,js/plugins/form-component.js,assets/metr-folio/js/jquery.metro-gal.plugins.min.js,assets/metr-folio/js/jquery.metro-gal.megafoliopro.js,sistema/sistema.js"></script><script type="text/javascript" language="javascript">$(document).ready(function() {if(window.location.hash!='') location.href='<?php echo $endereco_admin; ?>/'+window.location.hash.replace(/#/g, '');ConfigArquivoPadrao = '<?php echo $endereco_admin; ?>/';Config_Form_Maiusculo = false;UserLogado = 2;Configuracoes_Template = new Array();Configuracoes_Template["datatable_sdom"]="<'row'<'col-6'l><'col-6'f>r>t<'row'<'col-6'i><'col-6'p>>";Configuracoes_Template["datatable_sPaginationType"]="bootstrap";Configuracoes_Template["datatable_bJQueryUI"]="";Configuracoes_Template["datatable_bAutoWidth"]="1";});</script>
      
    
<!-- RICARDO REBELLO SIERRA <web@ricardosierra.com.br>  -->    <?php /*<script src="<?php echo $endereco_admin; ?>/layoult/metrolab/js/extra.js"></script>
    
    
    <script src="<?php echo $endereco_admin; ?>/layoult/metrolab/js/jquery.nicescroll.js" type="text/javascript"></script>

    <!-- ie8 fixes -->
    <!--[if lt IE 9]>
    <script src="<?php echo $endereco_admin; ?>/layoult/metrolab/js/excanvas.js"></script>
    <script src="<?php echo $endereco_admin; ?>/layoult/metrolab/js/respond.js"></script>
    <![endif]-->
    <!--common script for all pages-->
    <script src="<?php echo $endereco_admin; ?>/layoult/metrolab/js/common-scripts.js"></script>*/ ?>
    <script type="text/javascript">console.timeEnd('Sistema');Sierra.Control_Layoult_Recarrega_Formulario();function Control_Layoult_Botoes(){ return true; }function Control_Atualizacao(){ return true; }</script>
    
<script src="js/ddsmoothmenu.js"></script>
<script src="js/common.js"></script>
    <!--Ver detalhes Block-->
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
</body></html>

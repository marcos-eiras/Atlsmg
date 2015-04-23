<?php
require_once 'lib/WideImage.php';
require_once 'SiTec_Config.php';





/**
 * Cliente: OutraleiRecords (Fenix_Atls)
 * Autor: Ricardo Rebello Sierra <web@ricardosierra.com.br>
 * Ano: 2014
 * @version 0.5
 */

// Conexao com MYSQL


@$Conexao_Mysqli  =   new mysqli(SIS_SERVER, SIS_USUARIO, SIS_SENHA, SIS_BANCO);
if (mysqli_connect_errno()) {
    throw new Exception('Erro de Conexão: '.mysqli_connect_error(),3100);
}
/* change character set to utf8 */
if (!$Conexao_Mysqli->set_charset("utf8")) {
    throw new Exception('Erro mysql set_charset utf8: '.$Conexao_Mysqli->error,3105);
}
if (!$Conexao_Mysqli->query("SET NAMES 'utf8'")) {
    throw new Exception('Erro mysql SET NAMES utf8: '.$Conexao_Mysqli->error,3101);
}
if (!$Conexao_Mysqli->query("SET character_set_connection=utf8")) {
    throw new Exception('Erro character_set_connection=utf8: '.$Conexao_Mysqli->error,3102);
}
if (!$Conexao_Mysqli->query("SET character_set_client=utf8")) {
    throw new Exception('Erro character_set_client=utf8: '.$Conexao_Mysqli->error,3103);
}
if (!$Conexao_Mysqli->query("SET character_set_results=utf8")) {
    throw new Exception('Erro character_set_results=utf8: '.$Conexao_Mysqli->error,3104);
}
function Visual_Erro($erro){
    var_dump($erro);
    exit;
}

function Visual_Imagem(&$foto,$altura = NULL,$largura = NULL, $ext='png'){
    $nome = md5($foto.$altura.$largura);
    if(file_exists('./tempscache/'.$nome.'.'.$ext)){
        return './tempscache/'.$nome.'.'.$ext;
    }else{
        $image = WideImage::load($foto);
        $image = $image->resize($largura,$altura, 'inside');
 	//$image = $image->crop('50% - 50', '50% - 40', $largura,$altura);
        if($ext==='png'){
            $image->saveToFile('./tempscache/'.$nome.'.'.$ext, null,80);
        }else{
            $image->saveToFile('./tempscache/'.$nome.'.'.$ext, 80);
        }
        chmod ('./tempscache/'.$nome.'.'.$ext, 0777);
        return './tempscache/'.$nome.'.'.$ext;
    }
    return $foto;
}


function Modelo_Noticia($sqli){
    if(!isset($_GET['id'])) Visual_Erro ('Noticia não selecionado');
    
    $noticia = (int) $_GET['id'];
    $select ='SELECT N.id, N.nome, N.texto, N.foto, N.data';
    $query = ' FROM Noticia AS N ';
    $where = 'WHERE N.servidor=\'Fenix_Atls\' AND N.deletado=0 AND N.status=1 AND N.id='.$noticia.' LIMIT 1'; // AND N.destaque=0

    $query_result = $sqli->query($select.$query.$where);
    if($query_result===false){
        Visual_Erro($sqli->error);
    }
    $contador = 0;
    $resultado = Array();
    while ($campo = $query_result->fetch_object()) {
        if($campo->foto!==''){
            $campo->foto = Visual_Imagem($campo->foto,354,240,'jpg');
        }
        $resultado[] = $campo;
        ++$contador;
    }
    
    
    return Array($resultado,$contador);
}

function Modelo_Noticias($sqli){
    $select ='SELECT N.id, N.nome, N.texto, N.foto, DATE_FORMAT(N.data, "%d-%m-%Y") data';
    $query = ' FROM Noticia AS N ';
    $where = 'WHERE N.servidor=\'Fenix_Atls\' AND N.deletado=0 AND N.status=1 ORDER BY N.data DESC LIMIT 4 '; // AND N.destaque=0

    $query_result = $sqli->query($select.$query.$where);
    if($query_result===false){
        Visual_Erro($sqli->error);
    }
    $contador = 0;
    $resultado = Array();
    while ($campo = $query_result->fetch_object()) {
        if($campo->foto!==''){
            $campo->foto = Visual_Imagem($campo->foto,354,240,'jpg');
        }
        $resultado[] = $campo;
        ++$contador;
    }
    
    
    return Array($resultado,$contador);
}

function Modelo_Turma($sqli){
    if(!isset($_GET['id'])) Visual_Erro ('Curso não selecionado');
    
    $curso = (int) $_GET['id'];
    //$query ='SELECT CuT.id, CuT.nome, CuT.qnt, CuT.inicio, CuT.fim, CuT.carga, CuT.descricao '.
    $query ='SELECT CuT.id, CuT.nome, CuT.qnt, DATE_FORMAT(CuT.inicio, "%d-%m-%Y") AS inicio, '
            . 'DATE_FORMAT(CuT.fim, "%d-%m-%Y") AS fim , CuT.carga, CuT.descricao FROM Curso_Turma AS CuT '.
            'WHERE CuT.servidor=\'Fenix_Atls\' AND CuT.deletado=0 AND CuT.status=1 AND CuT.curso='.$curso.' ORDER BY inicio ASC';
    $query_result = $sqli->query($query);
    if($query_result===false) Visual_Erro($sqli->error);
    $contador = 0;
    $resultado = Array();
    while ($campo = $query_result->fetch_object()) {
        $resultado[] = $campo;
        ++$contador;
    }
    return Array($resultado,$contador);
}
function Modelo_Curso($sqli){
    $query ='SELECT Cu.id, Cu.nome, Cu.requisito, Cu.descricao, Cu.valor '.
            'FROM Curso AS Cu '.
            'WHERE Cu.servidor=\'Fenix_Atls\' AND Cu.deletado=0 AND Cu.status=1';
    $query_result = $sqli->query($query);
    if($query_result===false) Visual_Erro($sqli->error);
    $contador = 0;
    $resultado = Array();
    while ($campo = $query_result->fetch_object()) {
        //$campo->foto = Visual_Imagem($campo->foto,290,350,'jpg');
        $resultado[] = $campo;
        ++$contador;
    }
    return Array($resultado,$contador);
}



// Funcoes Visuais
function Visual_Mes($mes_numero){
    switch($mes_numero) {
        case 01: return "Janeiro"; break;
        case 02: return "Fevereiro"; break;
        case 03: return "Março"; break;
        case 04: return "Abril"; break;
        case 05: return "Maio"; break;
        case 06: return "Junho"; break;
        case 07: return "Julho"; break;
        case 08: return "Agosto"; break;
        case 09: return "Setembro"; break;
        case 10: return "Outubro"; break;
        case 11: return "Novembro"; break;
        case 12: return "Dezembro"; break;
    }
    return false;
}







// Regra Do jogo

if(!isset($_GET['TemaTipo'])){
    $Visual_TemaTipo = 'Completo';
}else{
    if(!function_exists('Modelo_'.$_GET['TemaTipo'])){
        $Visual_TemaTipo = 'Completo';
    }else{
        $Visual_TemaTipo = 'Modelo_'.$_GET['TemaTipo'];
    }
}
/*
var_dump(Modelo_Destaque($Conexao_Mysqli));
var_dump(Modelo_Noticia($Conexao_Mysqli));
var_dump(Modelo_Album($Conexao_Mysqli));
var_dump(Modelo_Evento($Conexao_Mysqli));
/**/
if($Visual_TemaTipo==='Completo'){
    
    // Chama Layoult*/
    if(!isset($_GET['pg'])){
        $pg = 'home';
    }else{
        $pg = anti_injection($_GET['pg']);
    }
    if(isset($_GET['id'])){
        $paginaid = (int) $_GET['id'];
    }else{
        $paginaid = 0;
    }
    if(!file_exists('Visual'.DS.$pg.'.php')){
        echo 'Pagina Não Existe'; exit;
    }
    require_once $ROOT . 'Visual.php';
    /**/
}else{
    list($Visual_Cont,$Visual_Cont_i) = $Visual_TemaTipo($Conexao_Mysqli);
    echo json_encode($Visual_Cont);
    exit;
}
?>
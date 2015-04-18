<?php
require_once 'lib/WideImage.php';





/**
 * Cliente: OutraleiRecords (Fenix_Atls)
 * Autor: Ricardo Rebello Sierra <web@ricardosierra.com.br>
 * Ano: 2014
 * @version 0.5
 */

// Conexao com MYSQL

$servidor_conexao = $_SERVER['SERVER_NAME'];

if ($servidor_conexao == 'fenixdigital.no-ip.biz' || $servidor_conexao == 'localhost')
{
    $Conexao_Server                         = "localhost"; // Seu servidor do bando de dados
    $Conexao_Usuario                        = "root";   // Nome de usuario do banco de dados
    $Conexao_Senha                          = "";   // Senha do banco de dados
    $Conexao_Banco                          = 'Cliente_Atls';
}else if ($servidor_conexao == 'fenixdigital.net.br' || $servidor_conexao == 'www.fenixdigital.net.br'){
    $Conexao_Server                         = "localhost"; // Seu servidor do bando de dados
    $Conexao_Usuario                        = "fenixdig_atlsmg";   // Nome de usuario do banco de dados
    $Conexao_Senha                          = "fenix@@";   // Senha do banco de dados
    $Conexao_Banco                          = 'fenixdig_atlsmg';
}else{
    exit;
}

@$Conexao_Mysqli  =   new mysqli($Conexao_Server, $Conexao_Usuario, $Conexao_Senha, $Conexao_Banco);
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



function Modelo_Destaque($sqli,$artista=false){
    $altura = (int) $_GET['altura'];
    $query = '('.
        // NOTICIAS
        'SELECT N.id, N.nome, N.texto, N.foto, \'Noticia\' as Tipo  '.
        'FROM Noticia AS N '.
        'LEFT JOIN Noticia_Referencia AS NR '.
        'ON N.id = NR.noticia '.
        'LEFT JOIN Musica_Album_Artista AS MMA '.
        'ON NR.tabelaid = MMA.id '.
        'WHERE NR.tabela=\'Musica_Album_Artista\' AND N.servidor=\'Fenix_Atls\' AND N.deletado=0 AND N.status=1 AND N.destaque=1'.
    ') UNION ('.
        // EVENTOS
        'SELECT Event.id, Event.nome, Event.texto, Event.foto, \'Evento\' as Tipo  '.
        'FROM Evento AS Event '.
        'LEFT JOIN Evento_Artistas AS EventA '.
        'ON Event.id = EventA.evento '.
        'LEFT JOIN Musica_Album_Artista AS MMA '.
        'ON EventA.artista = MMA.id '.
        'WHERE Event.servidor=\'Fenix_Atls\' AND Event.deletado=0 AND Event.status=1 AND Event.destaque=1'.
    ') UNION ('.
        // VIDEOS
        'SELECT MV.id, MV.nome, MV.obs as texto, MV.foto, \'Video\' as Tipo '.
        'FROM Musica_Video AS MV '.
        'LEFT JOIN Musica_Album_Artista AS MMA '.
        'ON MV.artista = MMA.id '.
        'WHERE MV.servidor=\'Fenix_Atls\' AND MV.deletado=0 AND MV.status=1 AND MV.destaque=1'.
    ')';
    $query_result = $sqli->query($query);
    if($query_result===false){
        Visual_Erro($sqli->error);
    }
    $contador = 0;
    $resultado = Array();
    while ($campo = $query_result->fetch_object()) {
        $campo->foto = Visual_Imagem($campo->foto,$altura,4000,'jpg');
        $resultado[] = $campo;
        ++$contador;
    }
    shuffle($resultado);
    return Array($resultado,$contador);
}
/**
 * 
 * @param type $sqli
 * @param type $artista (Quando False vai para todos os artistas, quando nao, se especifica em um
 * @return type
 */
function Modelo_Artista($sqli,$artista=false){
    if($artista===false){
        $query ='SELECT MMA.id, MMA.nome, MMA.foto as fotos, MMA.origem, MMA.obs '.
                'FROM Musica_Album_Artista AS MMA '.
                'WHERE MMA.servidor=\'Fenix_Atls\' AND MMA.deletado=0 AND MMA.status=1';
    }
    $query_result = $sqli->query($query);
    if($query_result===false){
        Visual_Erro($sqli->error);
    }
    $contador = 0;
    $resultado = Array();
    while ($campo = $query_result->fetch_object()) {
        $campo->fotos = Visual_Imagem($campo->fotos,319,1000,'png');
        $resultado[] = $campo;
        ++$contador;
    }
    return Array($resultado,$contador);
}
function Modelo_Noticia($sqli,$artista=false){
    $select ='SELECT N.id, N.nome, N.texto, N.foto, N.data';
    $query = ' FROM Noticia AS N ';
    $where = 'WHERE N.servidor=\'Fenix_Atls\' AND N.deletado=0 AND N.status=1 ORDER BY N.data DESC LIMIT 4'; // AND N.destaque=0
    if($artista!==false){
        $artista = (int) $artista;
        $select .=', MMA.id as artista';
        $query .= 'INNER JOIN Noticia_Referencia AS NR '.
            'ON N.id = NR.noticia '.
            'INNER JOIN Musica_Album_Artista AS MMA '.
            'ON NR.tabelaid = MMA.id ';
        $where .= ' AND NR.tabela=\'Musica_Album_Artista\' AND MMA.id='.$artista;
    }
    $query_result = $sqli->query($select.$query.$where);
    if($query_result===false){
        Visual_Erro($sqli->error);
    }
    $contador = 0;
    $resultado = Array();
    while ($campo = $query_result->fetch_object()) {
        $campo->foto = Visual_Imagem($campo->foto,354,240,'jpg');
        $resultado[] = $campo;
        ++$contador;
    }
    
    
    return Array($resultado,$contador);
}
function Modelo_Album($sqli,$artista=false){
    $query ='SELECT MA.id, MA.nome, MA.compra, MA.foto, MA.lancamento, MA.obs, MMA.id as artista '.
            'FROM Musica_Album AS MA '.
            'LEFT JOIN Musica_Album_Artista AS MMA '.
            'ON MA.artista = MMA.id '.
            'WHERE MA.servidor=\'Fenix_Atls\' AND MA.deletado=0 AND MA.status=1';
    if($artista!==false){
        $artista = (int) $artista;
        $query .= ' AND MMA.id='.$artista;
    }
    $query .= ' ORDER BY MA.lancamento DESC';
    $query_result = $sqli->query($query);
    if($query_result===false) Visual_Erro($sqli->error);
    $contador = 0;
    $resultado = Array();
    while ($campo = $query_result->fetch_object()) {
        $campo->foto = Visual_Imagem($campo->foto,100,100,'jpg');
        $resultado[] = $campo;
        ++$contador;
    }
    return Array($resultado,$contador);
}
function Modelo_Turma($sqli,$artista=false){
    $query ='SELECT Event.id, Event.nome, Event.texto, Event.foto, Event.data_inicio, MMA.id as artista '.
            'FROM Evento AS Event '.
            'INNER JOIN Evento_Artistas AS EventA '.
            'ON Event.id = EventA.evento '.
            'INNER JOIN Musica_Album_Artista AS MMA '.
            'ON EventA.artista = MMA.id '.
            'WHERE Event.servidor=\'Fenix_Atls\' AND Event.deletado=0 AND Event.status=1 ORDER BY data_inicio DESC LIMIT 4';
    if($artista!==false){
        $artista = (int) $artista;
        $query .= ' AND MMA.id='.$artista;
    }
    $query_result = $sqli->query($query);
    if($query_result===false) Visual_Erro($sqli->error);
    $contador = 0;
    $resultado = Array();
    while ($campo = $query_result->fetch_object()) {
        $campo->foto = Visual_Imagem($campo->foto,200,200,'jpg');
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
    
    /*list($Visual_Cont_Destaque,$Visual_Cont_Destaque_i) = Modelo_Destaque($Conexao_Mysqli);
    list($Visual_Cont_Noticia,$Visual_Cont_Noticia_i) = Modelo_Noticia($Conexao_Mysqli);
    list($Visual_Cont_Artistas,$Visual_Cont_Artistas_i) = Modelo_Artista($Conexao_Mysqli);
    list($Visual_Cont_Album,$Visual_Cont_Album_i) = Modelo_Album($Conexao_Mysqli);
    list($Visual_Cont_Eventos,$Visual_Cont_Eventos_i)   = Modelo_Evento($Conexao_Mysqli);
    list($Visual_Cont_Video,$Visual_Cont_Video_i)   = Modelo_Video($Conexao_Mysqli);
    // Chama Layoult*/
    require_once $ROOT . 'Visual.php';
    /**/
}else{
    list($Visual_Cont,$Visual_Cont_i) = $Visual_TemaTipo($Conexao_Mysqli);
    echo json_encode($Visual_Cont);
    exit;
}
?>
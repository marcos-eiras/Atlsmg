<?php

/**
 * Autor: Ricardo Rebello Sierra <web@ricardosierra.com.br>
 * Ano: 2014
 * @version 0.5
 */

// Cookies de sessão só devem ser acessados via HTTP POR SEGURANÇA
ini_set('session.cookie_httponly', 1);
ini_set('date.timezone', 'America/Sao_Paulo');

// Erros de php sem aparecer no servidor para SEGURANÇA
//ini_set('error_reporting', 'E_ALL & ~E_NOTICE');
//ini_set('display_errors', 1);
ini_set('memory_limit','512M');
ini_set('log_errors', 1);
ini_set('error_log', 'my_file.log');

// Retira Limite de Conexao com Mysql
ini_set('mysqli.max_links', -1);

// Limita Tempo de Execuçao por SEGURANÇA
ini_set('max_execution_time', 300);

// Tipo de Linguagem (Tipo de Texto Universal para nao termos problemas com acentos)
header('Content-Type: text/html; charset=UTF-8');


// Zipa Arquivo para maior PERFORMACE
if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')){
    header('Content-Encoding: gzip');
    ob_start("ob_gzhandler");
}else{
    ob_start();
}
 
// Tenta Executar o Framework
try{
    define('DS', DIRECTORY_SEPARATOR);
    $ROOT = realpath(dirname(__FILE__)). DS;
    // Controle de Tempo de Processamento para controle de PERFORMACE
    define('TEMPO_IMPRIMIR' , false);
    if(TEMPO_IMPRIMIR===true){
        include($ROOT.'sistema'.DS.'App'.DS.'Tempo.php');
        $Log_Tempo = new \Framework\App\Tempo('Completo');
    }
    // Variaveis de Controle e Inicio do Sistema)
    define('SISTEMA_DEBUG'  , true);
    define('US', '/'); // Divisor de URL
    define("SIS_PHPVERSION" , phpversion());
    define("APP_DATA"       , date("Y-m-d"));
    define("APP_HORA"       , date("Y-m-d H:i:s"));
    define("APP_DATA_BR"    , date("d/m/Y"));
    define("APP_HORA_BR"    , date("d/m/Y H:i:s"));
    require_once $ROOT . 'AutoLoad.php';
}
// Se não conseguir, Dispara um Erro
catch(Exception $e){
    if(SISTEMA_DEBUG===true){
        // EM LOCAL DE TESTE MOSTRA DIRETO O ERRO
        echo  'Mensagem: '.$e->getMessage().'<br>Codigo: '.$e->getCode().'<br>Arquivo: '.$e->getFile().'<br>Linha: '.$e->getLine();
        echo  '<br>Previus: '.$e->getPrevious().'<br>Traço: '.$e->getTraceAsString(); exit;
    }else{
        // Controla todos os erros e me envia um email por SEGURANÇA
        include($ROOT.'sistema'.DS.'Classes'.DS.'Email'.DS.'Email.php');
        $mailer = new \Framework\Classes\Email();
        $send	= $mailer->setTo('sierra.csi@gmail.com', 'Ricardo Sierra')
                    ->setSubject('Erro - '.$e->getCode().' - '.SISTEMA_NOME)
                    ->setFrom(SISTEMA_EMAIL, SISTEMA_NOME)
                    ->addGenericHeader('X-Mailer', 'PHP/' . phpversion())
                    ->addGenericHeader('Content-Type', 'text/html; charset="utf-8"')
                    ->setMessage('<strong>Mensagem: '.$e->getMessage().'<br>Codigo: '.$e->getCode().'<br>Arquivo: '.$e->getFile().'<br>Linha: '.$e->getLine().
                    '<br>Previus: '.$e->getPrevious().'<br>Traço: '.$e->getTraceAsString().'<br></strong>')
                    ->setWrap(78)->send();
        Visual_Erro($e->getCode());
    }
}
// Controle de Tempo de Processamento
if(TEMPO_IMPRIMIR===true){
    unset($Log_Tempo);
    echo '<!--'; Tempo::Imprimir(); echo '-->'; 
}
ob_end_flush();
?>
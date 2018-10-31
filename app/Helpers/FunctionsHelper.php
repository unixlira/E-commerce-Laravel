<?php

function assetsCliente($asset)
{
    return asset(sprintf('site/%s/%s', config('app.cliente'), $asset ));
}

function urlCliente($url)
{
    return url(sprintf('site/%s/%s', config('app.cliente'), $url ));
}

function slug($str)
{
        $str = strtolower(trim($str));
        $str = preg_replace('/[^a-z0-9-]/', '-', $str);
        $str = preg_replace('/-+/', "-", $str);
        return $str;
}

function getStatus($inativo)
{
    return ($inativo==1 ? 'Inativo' : 'Ativo');
}

function removerAcentos($string)
{
    $array1 = array( "á", "à", "â", "ã", "ä", "é", "è", "ê", "ë", "í", "ì", "î", "ï", "ó", "ò", "ô", "õ", "ö", "ú", "ù", "û", "ü", "ç", "Á", "À", "Â", "Ã", "Ä", "É", "È", "Ê", "Ë", "Í", "Ì", "Î", "Ï", "Ó", "Ò", "Ô", "Õ", "Ö", "Ú", "Ù", "Û", "Ü", "Ç" );
    $array2 = array( "a", "a", "a", "a", "a", "e", "e", "e", "e", "i", "i", "i", "i", "o", "o", "o", "o", "o", "u", "u", "u", "u", "c", "A", "A", "A", "A", "A", "E", "E", "E", "E", "I", "I", "I", "I", "O", "O", "O", "O", "O", "U", "U", "U", "U", "C" );
    //error_log(str_replace($array1, $array2, $string));
    $string = str_replace($array1, $array2, $string);
    return $string;
}

function getCompany() {

    switch ($_SERVER['SERVER_NAME']) {
        default:
            $company = 'vetdna';
            break;

    }
    if(isset($_GET['AMRDebug']) && $_GET['AMRDebug']!="") {
        dd($company, $_SERVER);
    }
    return $company;
}

function nl2brNull($var)
{
    if(isset($var) && $var != "") {
        return nl2br($var);
    }
    return null;
}

function valor($valor, $tipo)
{
    switch($tipo) {
        case 1:
            // Irá pegar o valor em Reais e converter para o formato do banco de dados.
            $valor = str_replace(',', '.', str_replace('.', '', $valor));
            break;

        case 2:
            // Irá pegar o valor do banco e converter em Reais.
            $valor = number_format($valor, 2, ',', '.');
            break;
    }

    return $valor;
}

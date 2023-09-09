<?php 
    $inicio = date("m-d-Y", strtotime("-7 days"));

    $fim = date("m-d-Y");

    $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'08-02-2023\'&@dataFinalCotacao=\'08-16-2023\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

    $dados = json_decode(file_get_contents($url), true);

    $cotacao = $dados["value"][0]["cotacaoCompra"];

    $real = $_REQUEST["numero"] ?? 0;

    $dolar = $real / $cotacao;

    // criando uma formatação padrão de moeda
    $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

    // Convertendo real na forma do padrao de moeda e exibindo no formato padrao do local 
    echo "<p> A quantia digitada foi: " . numfmt_format_currency($padrao, $real, "BRL") . " equivalente a: <strong>" . numfmt_format_currency($padrao, $dolar, "USD") ."</strong></p>";
?>
<?php

require 'vendor/autoload.php';

// Teste::metodo();
// exit();
// TestandoClassMap::classMap();
// exit();

// Fazer uma busca via GET com Guzzler e imprimir na tela com Crawler via composer 
use guzzlehttp\Client;
use Symfony\Component\DomCrawler\Crawler;
use Alura\BuscadorDeCursos\Buscador;

$client = new GuzzleHttp\Client(['base_uri' => 'https://www.alura.com.br/']);
$crawler = new Crawler();

$buscardor = new Buscador($client, $crawler);
$cursos = $buscardor->buscar('/cursos-online-programacao/php');

foreach ($cursos as $curso) {
    echo exibirMensagem($curso) ;
}
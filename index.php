<?php

require 'vendor/autoload.php';

// Fazer uma busca via GET com Guzzler e imprimir na tela com Crawler via composer 
use guzzlehttp\Client;
use Symfony\Component\DomCrawler\Crawler;

$client = new GuzzleHttp\Client();
$resultado = $client->request('GET', 'https://www.alura.com.br/cursos-online-programacao/php');

$html = $resultado->getBody();

$crawler = new Crawler();
$crawler->addHtmlContent($html);

$cursos = $crawler->filter('span.card-curso__nome');

foreach ($cursos as $curso) {
    echo $curso->textContent . '<br>';
}
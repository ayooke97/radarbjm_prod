<?php
require_once __DIR__ . '/../../../vendor/autoload.php';

require "../../../vendor/ultimate-web-scraper/support/web_browser.php";
require "../../../vendor/ultimate-web-scraper/support/tag_filter.php";

use Symfony\Component\DomCrawler\Crawler;
use GuzzleHttp\Client;

$htmloptions = TagFilter::GetHTMLOptions();
$client = new Client();
$response = $client->request('GET', 'http://admin.epaperbanjar.prokal.co');

// var_dump($response->getHeaders()["Server"][0]);

$res = $response->getBody();

$dom = TagFilter::Explode($res,$htmloptions);
print_r($dom);
// @$dom->loadHTML($res);
// $link = $dom->getElementsByTagName('a'); //


?>
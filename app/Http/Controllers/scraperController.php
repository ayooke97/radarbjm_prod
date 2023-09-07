<?php

namespace App\Http\Controllers;
require __DIR__. '/../../../ultimate-web-scraper/support/tag_filter.php';

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Symfony\Component\DomCrawler\Crawler;

class scraperController extends Controller
{
    //

    public function __invoke(){
        
        $url = 'http://epaper.radarbanjarmasin.co.id';
        $response = Http::post($url,['email' => 'widdihermawan@gmail.com', 'password' => 'redaksi']);
        dd($response->status() . ' ' . $response->reason());
        $crawler = $response->body();
        $htmloptions = \TagFilter::GetHTMLOptions();
        $html = \TagFilter::Explode($crawler, $htmloptions);

        $root = $html->Get();

        $rows = $root->Find(".t_txt_footer");
        foreach ($rows as $row) {
            // echo trim($row->GetPlainText());
            //     echo "\t" . $row->href . "\n";
            //     echo "\t" . HTTP::ConvertRelativeToAbsoluteURL($baseurl, $row->href) . "\n";
        }
        return view('scrape',['row' => trim($row->GetPlainText())]);
    }

}

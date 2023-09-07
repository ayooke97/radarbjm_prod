<?php
require __DIR__ . '/../../../ultimate-web-scraper/support/tag_filter.php';
require __DIR__ . '/../../../ultimate-web-scraper/support/web_browser.php';

$htmloptions = TagFilter::GetHTMLOptions();

// print_r($htmloptions);

$options = [
    "method" => "POST",
    "body" => json_encode([
        "email" => "test@gmail.com",
        "password" => "test"
    ], JSON_UNESCAPED_SLASHES)
];

$url = "http://epaper.radarbanjarmasin.co.id/login/cek_login.html";
$web = new WebBrowser();
$result = $web->Process($url);

// print_r($result);
$baseurl = $result["url"];
echo "Base URL : " . $baseurl;
// $html = TagFilter::Explode($result["body"], $htmloptions);

// $root = $html->Get();

// $rows = $root->Find(".t_txt_footer");
// foreach ($rows as $row) {
//     echo trim($row->GetPlainText());
//     //     echo "\t" . $row->href . "\n";
        // echo "\t" . HTTP::ConvertRelativeToAbsoluteURL($baseurl, $row->href) . "\n";
// }

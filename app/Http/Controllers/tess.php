<?php
require __DIR__. '/../../../ultimate-web-scraper/support/tag_filter.php';
require __DIR__. '/../../../ultimate-web-scraper/support/web_browser.php';

$htmloptions = TagFilter::GetHTMLOptions();

$url = "http://admin.epaperbanjar.prokal.co";
$web = new WebBrowser();
$result = $web->Process($url);
$baseurl = $result["url"];

$html = TagFilter::Explode($result["body"], $htmloptions);

$root = $html->Get();

$rows = $root->Find(".t_txt_footer");
foreach ($rows as $row) {
    echo trim($row->GetPlainText());
//     echo "\t" . $row->href . "\n";
//     echo "\t" . HTTP::ConvertRelativeToAbsoluteURL($baseurl, $row->href) . "\n";
}



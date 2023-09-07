<?php

use App\Http\Controllers\langgananController;
use App\Http\Controllers\scraperController;
use App\Mail\kirimEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;    


/*
|-----------------  ---------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/stress', function () {
//     $email = new kirimEmail();
//     Mail::to('181111025@mhs.stiki.ac.id')->send($email);
//     return '<h1>Success</h1>';
// });

// Route::get('/scrape',function(){
//     $url = 'http://admin.epaperbanjar.prokal.co';
//     $response = Http::get($url);
//     $crawler = $response->body();
//     $htmloptions = \TagFilter::GetHTMLOptions();
//     $html = \TagFilter::Explode($crawler, $htmloptions);

//     $root = $html->Get();

//     $rows = $root->Find(".t_txt_title");
//     foreach ($rows as $row) {
//         $result = trim($row->GetPlainText());
//         //     echo "\t" . $row->href . "\n";
//         //     echo "\t" . HTTP::ConvertRelativeToAbsoluteURL($baseurl, $row->href) . "\n";
//     }
//     return view('scrape', ['row' => $result]);
// });

Route::resource('', langgananController::class);
Route::get('/scrape', scraperController::class);




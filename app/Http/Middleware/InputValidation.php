<?php

namespace App\Http\Middleware;

use App\Http\Controllers\langgananController;
use App\Mail\kirimEmail;
use App\Models\langgananrb;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\HttpFoundation\Response;

class InputValidation
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        
        // dd($request->server("CONTENT_LENGTH"));
        $response = $next($request);

        if (langgananrb::where('email', $request->email)->doesntExist() && ($request->durasi != 'Pilih durasi...') && ($request->metpem != 'Pilih metode pembayaran') && ($request->email != '')){
            dd($request, langgananController::class);
            DB::statement("INSERT INTO pelanggan (email) VALUES ('{$request->email}')");
        }

        else if(langgananrb::where('email', $request->email)->exists()){
            return redirect()->action([langgananController::class, 'email_exists']);
            
        }
        
        else {
            return redirect()->action([langgananController::class, 'index']);
        }
        return $response;
        // $chuu = '<h1>Chuu</h1>';

    }
}

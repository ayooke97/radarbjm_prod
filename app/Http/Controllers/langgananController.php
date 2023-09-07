<?php

namespace App\Http\Controllers;

use App\Mail\kirimEmail;
use App\Http\Middleware\InputValidation;
use App\Models\langgananrb;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;

class langgananController extends Controller
{
    public function __construct()
    {
        // $this->middleware(InputValidation::class);
        $this->middleware('check')->only('store');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        if (isset($_POST)){
            echo '<script type= "text/javascript">alert("Mohon isi dengan benar!")</script>';
        }

        return view('main');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      //
    //   $email = new kirimEmail();
      Mail::to($request->email)->send(new kirimEmail());
      return view('welcome');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function email_exists(){
        echo '<script type= "text/javascript">alert("Email sudah ada. Mohon isi dengan benar!")</script>';
        return view('main');
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Models\Company;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Отримання першої компанії
        $company = Company::orderBy('id', 'asc')->first();

        // Отримання філій компанії
        $branches = $company ? $company->branches : [];

        // Передача даних до вигляду
        return view('home', compact('company', 'branches'));
    }
}

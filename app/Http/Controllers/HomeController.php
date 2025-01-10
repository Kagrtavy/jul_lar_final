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
        $company = Company::orderBy('id', 'asc')->first();
        $branches = $company ? $company->branches : [];
        return view('home', compact('company', 'branches'));
    }

    /**
     * Get the company logo for the header.
     *
     * @return string
     */
    public static function getCompanyLogo()
    {
        $company = Company::orderBy('id', 'asc')->first();
        return $company && $company->logo ? asset($company->logo) : asset('/images/default-logo.png');
    }
}

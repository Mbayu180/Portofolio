<?php

namespace App\Http\Controllers;

use App\Certificate;
use App\Portfolio;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        return view('contents.landing.index');
        return view('contents.landing.about');
        

    }

    public function certificates()
    {
        $certificates = Certificate::all();
        return view('contents.landing.certificates.index', compact('certificates'));
    }

    public function certificate(Certificate $certificate)
    {
        return view('contents.landing.certificates.detail', compact('certificate'));
    }

    public function about()
    {
        return view('contents.landing.about');
    }

    public function inspirators()
    {
        $inspirators = Inspirator::all();
        return view('contents.landing.inspirators.index', compact('inspirators'));
    }


    public function contact()
    {
        return view('contents.landing.contact');
    }

    public function portfolios()
    {
        $portfolios = Portfolio::all();
        return view('contents.landing.portfolios.index', compact('portfolios'));
    }

    public function portfolio(Portfolio $portfolio)
    {
        return view('contents.landing.portfolios.detail', compact('portfolio'));
    }
}

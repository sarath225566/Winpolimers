<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
    //  */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('website.index');
    }
    public function about()
    {
        return view('website.about');
    }
     public function product()
    {
        return view('website.product');
    }
    public function contact()
    {
        return view('website.contact');
    }
    public function pharmaceutical()
    {
        return view('website.pharmaceutical');
    }
    public function cosmeticspersonalcare()
    {
        return view('website.cosmetics-and-personal-care');
    }
     public function oil()
    {
        return view('website.oil');
    }
     public function productDetail()
    {
        return view('website.product-detail');
    }
    public function cart()
    {
        return view('website.cart');
    }
    public function checkout()
    {
        return view('website.checkout');
    }
}

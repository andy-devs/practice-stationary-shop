<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class MainController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function aboutCompany()
    {
        return view('about-company');
    }
    public function companyStandarts()
    {
        return view('company-standarts');
    }
    public function clientsAndPartners()
    {
        return view('clients-and-partners');
    }
    public function workInCompany()
    {
        return view('work-in-company');
    }
    public function contacts()
    {
        return view('contacts');
    }
    public function showLatestProducts()
    {
        $products = Product::latest()->take(5)->get();
        return view('index', compact('products'));
    }
    public function search(Request $request) {
        $data = $request->validate([
            'search' => ['required', 'string', 'min:3']
        ]);
        $search = $request->search;
        $products = Product::where('name','like',"%" . $search . "%")->orderBy('name')->paginate(10);
        return view('products', compact('products'));
    }
}

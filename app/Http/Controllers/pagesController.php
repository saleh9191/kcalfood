<?php

namespace App\Http\Controllers;


class pagesController extends Controller
{
    public function index()
    {
        return view('mainPages.home');
    }

    public function view_products()
    {
        return view('mainPages.products');
    }

    public function search()
    {
        return view('mainPages.pro');
    }

    public function searchDo(Request $request)
    {

        $products = Product::where('name', 'LIKE', '%' . $request->search . '%')-get();

            return view('mainPages.productsGrid', compact('products'));

    }






}


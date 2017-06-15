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




}


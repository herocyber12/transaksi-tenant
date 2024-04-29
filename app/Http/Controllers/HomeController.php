<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view("index");
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function kategori($id=null)
    {
        return view('pages.kategori')->with(isset($id));
    }

    public function about()
    {
        return view('pages.about');
    }

    public function paket()
    {
        return view('pages.paket');
    }

    public function detail_paket($id=null){
        return view('pages.detail_paket')->with(isset($id));
    }

    public function event()
    {
        return view('pages.event');
    }

    public function detail_event($id=null)
    {
        return view('pages.detail_event');
    }

}

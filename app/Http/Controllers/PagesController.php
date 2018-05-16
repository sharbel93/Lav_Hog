<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function index() {
        return view('pages.index');
    }

    public function about() {
        return view('pages.about');
    }

    public function ministries() {
        return view('pages.ministries');
    }

    public function gallery() {
        return view('pages.gallery');
    }

    public function sermons() {
        return view('pages.sermons');
    }

    public function staff() {
        return view('pages.staff');
    }

    public function contact() {
        return view('pages.contact');
    }
}

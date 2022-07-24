<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index', [
            'title' => 'Dashboard',
        ]);
    }
    public function addArticle()
    {
        return view('dashboard.add-article', [
            'title' => 'Buat Artikel',
        ]);
    }
    public function profile()
    {
        return view('dashboard.profile', [
            'title' => 'Profile',
        ]);
    }

    public function draft()
    {
        return view('dashboard.draft', [
            'title' => 'Draft Artikel',
        ]);
    }
}

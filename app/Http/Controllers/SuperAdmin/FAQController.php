<?php

namespace App\Http\Controllers\SuperAdmin;

use App\FAQ;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FAQController extends Controller
{
    public function index()
    {
        $faq = FAQ::all()->first();
        return view('superadmin.faq.index', compact('faq'));
    }

    public function store(Request $request)
    {
        $faq = FAQ::all()->first();
        $faq['minggu_saham_digital'] = $request->minggu_saham_digital;
        $faq['pertandingan'] = $request->pertandingan;
        $faq->save();
        return redirect()->back();
    }

    public function adminIndex()
    {
        $faq = FAQ::all()->first();
        return view('admin.faq.index', compact('faq'));
    }

    public function adminStore(Request $request)
    {
        $faq = FAQ::all()->first();
        $faq['minggu_saham_digital'] = $request->minggu_saham_digital;
        $faq['pertandingan'] = $request->pertandingan;
        $faq->save();
        return redirect()->back();
    }
}

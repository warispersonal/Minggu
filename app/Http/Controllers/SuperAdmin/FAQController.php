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
        $faq['minggu_saham_digital_bm'] = $request->minggu_saham_digital_bm;
        $faq['pertandingan'] = $request->pertandingan;
        $faq['pertandingan_bm'] = $request->pertandingan_bm;
        $faq->save();
        return redirect()->back()->with(['msg'=>'FAQ updated successfully']);;
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
        $faq['minggu_saham_digital_bm'] = $request->minggu_saham_digital_bm;
        $faq['pertandingan'] = $request->pertandingan;
        $faq['pertandingan_bm'] = $request->pertandingan_bm;
        $faq->save();
        return redirect()->back()->with(['msg'=>'FAQ updated successfully']);;
    }
}

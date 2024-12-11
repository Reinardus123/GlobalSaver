<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocaleController extends Controller
{
    public function locale($locale){
        app()->setLocale($locale);
        session()->put('locale',$locale);
        return redirect()->back();
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function form2(Request $request){
        $sandi = 'ganteng';

        if ($sandi == $request->sandi){
            return view('home2');
        }else{
            return redirect('form2');
        }
    }

    public function form3(Request $request){
        $sandi = 'cantik';

        if ($sandi == $request->sandi){
            return view('home3');
        }else{
            return redirect('form3');
        }
    }
}

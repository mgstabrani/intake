<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Sandi3Controller extends Controller
{
    public function dolphin3(Request $request){
        $sandi = 'dolphin3';

        if ($sandi == $request->sandi){
            return view('gmeet');
        }else{
            return redirect('/sandi3-dolphin');
        }
    }

    public function dove3(Request $request){
        $sandi = 'dove3';

        if ($sandi == $request->sandi){
            return view('gmeet');
        }else{
            return redirect('/sandi3-dove');
        }
    }

    public function eagle3(Request $request){
        $sandi = 'eagle3';

        if ($sandi == $request->sandi){
            return view('gmeet');
        }else{
            return redirect('/sandi3-eagle');
        }
    }

    public function hornbill3(Request $request){
        $sandi = 'hornbill3';

        if ($sandi == $request->sandi){
            return view('gmeet');
        }else{
            return redirect('/sandi3-hornbill');
        }
    }

    public function komodo3(Request $request){
        $sandi = 'komodo3';

        if ($sandi == $request->sandi){
            return view('gmeet');
        }else{
            return redirect('/sandi3-komodo');
        }
    }

    public function lion3(Request $request){
        $sandi = 'lion3';

        if ($sandi == $request->sandi){
            return view('gmeet');
        }else{
            return redirect('/sandi3-lion');
        }
    }

    public function mantaray3(Request $request){
        $sandi = 'mantaray3';

        if ($sandi == $request->sandi){
            return view('gmeet');
        }else{
            return redirect('/sandi3-mantaray');
        }
    }

    public function rhino3(Request $request){
        $sandi = 'rhino3';

        if ($sandi == $request->sandi){
            return view('gmeet');
        }else{
            return redirect('/sandi3-rhino');
        }
    }

    public function shark3(Request $request){
        $sandi = 'shark3';

        if ($sandi == $request->sandi){
            return view('gmeet');
        }else{
            return redirect('/sandi3-shark');
        }
    }
}

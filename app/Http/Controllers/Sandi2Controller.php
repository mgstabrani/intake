<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Sandi2Controller extends Controller
{
    public function dolphin2(Request $request){
        $sandi = 'milea';

        if ($sandi == $request->sandi){
            return view('menu3.dolphin');
        }else{
            return redirect('/sandi2-dolphin');
        }
    }

    public function dove2(Request $request){
        $sandi = 'aadc2';

        if ($sandi == $request->sandi){
            return view('menu3.dove');
        }else{
            return redirect('/sandi2-dove');
        }
    }

    public function eagle2(Request $request){
        $sandi = 'qopit';

        if ($sandi == $request->sandi){
            return view('menu3.eagle');
        }else{
            return redirect('/sandi2-eagle');
        }
    }

    public function hornbill2(Request $request){
        $sandi = 'ecak';

        if ($sandi == $request->sandi){
            return view('menu3.hornbill');
        }else{
            return redirect('/sandi2-hornbill');
        }
    }

    public function komodo2(Request $request){
        $sandi = 'ejak';

        if ($sandi == $request->sandi){
            return view('menu3.komodo');
        }else{
            return redirect('/sandi2-komodo');
        }
    }

    public function lion2(Request $request){
        $sandi = 'ciqo';

        if ($sandi == $request->sandi){
            return view('menu3.lion');
        }else{
            return redirect('/sandi2-lion');
        }
    }

    public function mantaray2(Request $request){
        $sandi = 'umrik';

        if ($sandi == $request->sandi){
            return view('menu3.mantaray');
        }else{
            return redirect('/sandi2-mantaray');
        }
    }

    public function rhino2(Request $request){
        $sandi = 'badaq';

        if ($sandi == $request->sandi){
            return view('menu3.rhino');
        }else{
            return redirect('/sandi2-rhino');
        }
    }

    public function shark2(Request $request){
        $sandi = 'mipan';

        if ($sandi == $request->sandi){
            return view('menu3.shark');
        }else{
            return redirect('/sandi2-shark');
        }
    }
}

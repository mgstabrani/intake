<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Sandi1Controller extends Controller
{
    public function dolphin1(Request $request){
        $sandi = 'dolphin1';

        if ($sandi == $request->sandi){
            return view('menu2.dolphin');
        }else{
            return redirect('/sandi1-dolphin');
        }
    }

    public function dove1(Request $request){
        $sandi = 'dove1';

        if ($sandi == $request->sandi){
            return view('menu2.dove');
        }else{
            return redirect('/sandi1-dove');
        }
    }

    public function eagle1(Request $request){
        $sandi = 'eagle1';

        if ($sandi == $request->sandi){
            return view('menu2.eagle');
        }else{
            return redirect('/sandi1-eagle');
        }
    }

    public function hornbill1(Request $request){
        $sandi = 'hornbill1';

        if ($sandi == $request->sandi){
            return view('menu2.hornbill');
        }else{
            return redirect('/sandi1-hornbill');
        }
    }

    public function komodo1(Request $request){
        $sandi = 'komodo1';

        if ($sandi == $request->sandi){
            return view('menu2.komodo');
        }else{
            return redirect('/sandi1-komodo');
        }
    }

    public function lion1(Request $request){
        $sandi = 'lion1';

        if ($sandi == $request->sandi){
            return view('menu2.lion');
        }else{
            return redirect('/sandi1-lion');
        }
    }

    public function mantaray1(Request $request){
        $sandi = 'mantaray1';

        if ($sandi == $request->sandi){
            return view('menu2.mantaray');
        }else{
            return redirect('/sandi1-mantaray');
        }
    }

    public function rhino1(Request $request){
        $sandi = 'rhino1';

        if ($sandi == $request->sandi){
            return view('menu2.rhino');
        }else{
            return redirect('/sandi1-rhino');
        }
    }

    public function shark1(Request $request){
        $sandi = 'shark1';

        if ($sandi == $request->sandi){
            return view('menu2.shark');
        }else{
            return redirect('/sandi1-shark');
        }
    }
}

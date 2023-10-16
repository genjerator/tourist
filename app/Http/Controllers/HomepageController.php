<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class HomepageController extends Controller
{
    public function index(Request $request): View
    {
        return view('homepage');
    }

    public function test(Request $request)
    {
        $zbir = 0;
        for ($i = 1; $i <= 100; $i++) {
            //desetica veca 4
            //stotina >2
            //zbir cifara =7
//            $jedinica = $i % 10;
//            $desetica = ($i / 10) % 10;
//            $stotina = ($i / 100) % 10;
//            $hiljada = ($i / 1000) % 10;
//            $zbir = $jedinica + $desetica + $stotina + $hiljada;
//            $res = sprintf("%s: %s - %s - %s - %s = %s", $i, $hiljada,$stotina,$desetica,$jedinica, $zbir);
//            if ($desetica > 3 && $stotina < 4 && $zbir==7) {
//                dump($res);
//            }
            $zbir = $zbir+$i;

            $res = sprintf("%s: %s",$i,$zbir);
            dump($res);
        }
        return $zbir;
    }
}

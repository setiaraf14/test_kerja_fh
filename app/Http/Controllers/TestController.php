<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function testTiga() {
        return view('test-tiga');
    }

    public function testTigaStore(Request $request) {
        $nominal = $request->nominal;
        $word = ['Fintegra', 'Homindo Indonesia'];
        return view('test-tiga-result', compact('nominal', 'word'));
    }

    public function testEmpat() {
        $someArray = [14, 97, 25, 6, 11, 16];
        $resultSum = array_sum($someArray);
        return $resultSum;
    }
}

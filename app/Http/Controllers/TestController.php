<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function getPrint()
    {
        return redirect('/');
    }

    public function postPrint()
    {
        $data = \Request::all();
        $pdf = \PDF::loadView('print', ['data' => $data])
            ->setPaper('a4')
            ->setOrientation('landscape')
            ->setOption('margin-top', 2)
            ->setOption('margin-bottom', 0);

        return $pdf->inline('print.pdf');
    }

    public function complete()
    {
        $data = \Request::all();
        $location = public_path() . '/pdf/';
        $filename = 'test_' . date('YmdHis') . '.pdf';
        $pdf = \PDF::loadView('print', ['data' => $data]);
        $pdf->save($location . $filename);
        return view('complete')->with(['filename' => $filename]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $data = [
            'col1' => 54265,
            'col2' => 1,
            'col3' => 1200623,
            'col4' => 'ﾃｽﾄ - 1200623',
            'col5' => 'ﾃｽﾄ',
            'col6' => '男',
            'col7' => '09:00',
            'col8' => '18:00',
        ];
        return view('index', ['data' => $data]);
    }

    public function getPrint()
    {
        return redirect('/');
    }

    public function postPrint()
    {
        $data = [
            'col1' => 54265,
            'col2' => 1,
            'col3' => 1200623,
            'col4' => 'ﾃｽﾄ - 1200623',
            'col5' => 'ﾃｽﾄ',
            'col6' => '男',
            'col7' => '09:00',
            'col8' => '18:00',
        ];
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

<?php

namespace App\Http\Controllers;

class TestController extends Controller
{
    const DATA = [
        [
            'col1' => '(例)',
            'col2' => '',
            'col3' => '✔',
            'col4' => 9999999,
            'col5' => 'エントリー テス男',
            'col6' => 'エントリーテスト',
            'col7' => '',
            'col8' => '09:00',
            'col9' => '18:00',
            'col10' => '✔',
            'col11' => '：',
            'col12' => '：',
            'col13' => '：',
        ],
        [
            'col1' => '(例)',
            'col2' => '',
            'col3' => '✔',
            'col4' => 9999999,
            'col5' => 'エントリー テス男',
            'col6' => 'エントリーテスト',
            'col7' => '',
            'col8' => '09:00',
            'col9' => '18:00',
            'col10' => '',
            'col11' => '09:00',
            'col12' => '20:00',
            'col13' => '01:30',
        ],
        [
            'col1' => 54265,
            'col2' => 1,
            'col3' => '',
            'col4' => 1200623,
            'col5' => 'ﾃｽﾄ-1200623',
            'col6' => 'ﾃｽﾄ',
            'col7' => '男',
            'col8' => '09:00',
            'col9' => '18:00',
            'col10' => '',
            'col11' => '：',
            'col12' => '：',
            'col13' => '：',
        ],
        [
            'col1' => 55181,
            'col2' => 2,
            'col3' => '',
            'col4' => 1200642,
            'col5' => 'やすもと ﾃｽﾄ',
            'col6' => 'ﾀｯﾀｯﾀｯﾀ',
            'col7' => '男',
            'col8' => '09:00',
            'col9' => '18:00',
            'col10' => '',
            'col11' => '：',
            'col12' => '：',
            'col13' => '：',
        ],
        [
            'col1' => 55959,
            'col2' => 3,
            'col3' => '',
            'col4' => 1200642,
            'col5' => 'やすもと ﾃｽﾄ',
            'col6' => 'ﾀｯﾀｯﾀｯﾀ',
            'col7' => '男',
            'col8' => '09:00',
            'col9' => '18:00',
            'col10' => '',
            'col11' => '：',
            'col12' => '：',
            'col13' => '：',
        ],
        [
            'col1' => 55959,
            'col2' => 3,
            'col3' => '',
            'col4' => 1200642,
            'col5' => 'やすもと ﾃｽﾄ',
            'col6' => 'ﾀｯﾀｯﾀｯﾀ',
            'col7' => '男',
            'col8' => '09:00',
            'col9' => '18:00',
            'col10' => '',
            'col11' => '：',
            'col12' => '：',
            'col13' => '：',
        ],
        [
            'col1' => 55959,
            'col2' => 3,
            'col3' => '',
            'col4' => 1200642,
            'col5' => 'やすもと ﾃｽﾄ',
            'col6' => 'ﾀｯﾀｯﾀｯﾀ',
            'col7' => '男',
            'col8' => '09:00',
            'col9' => '18:00',
            'col10' => '',
            'col11' => '：',
            'col12' => '：',
            'col13' => '：',
        ],
        [
            'col1' => 55959,
            'col2' => 3,
            'col3' => '',
            'col4' => 1200642,
            'col5' => 'やすもと ﾃｽﾄ',
            'col6' => 'ﾀｯﾀｯﾀｯﾀ',
            'col7' => '男',
            'col8' => '09:00',
            'col9' => '18:00',
            'col10' => '',
            'col11' => '：',
            'col12' => '：',
            'col13' => '：',
        ],
        [
            'col1' => 55959,
            'col2' => 3,
            'col3' => '',
            'col4' => 1200642,
            'col5' => 'やすもと ﾃｽﾄ',
            'col6' => 'ﾀｯﾀｯﾀｯﾀ',
            'col7' => '男',
            'col8' => '09:00',
            'col9' => '18:00',
            'col10' => '',
            'col11' => '：',
            'col12' => '：',
            'col13' => '：',
        ],
        [
            'col1' => 55959,
            'col2' => 3,
            'col3' => '',
            'col4' => 1200642,
            'col5' => 'やすもと ﾃｽﾄ',
            'col6' => 'ﾀｯﾀｯﾀｯﾀ',
            'col7' => '男',
            'col8' => '09:00',
            'col9' => '18:00',
            'col10' => '',
            'col11' => '：',
            'col12' => '：',
            'col13' => '：',
        ],
        // [
        //     'col1' => '',
        //     'col2' => '',
        //     'col3' => '',
        //     'col4' => '',
        //     'col5' => '',
        //     'col6' => '',
        //     'col7' => '',
        //     'col8' => '',
        //     'col9' => '',
        //     'col10' => '',
        //     'col11' => '：',
        //     'col12' => '：',
        //     'col13' => '：',
        // ],
        // [
        //     'col1' => '',
        //     'col2' => '',
        //     'col3' => '',
        //     'col4' => '',
        //     'col5' => '',
        //     'col6' => '',
        //     'col7' => '',
        //     'col8' => '',
        //     'col9' => '',
        //     'col10' => '',
        //     'col11' => '：',
        //     'col12' => '：',
        //     'col13' => '：',
        // ],
        // [
        //     'col1' => '',
        //     'col2' => '',
        //     'col3' => '',
        //     'col4' => '',
        //     'col5' => '',
        //     'col6' => '',
        //     'col7' => '',
        //     'col8' => '',
        //     'col9' => '',
        //     'col10' => '',
        //     'col11' => '：',
        //     'col12' => '：',
        //     'col13' => '：',
        // ],
        // [
        //     'col1' => '',
        //     'col2' => '',
        //     'col3' => '',
        //     'col4' => '',
        //     'col5' => '',
        //     'col6' => '',
        //     'col7' => '',
        //     'col8' => '',
        //     'col9' => '',
        //     'col10' => '',
        //     'col11' => '：',
        //     'col12' => '：',
        //     'col13' => '：',
        // ],
        // [
        //     'col1' => '',
        //     'col2' => '',
        //     'col3' => '',
        //     'col4' => '',
        //     'col5' => '',
        //     'col6' => '',
        //     'col7' => '',
        //     'col8' => '',
        //     'col9' => '',
        //     'col10' => '',
        //     'col11' => '：',
        //     'col12' => '：',
        //     'col13' => '：',
        // ],
    ];

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
        $pdf = \PDF::loadView('print', ['data' => self::DATA])
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

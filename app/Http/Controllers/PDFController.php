<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Webklex\PDFMerger\Facades\PDFMergerFacade as PDFMerger;

class PDFController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): View
    {
        return view('mergePDF');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'filenames' => 'required',
            'filenames.*' => 'mimes:pdf'
        ]);

        if ($request->hasFile('filenames')) {
            $pdf = PDFMerger::init();

            foreach ($request->file('filenames') as $key => $value) {
                $pdf->addPDF($value->getPathName(), 'all');
            }

            $fileName = time() . '.pdf';
            $pdf->merge();
            $pdf->save(public_path($fileName));
        }

        return response()->download(public_path($fileName));
    }
}

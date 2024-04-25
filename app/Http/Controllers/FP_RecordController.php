<?php

namespace App\Http\Controllers;

use App\Imports\FP_RecordImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class FP_RecordController extends Controller
{
    public function index() {
        return view('import.index');
    }

    public function import(Request $request) {
        // Validate File
        $request->validate([
            'import-file' => ['required', 'file']
        ]);

        Excel::import(new FP_RecordImport, $request->file('import-file'));

        return redirect()->back()->with('status', 'Imported Successfully');
    }
}

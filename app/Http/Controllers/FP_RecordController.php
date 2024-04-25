<?php

namespace App\Http\Controllers;

use App\Imports\FP_RecordImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class FP_RecordController extends Controller
{
    public function index() {
        return view('fprecord.index');
    }

    public function store(Request $request) {
        // Validate File
        $request->validate([
            'import-file' => ['required', 'file'],
            'age' => 'required',
        ]);

        $age = $request->input('age');

        Excel::import(new FP_RecordImport($age), $request->file('import-file'));

        return redirect()->back()->with('status', 'Imported Successfully');
    }
}

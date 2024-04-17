<?php

namespace App\Http\Controllers;

use App\Imports\BarangayImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class BarangayController extends Controller
{
    public function index() {
        return view('import.index');
    }

    public function import(Request $request) {
        // Validate File
        $request->validate([
            'import-file' => ['required', 'file']
        ]);

        Excel::import(new BarangayImport, $request->file('import-file'));

        return redirect()->back()->with('status', 'Imported Successfully');
    }
}

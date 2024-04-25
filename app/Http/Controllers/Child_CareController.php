<?php

namespace App\Http\Controllers;

use App\Imports\Child_CareImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class Child_CareController extends Controller
{
    public function index() {
        return view('childcare.index');
    }

    public function store(Request $request) {
        // Validate File
        $request->validate([
            'import-file' => ['required', 'file'],
        ]);

        Excel::import(new Child_CareImport(), $request->file('import-file'));

        return redirect()->back()->with('status', 'Imported Successfully');
    }
}

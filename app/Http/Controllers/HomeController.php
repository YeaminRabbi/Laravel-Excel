<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\UsersImport;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }


    function check()
    {
       // return Excel::download(new UsersExport, 'User-List.xlsx');
       return Excel::download(new UsersExport, 'User-List-Updated.xlsx');
    }


    public function import(Request $request) 
    {


        Excel::import(new UsersImport, $request->file('file'));
        
        return back();
    }

    function importView()
    {
        return view('import.import');
    }


    function exportView()
    {
        return view('exports.export_all_data');
    }

    function betweenDateView()
    {
        return view('exports.between_date');

    }

    function export(Request $request)
    {
       $from = $request->start;
       $to = $request->end;

      // return User::whereBetween('created_at', [$from,$to])->get();

       return Excel::download(new UsersExport($from,$to), 'User-List-Updated.xlsx');

    }
    
}

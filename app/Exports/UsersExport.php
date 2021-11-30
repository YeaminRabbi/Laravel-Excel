<?php

namespace App\Exports;

use App\User;
use App\Invoice;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
class UsersExport implements FromView
{

    public function __construct($from ,$to)
    {
        $this->from = $from;
        $this->to = $to;
    }
    public function view(): View
    {


        return view('exports.invoices', [
            //'invoices' => User::orderBy('id', 'DESC')->limit(10)->get()
           // 'invoices' => User::all()
           'invoices' => User::whereBetween('created_at', [$this->from,$this->to])->get()

        ]);
    }
}
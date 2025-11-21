<?php

namespace App\Exports;

use App\Models\Category;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromView;

class CategoryExport implements FromView
{
    use Exportable;

    public function view(): View
    {
        return view("exports.pdf", [
            "table" => "Categories",
            'data' => Category::all()
        ]);
    }
}

<?php

namespace App\Exports;

use App\Models\Product;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromView;

class ProductExport implements FromView
{
    use Exportable;

    public function view(): View
    {
        return view("exports.pdf", [
            "table" => "Products",
            'data' => Product::all()
        ]);
    }
}

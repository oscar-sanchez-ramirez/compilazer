<?php

namespace App\Exports;

use Illuminate\Support\Facades\Storage;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class ProductosExport implements FromView, ShouldAutoSize, WithStyles
{
    use Exportable;

    public function view(): View
    {
        $file_path = "/catalogo_xml/productos.json";
        $productos =  Storage::disk('ftp')->get($file_path);
        $new_file = 'productos.json';

        if (Storage::disk('public')->exists($new_file)) {
            Storage::disk('public')->delete($new_file);
        }

        Storage::disk('public')->put($new_file, $productos);

        $contenido = Storage::disk('public')->get($new_file);
        $datoss = json_decode($contenido, true);
        

        return view('productos.productos', [
            'datos' => $datoss
        ]);
    }


    public function styles(Worksheet $sheet){
        return [
            1 => ['font' => ['bold' => true]],
        ];
    }
}

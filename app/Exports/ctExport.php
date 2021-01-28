<?php

namespace App\Exports;

use Illuminate\Support\Facades\Storage;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class ctExport implements FromView, ShouldAutoSize, WithStyles
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

        $directory = public_path() . '/img';

        if (!is_dir($directory)) {
            mkdir($directory);
        }

        foreach ($datoss as $value) {
            $img = str_replace('"', "", $value['imagen']);
            $img_r = str_replace('http://ctonline.mx/img/productos/', "", $img);

            if (!file_exists($directory . '/' . $img_r)) {
                copy($img, $directory . '/' . $img_r);
            }
        }

        return view('productos.cata', [
            'datos' => $datoss
        ]);
    }


    public function styles(Worksheet $sheet)
    {
        return [
            1 => ['font' => ['bold' => true]],
        ];
    }
}

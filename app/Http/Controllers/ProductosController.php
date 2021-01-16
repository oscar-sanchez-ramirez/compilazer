<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ProductosExport;


class ProductosController extends Controller
{
    public function ftp()
    {
        $file_path = "/catalogo_xml/productos.json";


        $productos =  Storage::disk('ftp')->get($file_path);
        $new_file = 'productos.json';

        if (Storage::disk('public')->exists($new_file)) {
            Storage::disk('public')->delete($new_file);
        }

        Storage::disk('public')->put($new_file, $productos);

        $contenido = Storage::disk('public')->get($new_file);
        $datos = json_decode($contenido, true);

        
        return view('productos.index', compact('datos'));
    }

    public function excel()
    {
        return Excel::download(new ProductosExport(), 'productos.xlsx');
    }
}

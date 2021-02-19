<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ProductosExport;
use App\Exports\ctExport;


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

        $directory = public_path() . '/img';

        if (!is_dir($directory)) {
            mkdir($directory);
        }

        foreach ($datos as $value) {
            $img = str_replace('"', "", $value['imagen']);
            $img_r = str_replace('http://ctonline.mx/img/productos/', "", $img);

            if (!file_exists($directory . '/' . $img_r)) {
                copy($img, $directory . '/' . $img_r);
            }
        }


        return view('productos.index', compact('datos'));
    }

    public function ftpCo()
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

        $directory = public_path() . '/img';

        if (!is_dir($directory)) {
            mkdir($directory);
        }

        foreach ($datos as $value) {
            $img = str_replace('"', "", $value['imagen']);
            $img_r = str_replace('http://ctonline.mx/img/productos/', "", $img);

            if (!file_exists($directory . '/' . $img_r)) {
                copy($img, $directory . '/' . $img_r);
            }
        }


        return view('productos.inicio', compact('datos'));
    }

    public function excel()
    {
        return Excel::download(new ProductosExport(), date('d-m-Y').'-Productos-copilaser.csv');
    }

    public function ctExport()
    {
        return Excel::download(new ctExport(), date('d-m-Y').'-Productos-CT.xlsx');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;



class DataController extends Controller
{
    public function info()
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

        return datatables()->of($datos)->toJson();
    }
}

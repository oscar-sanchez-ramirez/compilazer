<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <table class="order-table table table-hover" cellspacing="0" width="100%" id="example2">
        <thead>
            <tr>
                <th scope="col" class="text-center">ID</th>
                <th scope="col" class="text-center">Clave</th>
                <th scope="col" class="text-center">NumParte</th>
                <th scope="col" class="text-center">Nombre</th>
                <th scope="col" class="text-center">Modelo</th>
                <th scope="col" class="text-center">ID Marca</th>
                <th scope="col" class="text-center">Marca</th>
                <th scope="col" class="text-center">ID Categoria</th>
                <th scope="col" class="text-center">Sub Categoria</th>
                <th scope="col" class="text-center">Protegido</th>
                <th scope="col" class="text-center">ID Sub Categoria</th>
                <th scope="col" class="text-center">Categoria</th>
                <th scope="col" class="text-center">Descripción Corta</th>
                <th scope="col" class="text-center">EAN</th>
                <th scope="col" class="text-center">UPC</th>
                <th scope="col" class="text-center">Sustituto</th>
                <th scope="col" class="text-center">Activo</th>
                <th scope="col" class="text-center">Existencia</th>
                <th scope="col" clas="text-center">Precio</th>
                <th scope="col" clas="text-center">Moneda</th>
                <th scope="col" clas="text-center">Tipo Cambio</th>
                <th scope="col" clas="text-center">Especificaciones</th>
                <th scope="col" clas="text-center">Promociones</th>
                <th scope="col" clas="text-center">Imagen</th>
            </tr>
        </thead>
        <tbody>
            @foreach($datos as $value)
            <tr>
                <td>{{ $value['idProducto'] }}</td>
                <td>{{ $value['clave'] }}</td>
                <td>{{ $value['numParte'] }}</td>
                <td>{{ $value['nombre'] }}</td>
                <td>{{ $value['modelo'] }}</td>
                <td>{{ $value['idMarca'] }}</td>
                <td>{{ $value['marca'] }}</td>
                <td>{{ $value['idCategoria'] }}</td>
                <td>{{ $value['subcategoria'] }}</td>
                <td>{{ $value['protegido'] }}</td>
                <td>{{ $value['idSubCategoria'] }}</td>
                <td>{{ $value['categoria'] }}</td>
                <td>{{ $value['descripcion_corta'] }}</td>
                <td>{{ $value['ean'] }}</td>
                <td>{{ $value['upc'] }}</td>
                <td>{{ $value['sustituto'] }}</td>
                <td>{{ $value['activo'] }}</td>
                <td>
                    @foreach($value['existencia'] as $key => $contenido)
                    <p>{{ $key }}: {{ $contenido }}</p>
                    @endforeach
                </td>
                <td>{{ $value['precio'] }}</td>
                <td>{{ $value['moneda'] }}</td>
                <td>{{ $value['tipoCambio'] }}</td>
                <td>
                    @foreach($value['especificaciones'] ?? [] as $val2)
                    <?php
                    $tipo = json_encode($val2['tipo'], JSON_UNESCAPED_UNICODE);
                    $val3 = json_encode($val2['valor'], JSON_UNESCAPED_UNICODE);
                    ?>
                    <p>Tipo: {{ $tipo }}, Valor: {{ $val3 }}</p>
                    @endforeach
                </td>
                <td>
                    @foreach($value['promociones'] ?? [] as $val3)
                    <?php
                    $tipo = json_encode($val3['tipo'], JSON_UNESCAPED_UNICODE);
                    $val2 = json_encode($val3['promocion'], JSON_UNESCAPED_UNICODE);

                    ?>
                    <p>Tipo: {{ $tipo }}, Promoción: {{ $val2 }}</p>
                    @foreach($val3['vigencia'] as $key => $contenido)
                    <p class="text-capitalize">{{ $key }}: {{ $contenido }}</p>
                    @endforeach
                    @endforeach
                </td>
                <td>
                    <?php $img = str_replace('"', "", $value['imagen']);
                    $img_r = str_replace('http://ctonline.mx/img/productos/', "", $img);
                    ?>
                    <?= 'https://copilaser.com.mx/WS/public/img/'.$img_r ?>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>


</body>

</html>

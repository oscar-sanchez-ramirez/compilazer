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
                <th scope="col" class="text-center">id</th>
                <th scope="col" class="text-center">type</th>
                <th scope="col" class="text-center">sku</th>
                <th scope="col" class="text-center">name</th>
                <th scope="col" clas="text-center">category_ids</th>
                <th scope="col" class="text-center">short_description</th>
                <th scope="col" class="text-center">description</th>
                <th scope="col" class="text-center">weight</th>
                <th scope="col" class="text-center">height</th>
                <th scope="col" clas="text-center">price</th>
                <th scope="col" clas="text-center">regular_price</th>
                <th scope="col" clas="text-center">image_id/gallery_image_ids</th>
            </tr>
        </thead>
        <tbody>
            @foreach($datos as $value)
            <tr>
                <td>{{ $value['idProducto'] }}</td>
                <td></td>
                <td>{{ $value['clave'] }}</td>
                <td>{{ $value['nombre'] }}</td>
                <td>
                    @switch( $value['categoria'] )

                    @case('Accesorios para Componentes')
                    @case('Apple')
                    @case('MacBook')
                    @case('iPad')
                    @case('iMac')
                    @case('Computadoras')
                    @case('Laptop')
                    @case('Pc Escritorio')
                    @case('All in one')
                    @case('Tabletas')
                    @case('Workstations')

                    @case('Accesorios para Cómputo')
                    @case('Computadoras Gaming')

                    @case('Accesorios para Servidores')
                    @case('Centro de Datos')
                    @case('Solucion para servidores')

                    {{ __('Computadoras') }}
                    @break

                    @case('Video Vigilancia')
                    @case('Sistemas de Control')
                    @case('Seguridad Inteligente')
                    @case('Seguridad')

                    @case('Soluciones de Seguridad Inteligente')

                    {{ __('Seguridad') }}
                    @break

                    @case('Accesorios para Componentes')
                    @case('Ensamble')
                    @case('Tarjetas para Telefonía')
                    @case('Tarjetas')
                    {{ __('Componentes') }}
                    @break

                    @case('Consumibles')
                    @case('Accesorios para Impresión')
                    @case('Impresión')
                    @case('Digitalización de Imágenes')
                    {{ __('Impresión') }}
                    @break

                    @case('Accesorios para Electronica')
                    @case('Almacenamiento Portatil')
                    @case('Accesorios Gaming')
                    @case('Señalización Digital')
                    @case('Audio')
                    @case('Auriculares y Diademas')
                    @case('Electrónica')
                    @case('Línea Blanca')
                    {{ __('Electrónica') }}
                    @break

                    @case('Cables')
                    @case('Adaptadores')
                    @case('Comunicaciones')
                    @case('Teléfonos')
                    @case('Conmutadores PBX')
                    @case('Conferencias')
                    {{ __('Conectividad') }}
                    @break

                    @case('Perifericos para POS')
                    @case('Accesorios y Consumibles POS')
                    @case('Credencialización')
                    @case('Sistema para puntos de venta')

                    {{ __('Punto de Venta') }}
                    @break


                    @case('Sistemas Contables')
                    @case('Sistema para puntos de venta')
                    @case('Licenciamiento')
                    @case('Sistemas Operativos')
                    @case('Productividad')
                    @case('Software Administrativo')
                    @case('Seguridad Electrónica')

                    {{ __('Software') }}
                    @break

                    @case('Energia Solar y Eolica')
                    @case('Domotica')
                    @case('Accesorios para Energía')
                    @case('Respaldo y Regulación')
                    @case('Accesorios para Energía')
                    @case('Baterías Banks')

                    @case('Modulos Supresores')

                    {{ __('Energía') }}
                    @break

                    @case('Almacenamiento')
                    @case('Red Pasiva ')
                    @case('Red Activa ')
                    @case('Red Activa')
                    @case('Redes')
                    {{ __('Data Center') }}
                    @break

                    <!-- Accesorios y Salud -->

                    @default
                    {{ __('Otros') }}

                    @endswitch
                </td>
                <td>{{ $value['descripcion_corta'] }}</td>
                <td>
                    <p>Modelo: {{ $value['modelo'] }}</p>
                    <p>NumParte: {{ $value['numParte'] }}</p>
                    <p>Marca: {{ $value['marca'] }}</p>
                </td>
                <td></td>
                <td></td>
                <td>
                    <?php $precio = ($value['precio'] * $value['tipoCambio']) ?>
                    {{ $precio }}
                </td>
                <td>
                    <?php $precio = ($value['precio'] * $value['tipoCambio']) ?>
                    {{ $precio }}
                </td>
                <td>
                    <?php $img = str_replace('"', "", $value['imagen']);
                    $img_r = str_replace('http://ctonline.mx/img/productos/', "", $img);
                    ?>
                    <?= 'https://copilaser.com.mx/WS/public/img/' . $img_r ?>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>


</body>

</html>

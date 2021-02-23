@extends('layouts.home')
@section('content')
    <style>
        .outer-loader {
            width: auto;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;

        }

        .inner-loader-img {
            text-align: center;
            background: url('logos/loader.gif') no-repeat center;
            background-size: contain;
            height: 40%;
            width: 40%;
        }

        .parrafo {
            position: relative;
            top: 35%;
            transform: translateY(-50%);
            padding: 35px;
            font-weight: bold;
            font-size: 1.9rem;
            margin-top: 100px;
        }

    </style>

    <div class="container">

        <div class="outer-loader">
            <div class="inner-loader-img">
                <p class="parrafo text-primary">Por favor espere</p>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <b class="lead font-weight-bold text-primary"> Catálogo de productos de (Copiláser y CT)</b>
                        <div class="row justify-content-end p-3">
                            <!-- <a href="" class="btn btn-sm btn-success"><i class="fas fa-download"></i></i> Descargar Excel</a> -->
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="order-table table table-hover" cellspacing="0" width="100%" id="tabla1">
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
                                @foreach ($datos as $value)
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

                                                @case('Computadoras Gaming')

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

                                                @case('Accesorios para Servidores')
                                                @case('Centro de Datos')
                                                @case('Solucion para servidores')

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
                                            <?php $precio = $value['precio'] * $value['tipoCambio']; ?>
                                            {{ $precio }}
                                        </td>
                                        <td>
                                            <?php $precio = $value['precio'] * $value['tipoCambio']; ?>
                                            {{ $precio }}
                                        </td>
                                        <td>
                                            <?php
                                            $img = str_replace('"', '', $value['imagen']);
                                            $img_r = str_replace('http://ctonline.mx/img/productos/', '', $img);
                                            ?>
                                            <a href="<?= 'public/img/' . $img_r ?>" target="_blank">imagen</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


@endsection
@section('datatable')
            <script>
                $(document).ready(function() {
                    $('#tabla1').DataTable({
                        "paging": true,
                        "lengthChange": true,
                        "searching": true,
                        "ordering": true,
                        "info": true,
                        "autoWidth": false,
                        "responsive": true,
                        "order": [
                            [0, 'desc']
                        ],
                        language: {
                            search: "Buscar:",
                            "lengthMenu": "Recorrer _MENU_ registros por página",
                            "zeroRecords": "No hay resultados",
                            "info": "Página _PAGE_ de _PAGES_",
                            "infoEmpty": "No hay registros disponibles ",
                            "infoFiltered": "(filtrado de _MAX_ registros totales)",
                            paginate: {
                                first: "Primera",
                                previous: "Primera",
                                next: "Última",
                                last: "Último"
                            },
                        }
                    });
                });
            </script>
            <script type="text/javascript">
                $(window).on('load', function() {
                    $('.outer-loader').delay(1000).fadeOut('slow');
                    $('.mover').delay(1000).fadeOut('slow');
                });
            </script>
@endsection

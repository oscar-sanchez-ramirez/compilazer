@extends('layouts.home')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <b class="lead font-weight-bold text-primary"> Productos Copiláser</b>
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
                                <th scope="col" class="text-center">status</th>
                                <th scope="col" class="text-center">featured</th>
                                <th scope="col" class="text-center">catalog_visibility</th>
                                <th scope="col" class="text-center">short_description</th>
                                <th scope="col" class="text-center">description</th>
                                <th scope="col" class="text-center">date_on_sale_from</th>
                                <th scope="col" class="text-center">date_on_sale_to</th>
                                <th scope="col" class="text-center">tax_status</th>
                                <th scope="col" class="text-center">tax_class</th>
                                <th scope="col" class="text-center">stock_status</th>
                                <th scope="col" class="text-center">backorders</th>
                                <th scope="col" class="text-center">sold_individually</th>
                                <th scope="col" class="text-center">weight</th>
                                <th scope="col" class="text-center">height</th>
                                <th scope="col" clas="text-center">reviews_allowed</th>
                                <th scope="col" clas="text-center">purchase_note</th>
                                <th scope="col" clas="text-center">price</th>
                                <th scope="col" clas="text-center">regular_price</th>
                                <th scope="col" clas="text-center">manage_stock/stock_quantitiy</th>
                                <th scope="col" clas="text-center">category_ids</th>
                                <th scope="col" clas="text-center">tag_ids</th>
                                <th scope="col" clas="text-center">shipping_class_id</th>
                                <th scope="col" clas="text-center">attributes</th>
                                <th scope="col" clas="text-center">attributes</th>
                                <th scope="col" clas="text-center">default_attributes</th>
                                <th scope="col" clas="text-center">attributes</th>
                                <th scope="col" clas="text-center">image_id/gallery_image_ids</th>
                                <th scope="col" clas="text-center">attributes</th>
                                <th scope="col" clas="text-center">downloads</th>
                                <th scope="col" clas="text-center">downloads</th>
                                <th scope="col" clas="text-center">download_limit</th>
                                <th scope="col" clas="text-center">download_expiry</th>
                                <th scope="col" clas="text-center">parent_id</th>
                                <th scope="col" clas="text-center">upsell_ids</th>
                                <th scope="col" clas="text-center">cross_sell_ids</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($datos as $value)
                            <tr>
                                <td>{{ $value['idProducto'] }}</td>
                                <td></td>
                                <td>{{ $value['clave'] }}</td>
                                <td>{{ $value['nombre'] }}</td>
                                <td>{{ $value['activo'] }}</td>
                                <td></td>
                                <td>
                                    @foreach($value['existencia'] as $key => $contenido)
                                    <p>{{ $key }}: {{ $contenido }}</p>
                                    @endforeach
                                </td>
                                <td>{{ $value['descripcion_corta'] }}</td>
                                <td>
                                    <p>Modelo: {{ $value['modelo'] }}</p>
                                    <p>NumParte: {{ $value['numParte'] }}</p>
                                    <p>Marca: {{ $value['marca'] }}</p>
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    @foreach($value['promociones'] ?? [] as $val3)
                                    <?php
                                    $tipo = json_encode($val3['tipo'], JSON_UNESCAPED_UNICODE);
                                    $val2 = json_encode($val3['promocion'], JSON_UNESCAPED_UNICODE);

                                    ?>
                                    <p>Tipo: {{ $tipo }}, Promoción: {{ $val2 }}</p>
                                    @foreach($val3['vigencia'] as $key => $contenido)
                                    <p>{{ $key }}: {{ $contenido }}</p>
                                    @endforeach
                                    @endforeach
                                </td>
                                <td>{{ $value['precio'] }}</td>
                                <td></td>
                                <td>
                                    <p>{{ $value['idCategoria'] }}</p>
                                    <p>{{ $value['categoria'] }}</p>
                                    <p>{{ $value['idSubCategoria'] }}</p>
                                </td>
                                <td></td>
                                <td></td>
                                <td>
                                    @foreach($value['especificaciones'] ?? [] as $val2)
                                    <?php
                                    $tipo = json_encode($val2['tipo'], JSON_UNESCAPED_UNICODE);
                                    $val3 = json_encode($val2['valor'], JSON_UNESCAPED_UNICODE);
                                    ?>
                                    <p>Tipo: {{ $tipo }}, Valor: {{ $val3 }}</p>
                                    @endforeach
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <?php $img = str_replace('"', "", $value['imagen']);
                                    $img_r = str_replace('http://ctonline.mx/img/productos/', "", $img);
                                    ?>
                                    <a href="<?= 'img/' . $img_r ?>" target="_blank">imagen</a>
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
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
@endsection
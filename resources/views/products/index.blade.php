@extends('layout.app')

@section('title', 'Lista de Productos')
@section('header')
    <h2 class="text-center">Lista de Productos</h2>
@endsection

@section('content')
    <style>
        table#products-table.dataTable thead th {
            background-color: #631313;
            color: white;
            font-weight: bold;
            text-align: center;
        }

        table#products-table.dataTable tbody td {
            text-align: center background-color: #ffffff;
            color: #333;
            font-size: 14px;
            text-align: center;
        }

        .btn-primary {
            background-color: #631313;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>

    <div class="row">
        <table id='products-table' class="table table-striped table-hover" width="80%">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th>Existencias</th>
                    <th>Categoría</th>
                    <th>Creado el</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($allProducts as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->description }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->stock }}</td>
                        <td>{{ $product->category }}</td>
                        <td>{{ $product->created_at }}</td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>
    <div class="row">
        <div class="col-md-12" style="text-align:center;">
            <a href="{{ route('products.create') }}" class="btn btn-primary">Agregar Producto</a>
        </div>
    </div>

@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('#products-table').DataTable({
                "language": {
                    "decimal": "",
                    "emptyTable": "No hay datos disponibles en la tabla",
                    "info": "Mostrando _START_ a _END_ de _TOTAL_ registros",
                    "infoEmpty": "Mostrando 0 a 0 de 0 registros",
                    "infoFiltered": "(filtrado de _MAX_ registros en total)",
                    "lengthMenu": "Mostrar _MENU_ registros",
                    "loadingRecords": "Cargando...",
                    "processing": "Procesando...",
                    "search": "Buscar:",
                    "zeroRecords": "No se encontraron resultados",
                    "paginate": {
                        "first": "Primero",
                        "last": "Último",
                        "next": "Siguiente",
                        "previous": "Anterior"
                    },
                    "aria": {
                        "sortAscending": ": Activar para ordenar la columna de manera ascendente",
                        "sortDescending": ": Activar para ordenar la columna de manera descendente"
                    }
                }
            });

            @if(session('success'))
                Swal.fire({
                    icon: 'success',
                    title: '¡Éxito!',
                    text: '{{ session('success') }}',
                    confirmButtonText: 'Aceptar'
                });
            @endif
        });
    </script>
@endsection

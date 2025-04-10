@extends('layout.app')

@section('title', 'Agregar Nuevo Producto')
@section('header')
    <h2 class="text-center">Agregar Nuevo Producto</h2>
@endsection

@section('content')
    <style>
        .btn-primary {
            background-color: #631313;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        label {
            font-weight: bold;
        }

        input {
            text-align: center
        }
    </style>

    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('products.store') }}" method="POST">
                @csrf
                {{-- @method('PUT') --}}

                <div class="panel panel-default"
                    style="padding: 20px; border-radius: 20px; display: flex; flex-direction: column; text-align: center; ">
                    <div class='row'>
                        <div class='col-md-12'>
                            <label for="name">Nombre del Producto: </label><br>
                            <input id='name' type="text" name="name" placeholder="Nombre del producto" required>
                        </div>
                    </div>
                    <br>
                    <div class='row'>
                        <div class='col-md-12'>
                            <label for="description">Descripción del Producto: </label><br>
                            <input id='description' type="text" name="description" placeholder="Descripción del producto"
                                required>
                        </div>
                    </div>
                    <br>
                    <div class='row'>
                        <div class='col-md-12'>
                            <label for="price">Precio del producto: </label><br>
                            <input id='price' type="number" name="price" placeholder="Precio del producto" required>
                        </div>
                    </div>
                    <br>
                    <div class='row'>
                        <div class='col-md-12'>
                            <label for="stock">Cantidad en existencia: </label><br>
                            <input id='stock' type="number" name="stock" placeholder="Cantidad en existencia"
                                required>
                        </div>
                    </div>
                </div>

                <div class='col-md-12' style="display: flex; justify-content: center;">
                    <input type="submit" value="Agregar Producto" class="btn btn-primary col-md-3" style='margin: 10px;'>
                    <a href="{{ route('products.index') }}" class="btn btn-secondary col-md-3"
                        style='margin: 10px;'>Regresar</a>
                </div>
            </form>
        </div>
    </div>
@endsection

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>layout</title>

    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.css">

    <style>
        .table {
            display: flex;
            text-align: center;
            justify-content: center;

        }

        .panel {
            background-color: #CECECE;
            border-radius: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 20px;
            padding: 20px;
        }

        .panel-heading {
            display: flex;
            justify-content: center;
            padding: 10px;
            border-radius: 5px 5px 0 0;
        }
    </style>
</head>

<body>
    <div class="container">

        <div class='panel panel-default'>
            <div class='panel-heading'>
                <h2>Lista de Productos</h2>
            </div>

            <div class="panel-body">
                <div class="row">
                    <table class="table table-striped table-hover" width="80%">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Nombre</th>
                                <th>Descripción</th>
                                <th>Precio</th>
                                <th>Existencias</th>
                                <th>Categoría</th>
                            </tr>
                        </thead>

                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>


</body>

</html>

<script src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>

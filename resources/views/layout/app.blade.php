<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="../node_modules/datatables.net-dt/css/dataTables.dataTables.css">
    <link rel="stylesheet" href="../node_modules/sweetalert2/dist/sweetalert2.css">

    <style>
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
                @yield('header')
            </div>

            <div class="panel-body">
                @yield('content')
            </div>
        </div>
    </div>



    <script src="../node_modules/jquery/dist/jquery.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <script src="../node_modules/datatables.net/js/dataTables.js"></script>
    <script src="../node_modules/sweetalert2/dist/sweetalert2.all.js"></script>

    @yield('scripts')

</body>

</html>

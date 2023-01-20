<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>


<nav class="navbar navbar-primary">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="">CRUD</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="<?php echo base_url('welcome/index')?>">Home</a></li>
            <li><a href="<?php echo base_url('')?>">Listar</a></li>
            <li><a href="#">Page 2</a></li>
            <li><a href="#">Page 3</a></li>
        </ul>
    </div>
</nav>

<body>

    <div class="container">
        <h2>Basic Table</h2>
        <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Acciones j</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Music manager</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
    .pagination {
        margin-top: 20px;
    }

    .pagination li {
        display: inline-block;
        margin-right: 5px;
    }

    .pagination li a {
        color: #000;
        text-decoration: none;
        display: inline-block;
        padding: 5px 10px;
        border: 1px solid #ccc;
    }

    .pagination li.active a {
        background-color: #007bff;
        color: #fff;
        border-color: #007bff;
    }

    .pagination li a:hover {
        background-color: #007bff;
        color: #fff;
        border-color: #007bff;
    }

    .pagination .disabled a {
        color: #aaa;
        pointer-events: none;
        background-color: #fff;
        border-color: #ccc;
    }

    .card-header {
        background-color: #f5f5f5;
        border-bottom: none;
    }

    .card-body {
        background-color: #fff;
        border: 1px solid #dee2e6;
        border-top: none;
        padding: 20px;
    }

    .col-form-label {
        text-align: right;
        padding-top: 8px;
    }

    button[type="submit"] {
        background-color: #007bff;
        border-color: #007bff;
    }

    button[type="submit"]:hover {
        background-color: #0069d9;
        border-color: #0062cc;
    }

</style>

<body>
    <div class="container mt-5">
        
        @yield('content')

    </div>

</body>

</html>
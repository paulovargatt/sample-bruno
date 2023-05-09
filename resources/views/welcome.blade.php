<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Crud Users</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>
    <style>
        body {
            font-family: 'Figtree', sans-serif;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        a {
            color: black;
            text-decoration: none;
            font-size: 1.5rem;
        }

        a:hover {
            border-bottom: 1px solid black;
        }

        h1 {
            text-align: center;
        }

        table, form {
            margin: 0 auto;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        ul {
            display: flex;
            margin: 0 auto;
            align-items: center;
            justify-content: center;
            gap: 2rem;
        }

        nav {
            background: #f2f2f2;
            padding: 16px;
            box-shadow: 0px 0px 8px #d5d3d3;
        }

        li {
            list-style: none;
        }
        .container{
            max-width: 900px;
            margin: 0 auto;
            padding: 16px;
        }
        .text-danger{
            padding: 12px;
            display: flex;
            background: #ffdddd;
            margin-top: 10px;
            border-radius: 5px;
            font-weight: 300;
        }
        .btn{
            padding: 7px;
            border: 0;
            font-size: 0.9em;
            margin: 0 5px;
            border-radius: 3px;
        }
        .btn-edit{
            background: #beb8b8;
        }
        .btn-del{
            background: #F44336;
            color: #fff;
        }
        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .form-group button {
            padding: 10px 20px;
            background-color: #868686;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .form-group button:hover {
            background-color: #0056b3;
        }
    </style>
    @yield('style')
</head>
<body>
<div class="content">
    <header>
        <nav>
            <ul>
                <li>
                    <a href="{{route('users.index')}}">Home</a>
                </li>
                <li>
                    <a href="{{route('users.create')}}">Novo Usuário</a>
                </li>
            </ul>
        </nav>
    </header>
    <div class="container">
        @yield('content')
    </div>
</div>
</body>
@yield('script')
</html>

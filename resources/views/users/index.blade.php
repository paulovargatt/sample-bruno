@extends('welcome')

@section('content')
    <h1>Listagem de Usuários</h1>
    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Data de Nascimento</th>
            <th>Ações</th>
        </tr>
        </thead>
        <tbody>
        @forelse($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ \Carbon\Carbon::create($user->birthday)->diffForHumans() }}</td>
                <td>
                    <a class="btn btn-edit" href="{{route('users.edit', [$user])}}">Editar</a>
                    <a class="btn btn-del" href="{{route('user.delete', [$user])}}">Deletar</a>
                </td>
            </tr>
        @empty
            <p>Sem usuários cadastrados ainda.</p>
        @endforelse
        </tbody>
    </table>
@endsection

@section('style')
    <style>
        body {
            font-family: Arial, sans-serif;
        }



        table {
            margin-top: 35px;
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #333333;
            color: white;
        }
    </style>
@endsection

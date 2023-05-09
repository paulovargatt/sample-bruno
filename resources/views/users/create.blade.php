@extends('welcome')

@section('content')
    <h1>Formulário de Usuário</h1>
    <form action="{{route('users.store')}}" method="POST">
        @csrf
        @include('users.form')
    </form>
@endsection



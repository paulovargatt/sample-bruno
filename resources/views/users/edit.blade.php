@extends('welcome')

@section('content')
    <h1>Edição de Usuário</h1>
    <form action="{{route('users.update', [$user])}}" method="POST">
        @csrf
        @method('PUT')
        @include('users.form')
    </form>
@endsection



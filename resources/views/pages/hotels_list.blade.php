@extends('layout')

@section('conteudo')
    <ul class="list-group mt-4">
        @foreach($hotels as $hotel)
            <li class="list-group-item"><?= $hotel->getName(); ?></li>
        @endforeach
    </ul>
@endsection

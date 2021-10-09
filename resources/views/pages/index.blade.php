@extends('layout')

@section('conteudo')
    <form action="/search" method="get" class="mt-4">
        <div class="mb-3">
            <label for="latitude" class="form-label">Latitude</label>
            <input type="number" class="form-control" id="latitude" name="latitude" placeholder="Write your latitude">
        </div>
        <div class="mb-3">
            <label for="longitude" class="form-label">Longitude</label>
            <input type="number" class="form-control" id="longitude" name="longitude" placeholder="Write your longitude">
        </div>
        <button type="submit" class="btn btn-primary">Search</button>
    </form>
@endsection

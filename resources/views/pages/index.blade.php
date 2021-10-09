@extends('layout')

@section('conteudo')
    <form action="/search" method="get" class="mt-4">
        <div class="mb-3">
            <label for="latitude" class="form-label">Latitude</label>
            <input type="number" required class="form-control" id="latitude" name="latitude" placeholder="Write your latitude">
        </div>
        <div class="mb-3">
            <label for="longitude" class="form-label">Longitude</label>
            <input type="number" required class="form-control" id="longitude" name="longitude" placeholder="Write your longitude">
        </div>
        <div class="mb-3">
            <label for="order">Order by:</label>
            <select class="form-select" id="order" name="order">
                <option selected value="">Select a option</option>
                <option value="price">Price</option>
                <option value="distance">Distance</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Search</button>
    </form>
@endsection

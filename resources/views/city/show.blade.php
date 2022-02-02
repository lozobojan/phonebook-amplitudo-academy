@extends("layout")

@section("page-title", "Cities - $city->name")

@section("main-content")

    <p>ID: {{ $city->id }}</p>
    <p>Name: {{ $city->name }}</p>

@endsection

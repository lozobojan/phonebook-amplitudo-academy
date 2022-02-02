@extends("layout")

@section("page-title", "Edit city")

@section("main-content")

    <form action="{{ route("city.update", ['city' => $city->id]) }}" method="POST">
        @csrf
        @method("PUT")
        <input type="text" name="name" placeholder="Name..." value="{{ $city->name }}" >
        <button>Save</button>
    </form>

@endsection

@extends("layout")

@section("page-title", "New city")

@section("main-content")

    <form action="{{ route("city.store") }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Name..." value="{{ old('name') }}">
        <button>Save</button>

        <br>
        @if($errors->any())
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        @endif
    </form>

@endsection

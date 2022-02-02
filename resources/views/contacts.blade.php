@extends("layout")

@section("page-title", "Contacts")

@section('main-content')

    @if($status)
        <h3>Uspjesno</h3>
    @else
        <h3>Neuspjesno</h3>
    @endif

    <ul>
        @foreach($contacts as $contact)
            <li> <a href="{{ route("single-contact", ["id" => $contact['id']]) }}">{{ $contact['name'] }}</a> - {{ $contact['phone'] }}</li>
        @endforeach
    </ul>

    <a href="{{ route('welcome') }}">go to welcome screen...</a>

@endsection
@extends("layout")

@section("page-title", "Cities")

@section("main-content")

    <table border="1" >
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>

        <tbody>
            @foreach($cities as $city)
                <tr>
                    <td>{{ $city->id }}</td>
                    <td>
                        <a href="{{ route("city.show", ['city' => $city->id]) }}">{{ $city->name }}</a>
                    </td>
                    <td>
                        <a href="{{ route("city.edit", ['city' => $city->id]) }}">edit</a>
                    </td>
                    <td>
                        <form action="{{ route("city.destroy", ['city' => $city->id]) }}" method="POST">
                            @csrf
                            @method("DELETE")
                            <button>delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route("city.create") }}">new city</a>

@endsection

@extends('component.app')

@section('content')
    <h1>List Costume</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Cosplayer ID</th>
                <th>Outfit Name</th>
                <th>Size</th>
                <th>Stock</th>
                <th>Rental Date</th>
                <th>Return Date</th>
                <th>Is Return</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($outfit as $cosplay)
                <tr>
                    <td>{{ $cosplay->id }}</td>
                    <td>{{ $cosplay->outfit_name }}</td>
                    <td>{{ $cosplay->size }}</td>
                    <td>{{ $cosplay->stock }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

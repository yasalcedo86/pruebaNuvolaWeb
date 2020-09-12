
@extends('navegacion')

@section('titulo', 'Viajes')

@section('contenido')
<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
        <tr>
            <th>#</th>
            <th>fecha del viaje</th>
            <th>pais</th>
            <th>ciudad</th>
            <th>email</th>
        </tr>
        </thead>
        <tbody>
            @if ($unico)
                @foreach($viajes as $data)
                <tr>
                    <td>{{ $data['id'] }}</td>
                    <td>{{ $data['fecha_viaje'] }}</td>
                    <td>{{ $data['pais'] }}</td>
                    <td>{{ $data['ciudad'] }}</td>
                    <td>{{ $data['email'] }}</td>
                </tr>
            @endforeach
            @else
                @foreach($viajes['data'] as $data)
                    <tr>
                        <td>{{ $data['id'] }}</td>
                        <td>{{ $data['fecha_viaje'] }}</td>
                        <td>{{ $data['pais'] }}</td>
                        <td>{{ $data['ciudad'] }}</td>
                        <td>{{ $data['email'] }}</td>
                    </tr>
                @endforeach
            @endif


        </tbody>
    </table>
    </div>
@endsection

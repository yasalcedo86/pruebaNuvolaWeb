
@extends('navegacion')

@section('titulo','Clientes')
{{-- @php
    echo('<pre>');
    var_dump($cliente);
    echo('</pre>');

@endphp --}}

@section('contenido')
<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
        <tr>
            <th>#</th>
            <th>nombre</th>
            <th>telefono</th>
            <th>email</th>
            <th>direccion</th>
            <th>foto</th>
            <th>acciones</th>
        </tr>
        </thead>
        <tbody>
            @foreach($cliente['data'] as $data)
            <tr>
                <td>{{ $data['id'] }}</td>
                <td>{{ $data['nombre'] }}</td>
                <td>{{ $data['telefono'] }}</td>
                <td>{{ $data['email'] }}</td>
                <td>{{ $data['direccion'] }}</td>
            <td> <a href="{{ env('API_ENDPOINT_FOTOS') . $data['foto'] }}" target="_blank">{{ $data['foto'] }}</a></td>
                <td>
                    <a href="{{ url("viajes/{$data['email']}") }}">Viajes</a>
                    <a href="{{ url("clientes/eliminar/{$data['id']}") }}">Eliminar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{-- <nav aria-label="...">
        <ul class="pagination">
            @foreach ($cliente['links'] as $links)
                <li class="page-item {{ $links['active'] ? 'active' : '' }}">
                <a class="page-link" href="{{ $links['url'] }}" tabindex="-1">{{ $links['label'] }}</a>
                </li>
            @endforeach
        </ul>
      </nav> --}}

    </div>
@endsection

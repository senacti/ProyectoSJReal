@extends('layouts.app')
@section('content')
    <table>
        <caption>Tabla de huespedes <a href="{{ route('guest.create') }}">Agregar</a></caption>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Documento</th>
                <th>Numero doc</th>
                <th>Origen</th>
                <th>Teléfono</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            @forelse($guests as $guest)
                <tr>
                    <td>{{$guest->name_guest}}</td>
                    <td>{{$guest->lastname_guest}}</td>
                    <td>{{$guest->doc_guest}}</td>
                    <td>{{$guest->num_doc_guest}}</td>
                    <td>{{$guest->origin_guest}}</td>
                    <td>{{$guest->phone_guest}}</td>
                    <td>
                        <a href="{{route('guest.edit', ['guest' => $guest->id])}}">
                            <span  class="material-symbols-outlined">
                                edit
                            </span>
                        </a>
                    </td>
                    <td>
                        <form action="{{ route('guest.destroy', $guest) }}" method="POST">
                            @csrf 
                            @method('DELETE')
                            <input type="submit" value="Eliminar" class="material-symbols-outlined cursor-pointer">
                        </form>
                    </td>
                </tr>
            @empty
                <p>No se encontró la información solicitada</p>
            @endforelse

        </tbody>
    </table>
@endsection


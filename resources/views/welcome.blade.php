@extends('layouts\main')

@section('contenido')
    <h2>Contenido Prueba</h2>

    <hr>
    <select name="" id="select2" class="form-select">
        <option value="1">hola</option>
        <option value="2">mexico</option>
        <option value="3">mesa</option>
    </select>
    <hr>

    <div class="container">
        <div class="row">
            <div class="col">
                <table>
                    <thead>
                        <th>ID</th>
                        <th>Nombre</th>
                    </thead>
                    <tbody>
                        @foreach ($Categorias as $item)
                        <tr>
                            <td>{{$item->id_categoria}}</td>
                            <td>{{$item->nombre}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
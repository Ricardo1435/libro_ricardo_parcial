@extends('layouts.main')
@section('content')
    <div class="container mt-4">
        <div class="card border-info">
            <div class="card-header bg-info text-white">
                <div class="navbar">
                    <a class="btn btn-light" value="Nuevo" href="{{route('libroRegister')}}">Nuevo</a>
                </div>
            </div>
            <div class="card-body">
                <!-- Tabla-->
                <div class="p-4">
                    <table class="table table-striped table-bordered m-auto">
                        <thead class="thead-dark" >
                        <tr>
                            <th colspan="7"><h5><center>LIBROS</center></h5></th>
                        </tr>
                        <tr>
                            <th scope="col"><center>ID</center></th>
                            <th scope="col"><center>ISBN</center></th>
                            <th scope="col"><center>TITULO</center></th>
                            <th scope="col"><center>FECHA</center></th>
                            <th scope="col"><center>EDICION</center></th>
                            <th scope="col"><center>DESCRIPCION</center></th>
                            <th scope="col"><center>EDITORIAL</center></th>
                        </tr>
                        </thead>
                        <tbody id="tabla">
                        <!-- Aqui va el metodo for each -->
                        @foreach($libros as $libro)
                            <tr>
                                <th scope="row">{{$libro->id}}</th>
                                <td>{{$libro->isbn}}</td>
                                <td>{{$libro->titulo}}</td>
                                <td>{{$libro->fecha}}</td>
                                <td>{{$libro->edicion}}</td>
                                <td>{{$libro->descripcion}}</td>
                                <td>{{$libro->editorial_id}}</td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
@endsection

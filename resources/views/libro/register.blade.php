@extends('layouts.main')
@section('content')
    <div class="container md mt-2 col-lg-5">
        <div class="card border-info">
            <div class="card-header bg-info text-white">
                <center><h2 class="mt-2 mb-2"> AGREGAR LIBRO &nbsp;<i class="fas fa-pen-alt"></i></h2> </center>
            </div>
            <div class="card-body">
                <!-- Formulario -->
                <form action="{{route('libroCreate')}}" method="POST">
                    @csrf
                    @method('POST')
                    <div>
                        <b><label for="isbn" class="mt-2">ISBN</label></b>
                        <input type="text" class="form-control" autocomplete="off" name="isbn" placeholder="" maxlength="75" required>
                    </div>
                    <div>
                        <b><label for="name" class="mt-2">TITULO</label></b>
                        <input type="text" class="form-control" autocomplete="off" name="titulo" placeholder="" maxlength="75" required>
                    </div>
                    <div>
                        <b><label for="address" class="mt-2">FECHA</label></b>
                        <input type="date" class="form-control" autocomplete="off" name="fecha" placeholder="" maxlength="250" required>
                    </div>
                    <div>
                        <b><label for="edicion" class="mt-2">EDICION</label></b>
                        <input type="text" class="form-control" autocomplete="off" name="edicion" placeholder="" maxlength="25" required>
                    </div>
                    <div>
                        <b><label for="descripcion" class="mt-2">DESCRIPCION</label></b>
                        <input type="text" class="form-control" autocomplete="off" name="descripcion" placeholder="" maxlength="25" required>
                    </div>
                    <div>
                        <b><label for="category_id" class="mt-2">EDITORIAL</label></b>
                        <select class="custom-select" name="editorial_id" id="editorial_id" required>
                            <option>--Seleccione una opcion--</option>
                            @foreach($editoriales as $editorial)
                                 <option value="{{$editorial->id}}">{{$editorial->nombre}}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary my-3" id="btnGuardar" name="accion" value="Guardar">Guardar </button>
                    <a href="{{route('libroIndex')}}"> <input type="button" value="Cancelar" class="btn btn-danger" id="btnCancelar"></a>
                </form>
            </div>
        </div>
    </div>
@endsection

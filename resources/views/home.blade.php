@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">¿En qué estas pensando ahora?</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="">
                        <div class="form-group">
                            <label for="thought"> Ahora estoy pensando en:</label>
                            <input type="text" class="form-control" name="thought">
                        </div>
                        <button type="submit" class="btn btn-primary">
                            Enviar pensamiento    
                        </button>
                    </form>
                </div>
            </div>
            <div class="card">
                    <div class="card-header">Publicado en 08/06/2019</div>
    
                    <div class="card-body">
                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis expedita eos voluptatibus! Vitae in vel nostrum eum dolores officiis non, magni consequuntur nisi sapiente error voluptate magnam, iusto sed culpa. </p>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-default">
                            Editar
                        </button>
                        <button class="btn btn-danger">
                            Eliminar
                        </button>
                    </div>
                </div>
        </div>
    </div>
</div>
@endsection

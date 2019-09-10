@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Postagens</div>

                <button type="button" class="btn btn-labeled btn-success col-2 m-2" onclick="window.location='{{ URL::to('posts/novo') }}'">
                    + Nova
                </button>

                <div class="card-body">
                    <b>|| Adicione aqui uma listagem de postagens, com botão de publicar e remover ||</b>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

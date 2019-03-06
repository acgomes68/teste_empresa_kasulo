@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Seja bem-vindo, {{ auth()->user()->name }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>Sistema de Gerenciamento de Clientes!</p>
                    <p>No momento, estamos com {{ $loggedUsers }} usuário(s) logado(s), contando com você.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

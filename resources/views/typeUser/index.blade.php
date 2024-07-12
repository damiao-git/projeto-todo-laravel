@extends('layout.app')
@section('title', 'Pagina principal')

@section('content')
    <main>
        <div class="container" style="max-width:700px">
            <h1 class="mt-5 mb-3">Tipo de usuário</h1>
            <button type="button" class="btn btn-primary mb-4" data-bs-toggle="modal" data-bs-target="#createTypeModal">
                Criar Usuário
            </button>
            <table class="table table-striped table-hover" id="table_type_user">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Tipo</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($typeUser as $user)
                    <tr>
                    <td id="td_type_id_{{$user->id}}">{{$user->id}}</td>
                    <td id="td_type_name_{{$user->id}}">{{$user->name}}</td>
                    <td>
                        <a href="#" class="btn btn-primary" onClick="return abrirModalEditar('{{$user->id}}');" data-bs-toggle="modal"
                            data-bs-target="#editTypeModal">Editar</a>
                        <a href="#" class="btn btn-danger" onclick="excluirStatus('{{$user->id}}')">Excluir</a>
                    </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
    @include('typeUser.modal.create')
    @include('typeUser.modal.edit')
    @include('typeUser.js')
@endsection

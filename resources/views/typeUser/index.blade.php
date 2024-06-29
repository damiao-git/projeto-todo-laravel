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
                    <tr>
                        <td>#1</td>
                        <td>Admin</td>
                        <td>
                            <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editTypeModal">Editar</a>
                            <a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteTypeModal">Excluir</a>
                        </td>
                    </tr>
                    <tr>
                        <td>#2</td>
                        <td>Gerente</td>
                        <td><a href="#">Editar</a><a href="#">Excluir</a></td>
                    </tr>
                    <tr>
                        <td>#3</td>
                        <td>Funcionario</td>
                        <td><a href="#">Editar</a><a href="#">Excluir</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
    @include('typeUser.modal.create')
    @include('typeUser.modal.edit')
    @include('typeUser.modal.delete')
@endsection

@extends('layout.app')
@section('title', 'Pagina principal')

@section('content')
<main>
    <div class="container" style="max-width:700px">
        <h1 class="mt-5 mb-3">Status</h1>
        <button type="button" class="btn btn-primary mb-4" data-bs-toggle="modal" data-bs-target="#createStatusModal">
            Criar Status
        </button>
        <table class="table table-striped table-hover" id="table_status_todo">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Status</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>#1</td>
                    <td>À fazer</td>
                    <td>
                        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editStatusModal">Editar</a>
                        <a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteStatusModal">Excluir</a>
                    </td>
                </tr>
                <tr>
                    <td>#2</td>
                    <td>Fazendo</td>
                    <td><a href="#">Editar</a><a href="#">Excluir</a></td>
                </tr>
                <tr>
                    <td>#3</td>
                    <td>Finalizado</td>
                    <td><a href="#">Editar</a><a href="#">Excluir</a></td>
                </tr>
            </tbody>
        </table>
    </div>
</main>
@include('status.modal.create')
@include('status.modal.edit')
@include('status.modal.delete')
@endsection
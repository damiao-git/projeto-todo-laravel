@extends('layout.app')
@section('title', 'Pagina principal')

@section('content')
    <main>
        <div class="container" style="max-width:700px">
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <h1 class="mt-5 mb-3">Status</h1>
            <button type="button" class="btn btn-primary mb-4" data-bs-toggle="modal" data-bs-target="#createStatusModal">
                Criar Status
            </button>
            <table class="table table-striped table-hover" id="table_status_todo">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($status as $stats)
                        <tr data-id="{{ $stats->id }}">
                            <td id="td_status_id_{{ $stats->id }}" data-value="{{ $stats->id }}">{{ $stats->id }}</td>
                            <td id="td_status_name_{{ $stats->id }}" data-value="{{ $stats->name }}">{{ $stats->name }}</td>
                            <td class="d-flex justify-content-end gap-2">
                                <a href="#" class="btn btn-primary" onClick="return abrirModalEditar('{{ $stats->id }}');" data-bs-toggle="modal"
                                    data-bs-target="#editStatusModal">Editar</a>
                                <a href="#" class="btn btn-danger" onclick="excluirStatus({{ $stats->id }})">Excluir</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
    @include('status.modal.create')
    @include('status.modal.edit')
    @include('status.js')
@endsection

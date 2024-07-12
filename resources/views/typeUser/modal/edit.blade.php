<form action="#">
    @csrf
    @method('PUT')
    <div class="modal fade" id="editTypeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Tipo de Usuario</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label for="type">Tipo de Usuario</label>
                    <input type="hidden" name="type_edit_" id="type_id_edit_">
                    <input type="text" name="type_edit_" id="type_edit_">
                    <button type="submit" class="btn btn-primary" onclick="editarType()">Editar</button>
                </div>
            </div>
        </div>
    </div>
</form>

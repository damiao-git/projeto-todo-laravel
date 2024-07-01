<form action="#">
  @csrf
  @method('PUT')
    <div class="modal fade" id="editStatusModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Editar status da tarefa</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <label for="type">Status</label>
              <input type="text" name="status_edit_" id="status_edit_" value="">
              <input type="hidden" name="status_id_edit_" id="status_id_edit_" value="">
              <button type="submit" class="btn btn-primary" onclick="editarStatus()">Editar</button>
            </div>
          </div>
        </div>
      </div>
</form>
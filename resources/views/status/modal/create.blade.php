<form id="formStatus" onsubmit="criarStatus(event)" method="post">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <div class="modal fade" id="createStatusModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
              <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Criar status da tarefa</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <label for="status">Status</label>
                  <input type="text" name="nome" id="status" value="">
              </div>
              <div class="modal-footer">
                  <button type="submit" class="btn btn-primary">Salvar</button>
              </div>
          </div>
      </div>
  </div>
</form>
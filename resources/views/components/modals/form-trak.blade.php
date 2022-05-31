<div class="modal fade" id="modal-form-trak" tabindex="-1" aria-labelledby="modalFormTrak" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">{{ $title }}</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="">
                <div class="mb-3">
                    <label for="number" class="form-label">Número da Faixa</label>
                    <input type="number" class="form-control" name="number">
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label">Título</label>
                    <input type="text" class="form-control" name="title">
                </div>
                <div class="mb-3">
                    <label for="duration" class="form-label">Duração</label>
                    <input type="number" class="form-control" name="duration">
                </div>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
          <button type="button" class="btn btn-primary">Salvar</button>
        </div>
      </div>
    </div>
</div>
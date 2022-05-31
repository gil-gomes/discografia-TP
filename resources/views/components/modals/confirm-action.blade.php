<div class="modal fade" id="modal-delete" tabindex="-1" aria-labelledby="modalDelete" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Confirmação Ação</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          {{ $message}}
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
          <form action="{{ route('album.delete', $id) }}" method="POST">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger ml-5">
                    Confirmar
                </button>
            </form>
        </div>
      </div>
    </div>
</div>
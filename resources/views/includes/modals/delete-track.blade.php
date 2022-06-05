<form action="{{ route('album.track.delete', ['album_id' => $album->id, 'track_id' => $track->id]) }}" method="POST">
    @method('delete')
    @csrf

    <div class="modal fade" id="delete-track-{{ $track->id }}" tabindex="-1" aria-labelledby="modalDeleteTrack" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Confirmação ação</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              Deseja excluir a faixa {{ $track->title }}?
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
              <button type="submit" class="btn btn-primary ml-5">
                Confirmar
            </button>
            </div>
          </div>
        </div>
    </div>

</form>
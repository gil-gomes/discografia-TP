<section class="list-tracks">
@if($album->tracks->count() > 0)
<table class="table table-borderless">
    <thead class="text-center">
        <tr>
            <th scope="col">Nº</th>
            <th scope="col">Faixa</th>
            <th scope="col">Duração</th>
            <th scope="col">Ações</th>
        </tr>
    </thead>

@foreach ($album->tracks as $track)

    <div class="tracks">

        <tbody class="text-center">
            <tr>
                <th scope="row">{{ $track->number }}</th>
                <td>{{ $track->title }}</td>
                <td>{{ $track->duration }}</td>
                <td>
                    <a href="{{ route('album.track.player',$track->id) }}"class="play-track btn btn-warning" target="_blank">
                        <i class="fa-solid fa-play"></i>
                    </a>
                    <button class="btn btn-danger"data-toggle="modal" data-bs-toggle="modal" data-bs-target="#modal-delete" ata-bs-toggle="tooltip" data-bs-placement="top" title="Excluir Faixa">
                        <i class="fa-solid fa-trash-can"></i>
                    </button>
                    <x-modals.confirm-action message="Excluir Faixa {{ $track->title }}">
                        <form action="{{ route('album.track.delete', ['album_id' => $album->id, 'track_id' => $track->id]) }}" method="POST">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-primary ml-5">
                                Confirmar
                            </button>
                        </form>
                    </x-modals.confirm-action>
                </td>
            </tr>
            <audio controls id="audio" class="d-none">
                <source src="data:audio/mpeg;base64,{{ $track->getBase64Track($track->id) }}"/>
            </audio>
        </tbody>

    </div>

@endforeach

</table>
@else
<p class="text-center">Álbum sem Faixas</p class="text-center">
@endif
</section>
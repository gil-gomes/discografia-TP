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
                <td>{{ $track->getDurationFormated($track->duration) }}</td>
                <td>
                    <a href="{{ route('album.track.player',$track->id) }}"class="play-track btn btn-warning" target="_blank">
                        <i class="fa-solid fa-play"></i>
                    </a>
                    <button class="btn btn-danger"data-toggle="modal" data-bs-toggle="modal"
                    data-bs-target="#delete-track-{{ $track->id }}" ata-bs-toggle="tooltip" data-bs-placement="top" title="Excluir Faixa">
                        <i class="fa-solid fa-trash-can"></i>
                    </button>
                    @include('includes.modals.delete-track')
                </td>
            </tr>
        </tbody>

    </div>

@endforeach

</table>
@else
<p class="text-center">Álbum sem Faixas</p class="text-center">
@endif
</section>
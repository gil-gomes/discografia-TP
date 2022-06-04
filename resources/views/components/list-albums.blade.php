<section class="list-albums mt-5">
    @foreach ($albums as $album)

        <div class="album mb-5">
            <div class="d-flex align-items-center justify-content-between">
                <div class="album-details">
                    <a href="{{ route('album.show', $album->id) }}" class="text-dark">
                            <h5>
                                <strong>
                                    Album: {{ $album->name }}, {{ date('Y', strtotime($album->launch)) }}
                                </strong>
                            </h5>
                    </a>
                    <span>Gravadora: {{ $album->record_company }}</span>
                </div>
                
                <div class="ml-10">  
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-bs-toggle="modal" data-bs-target="#modal-delete" data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Excluir Álbum">
                        <i class="fa-solid fa-trash-can"></i>
                    </button>
                    <x-modals.confirm-action message="Excluir o Álbum {{ $album->name }}">
                        <form action="{{ route('album.delete', $album->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger ml-5">
                                Confirmar
                            </button>
                        </form>
                    </x-modals.confirm-action>
                </div>
            </div>

            @if(count($album->tracks) > 0)
                <table class="table table-borderless">
                    <thead class="text-center">
                    <tr>
                        <th scope="col">Nº</th>
                        <th scope="col">Faixa</th>
                        <th scope="col">Duração</th>
                    </tr>
                    </thead>

                @foreach ($album->tracks as $track)

                    <div class="tracks">
                        <tbody class="text-center">
                        <tr>
                            <th scope="row">{{ $track->number }}</th>
                            <td>{{ $track->title }}</td>
                            <td>{{ $track->duration }}</td>
                        </tr>
                        </tbody>
                    </div>

                @endforeach

                </table>
            @else
                <p class="text-center">Álbum sem Faixas</p class="text-center">
            @endif
            
            <hr>

        </div>

    @endforeach

    @if ($albums->links())
    <div class="link-paginate d-flex justify-content-center">
        {{ $albums->links() }}
    </div>
    @endif
</section>
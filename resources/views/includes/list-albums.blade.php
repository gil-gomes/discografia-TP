<section class="list-albums mt-5">
    @foreach ($albums as $key => $album)

        <div class="album mb-5">
            <div class="d-flex align-items-center justify-content-between">
                <div class="album-details col-8 col-md-10">
                    <a href="{{ route('album.show', $album->id) }}" class="text-dark">
                            <h5>
                                <strong>
                                    Album: {{ $album->name }}, {{ date('Y', strtotime($album->launch)) }}
                                </strong>
                            </h5>
                    </a>
                    <span>Gravadora: {{ $album->record_company }}</span>
                </div>
                
                <div class="">
                    <a href="{{ route('album.edit', $album->id)}}"class="btn btn-secondary"ata-bs-toggle="tooltip"
                        data-bs-placement="top"
                        title="Editar Álbum">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </a>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-bs-toggle="modal" data-bs-target="#delete-album-{{ $album->id }}" data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Excluir Álbum">
                        <i class="fa-solid fa-trash-can"></i>
                    </button>
                    
                    @include('includes.modals.delete-album')
                    
                </div>
            </div>

            @if(count($album->tracks) > 0)
                <table class="table table-tracks table-borderless">
                    <thead>
                        <tr class="d-flex">
                            <th class="w-80p" scope="col">Nº</th>
                            <th class="w-80p" class="" scope="col">Faixa</th>
                            <th class="ml-auto w-80p" scope="col">Duração</th>
                        </tr>
                    </thead>     

                @foreach ($album->tracks as $track)
                    
                    <tbody>
                        <tr class="d-flex">
                            <th class="w-80p" scope="row">{{ $track->number }}</th>
                            <td class="w-80p" class="">{{ $track->title }}</td>
                            <td class="p-2 ml-auto w-80p">{{ $track->getDurationFormated($track->duration) }}</td>
                        </tr>
                    </tbody>
                    <tbody>
                        
                    </tbody>

                @endforeach

                </table>
            @else
                <p class="text-center">Álbum sem Faixas</p class="text-center">
            @endif
            
            <hr>

        </div>

    @endforeach
</section>
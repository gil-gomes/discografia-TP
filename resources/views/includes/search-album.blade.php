<section class="search">
    <header class="search-header d-flex justify-content-between w-100 mb-3">
        <div class="">
            <h3>Pesquise por um Álbum</h3>
        </div>

        <div class="ml-10">
            <a href="{{ route('album.create') }}" class="btn btn-primary" data-bs-toggle="tooltip" data-toggle="tooltip" title="Adicionar novo Álbum">
                <i class="fa-solid fa-plus"></i>
            </a>
        </div>
    </header>

    <form action="{{ route('album.search') }}">
        <div class="d-flex justify-content-between">
            <div class="w-90">
                <input type="text" class="form-control input-search" name="search" placeholder="Busca" onkeydown="btnSearchDisabled()">
            </div>

            <div class="">
                <button type="submit" class="btn btn-primary btn-search" disabled>
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </div>
        </div>
    </form>
</section>
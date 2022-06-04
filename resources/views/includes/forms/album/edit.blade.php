<div class="mb-3">
    <label for="name" class="form-label">Nome</label>
    <input type="text" class="form-control" name="name" placeholder="Nome do Álbum" value="{{ $album->name }}">
</div>

<div class="mb-3">
    <label for="launch" class="form-label">Data de Lançamento</label>
    <input type="date" class="form-control" name="launch" value="{{ $album->launch }}">
</div>

<div class="mb-5">
    <label for="record-company" class="form-label">Gravadora</label>
    <input type="text" class="form-control" name="record_company" placeholder="Nome da Gravadora"
    value="{{ $album->record_company }}">
</div>
<div class="mb-3">
    <label for="number" class="form-label">Número da Faixa</label>
    <input type="number" class="form-control" name="number" value="{{ $track->number }}">
</div>
<div class="mb-3">
    <label for="title" class="form-label">Título</label>
    <input type="text" class="form-control" name="title" value="{{ $track->title }}">
</div>
<div class="mb-3">
    <label for="duration" class="form-label">Duração</label>
    <input type="number" step="any" class="form-control" name="duration" value="{{ $track->duration }}">
</div>
<div class="mb-5">
    <label for="track_file" class="form-label">Arquivo</label>
    <input class="form-control form-control-sm" id="inputTrack" type="file" name="track_file" accept=".mp3">
</div>
<input class="form-control d-none" type="text" value="{{ $track->file_name}}">
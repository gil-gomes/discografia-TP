<div class="mb-3">
    <label for="number" class="form-label">Número da Faixa</label>
    <input type="number" class="form-control" name="number" value="{{ old('number') }}">
</div>
<div class="mb-3">
    <label for="title" class="form-label">Título</label>
    <input type="text" class="form-control" name="title" value="{{ old('title') }}">
</div>
<div class="mb-3">
    <label for="duration" class="form-label">Duração</label>
    <input type="number" step="any" class="form-control" name="duration" value="{{ old('duration') }}">
</div>
<div class="mb-5">
    <label for="track_file" class="form-label">Arquivo</label>
    <input class="form-control form-control-sm" id="inputTrack" type="file" name="track_file" accept=".mp3"
    onchange="test(event)">
</div>
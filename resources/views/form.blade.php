<!-- resources/views/superheroes/form.blade.php -->

<div>
    <label for="real_name">Nombre real:</label>
    <input type="text" name="real_name" id="real_name" value="{{ isset($superhero) ? $superhero->real_name : old('real_name') }}">
</div>
<div>
    <label for="superhero_name">Nombre de superhéroe:</label>
    <input type="text" name="superhero_name" id="superhero_name" value="{{ isset($superhero) ? $superhero->superhero_name : old('superhero_name') }}">
</div>
<div>
    <label for="photo_url">URL de la foto:</label>
    <input type="text" name="photo_url" id="photo_url" value="{{ isset($superhero) ? $superhero->photo_url : old('photo_url') }}">
</div>
<div>
    <label for="additional_info">Información adicional:</label>
    <textarea name="additional_info" id="additional_info" rows="4">{{ isset($superhero) ? $superhero->additional_info : old('additional_info') }}</textarea>
</div>

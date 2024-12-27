@extends('base')
@section ('main')
<h3 class="mb-3">Modification d'un livre</h3>
<form>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">titre</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="titre de livre ">
</div>
<div class="mb-3">
<label for="exampleFormControlInput1" class="form-label">auteur de livre </label>
<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="auteur de livre ">
  </div>
<div class="mb-3">
<label for="exampleFormControlInput1" class="form-label">nombres de pages  </label>
<input type="number" class="form-control" id="exampleFormControlInput1" placeholder="nombres de pages  ">
  </div>
<div class="mb-3">
<label for="exampleFormControlInput1" class="form-label">prix  </label>
<input type="number" class="form-control" id="exampleFormControlInput1" placeholder="prix de livre   ">
  </div>
  <div class="mb-3">
  <input type="submit" value ="enregistrer" class="btn btn-primary">
</div>

</form>
@endsection
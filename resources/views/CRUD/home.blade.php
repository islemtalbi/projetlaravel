@extends('base')
@section ('main')
<h3 class="mb-3">liste des livres</h3>
<table class="table">
  <thead>
    <tr>
    <th scope="col"># </th>
      <th scope="col">titre</th>
      <th scope="col">auteur</th>
      <th scope="col">nombres de pages</th>
      <th scope="col">prix</th>
      <th scope="col">Actions</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>
        <a href="#" class="btn btn-primary"> Modifier</a>
        <a href="#" class="btn btn-danger"> Supprimer</a>
        </td>
    </tr>
    
  </tbody>
</table>
@endsection
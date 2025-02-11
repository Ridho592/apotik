<!-- perpanjangan dari master yang tidak berubah -->
@extends('master') 
@section('content')


<div class="container mt-3">
<div class="row">    
<div class="col-sm-8">  
  
  <button type="button" class="btn btn-primary">Buat Baru</button><br><br>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th> 
        <th scope="col">Aksi</th> 
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        <td><button type="button" class="btn btn-primary">Edit</button> <button type="button" class="btn btn-primary">Delete</button></td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
        <td><button type="button" class="btn btn-primary">Edit</button> <button type="button" class="btn btn-primary">Delete</button></td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td colspan="2">Larry the Bird</td>
        <td>@twitter</td>
        <td><button type="button" class="btn btn-primary">Edit</button> <button type="button" class="btn btn-primary">Delete</button></td>
      </tr>
    </tbody>
  </table>



</div>

@endsection
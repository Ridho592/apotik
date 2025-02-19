<!-- perpanjangan dari master yang tidak berubah -->
@extends('master')
@section('content')

<div class="container">
    <form action="{{ route("user.update", $user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3 mt-3">
        <label for="name" class="form-label">Nama Pengguna</label>
        <input type="text" class="form-control" id="name" placeholder="masukkan nama pengguna" name="name" value="{{ $user->name }}">
        </div>


        <div class="mb-3 mt-3 col-md-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control " id="email" placeholder="masukkan email" name="email" value="{{ $user->email }}">
        </div>


        <div class="mb-3 mt-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" placeholder="masukkan password" name="password">
        </div>

    <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>
@endsection

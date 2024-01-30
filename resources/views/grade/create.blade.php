@extends('layout.main')

@section('content')

<h1>New Data Kelas</h1>

<form method="post" action="/grade/add">
  @csrf

  <div class="mb-3">
    <label for="nama" class="form-label">Nama</label>
    <input type="text" name="nama" class="form-control" id="nama"value="{{ old('nama') }}">
  </div>


<button type="submit" class="btn btn-primary">Add</button>

</form>


@endsection
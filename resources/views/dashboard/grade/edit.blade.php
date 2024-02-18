@extends('layout.main')

@section('content')

<h1>Edit Data Kelas</h1>

<form method="post" action="/grade/update/{{$grades->id}}">
  @csrf

  <div class="mb-3">
    <label for="nama" class="form-label">Nama</label>
    <input type="text" name="nama" class="form-control" id="nama"value="{{ $grades->nama }}">
  </div>


<button type="submit" class="btn btn-primary">Submit</button>

</form>


@endsection
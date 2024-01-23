@extends("layout.main")

@section('content')
<h1>Detail Siswa</h1>

<form>
  <div class="mb-3">
    <label for="nis" class="form-label">NIS</label>
    <input type="text" class="form-control" id="nis" value="{{ $student->nis }}" disabled>
  </div>
  <div class="mb-3">
    <label for="nama" class="form-label">Nama</label>
    <input type="text" class="form-control" id="nama" value="{{ $student->nama }}" disabled>
  </div>
  <div class="mb-3">
    <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
    <input type="text" class="form-control" id="tgl_lahir" value="{{ $student->tgl_lahir }}" disabled>
  </div>
  <div class="mb-3">
    <label for="kelas" class a="form-label">Kelas</label>
    <input type="text" class="form-control" id="kelas" value="{{ $student->kelas }}" disabled>
  </div>
  <div class="mb-3">
    <label for="alamat" class="form-label">Alamat</label>
    <input type="text" class="form-control" id="alamat" value="{{ $student->alamat }}" disabled>
  </div>

<a href="/student" class="btn btn-primary">Back</a>

</form>


@endsection
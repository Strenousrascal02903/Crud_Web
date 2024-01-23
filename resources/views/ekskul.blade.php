@extends("layout.main")
@php
$no = 1
@endphp

@section('content')
<h2>Ekstrakurikuler</h2>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Nomor</th>
      <th scope="col">Nama</th>
      <th scope="col">Pembina</th>
      <th scope="col">Deskripsi</th>
    </tr>
  </thead>
  <tbody>
    @foreach($ekstracurriculer as $ekskul)
            <tr>
              <th scope="row">{{$no++}}</th>
              <td>{{$ekskul['nama']}}</td>
              <td>{{$ekskul['nama_pembina']}}</td>
              <td>{{$ekskul['deskripsi']}}</td>
            </tr>
         @endforeach
  </tbody>
</table>
@endsection

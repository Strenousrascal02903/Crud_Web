@extends("layout.main")

@section('content')

<h2>Hi {{ auth()->user()->name ?? "Tamu , silahkan daftar atau login terlebih dahulu" }}</h2>
@endsection
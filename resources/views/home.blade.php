@extends("layout.main")

@section('content')

<h2>Hi ,{{ auth()->user()->name ?? " Silahkan daftar atau login terlebih dahulu" }}</h2>
@endsection
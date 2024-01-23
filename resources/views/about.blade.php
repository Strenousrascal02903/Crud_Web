@extends("layout.main")

@section('content')
<h2>
  About Me  
</h2>



<div class="row mt-4">
    <div class="col-md-4">
        <div class="card" style="width: 18rem;">
            <img src="{{URL($foto)}}" class="card-img-top" alt="Foto Profil">
            <div class="card-body">
                <h5 class="card-title">{{$nama}}</h5>
                <p class="card-text">{{$kelas}}</p>
            </div>
        </div>
    </div>
</div>


@endsection
@extends("layout.main")

@section('content')

<style>
    body {
        height: 100vh;

        align-items: center;
        justify-content: center;
        background-color: #f8f9fa;
    }

    .form-signin {
        width: 100%;
        max-width: 400px;
        padding: 15px;
        margin: auto;
    }

    .form-floating {
        margin-bottom: 15px;
    }
</style>

<main class="form-signin w-100 m-auto">
    @if (session()->Has('success'))
    <div class="alert alert-success col-lg-12" role="alert">
        {{ session ('success')}}
    </div>
    @endif
    @if (session()->Has('loginError'))
    <div class="alert alert-danger col-lg-12" role="alert">
        {{ session ('loginError')}}
    </div>
    @endif

    <form action="/login" method="POST" id="loginForm">
        @csrf <!-- Add CSRF token for security -->
        <h1 class="h3 mb-3 fw-normal" style="text-align: center;">Login</h1>

        <div class="form-floating">
            <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput" class="text-dark">Email address</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword" class="text-dark">Password</label>
        </div>

       
        <button class="btn btn-primary w-100 py-2" type="submit">Login</button>
        
    </form>
    <p style="text-align: center;">Don't have an account? <a href="/register">Register Now</a></p>
</main>


@endsection
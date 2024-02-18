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

<main class="form-signin">
    <form action="/register" method="POST" id="loginForm">
        @csrf <!-- Add CSRF token for security -->
        <h1 class="h3 mb-3 fw-normal" style="text-align: center;">Register</h1>
        <div class="form-floating">
            <input type="text" class="form-control" name="name" id="floatingInput" placeholder="Name">
            <label for="floatingInput" class="text-dark">Name</label>
        </div>

        <div class="form-floating">
            <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput" class="text-dark">Email address</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword" class="text-dark">Password</label>
        </div>

        
        <button class="btn btn-primary w-100 py-2" type="submit">Register</button>
        
    </form>
    <p style="text-align: center;">Already have an account? <a href="/login">Login Now</a></p>
</main>


@endsection
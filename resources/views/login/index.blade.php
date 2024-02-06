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
    <form action="/home" method="POST" id="loginForm">
        @csrf <!-- Add CSRF token for security -->
        <h1 class="h3 mb-3 fw-normal" style="text-align: center;">Masuk Sekarang</h1>

        <div class="form-floating">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>

        <div class="form-check text-start my-3">
            <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                Remember me
            </label>
        </div>
        <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
        <p style="text-align: center;">Tidak Punya Akun? <a href="/register">Daftar sekarang</a></p>
    </form>
</main>

<script>
    // Add a submit event to the form
    document.getElementById('loginForm').addEventListener('submit', function(event) {
        // Prevent the default form submission
        event.preventDefault();

        // Redirect to /home
        window.location.href = '/';
    });
</script>

@endsection
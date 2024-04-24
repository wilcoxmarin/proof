<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Proof</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <section class="login">
        <div class="login__content">
            <div class="form-login">
                <h1>Welcome Proof</h1>
                <form action="{{ url('/getinto') }}" method="post">
                    @csrf
                    <div class="form-login__input">
                        <label for="">Email</label>
                        <input type="text" name="email" id="email" class="form-control @error('email') is-invalid @enderror">
                        @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-login__input">
                        <label for="">Password</label>
                        <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror">
                        @error('password')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="form-button">Log in</button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>

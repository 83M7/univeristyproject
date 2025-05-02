<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="login">
        <img src="{{ asset('img/logo.png') }}" alt="Logo">
        <h1>Login</h1>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Enter Email" required>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter Password" required>
            <input type="submit" value="Login">
            <a href="{{ route('password.request') }}">Forgot Password?</a>
        </form>
    </div>
</body>
</html>

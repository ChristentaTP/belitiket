@extends('layout.layout')

@section('title', 'Login - belitiket.com')

@section('content')
    <div class="login-container">
        <div class="login-card">
            <h2>Login</h2>

            <form action="{{ route('profile.login.post') }}" method="POST">
                @csrf
                <div>
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" required>
                </div>

                <div>
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" required>
                </div>

                <div>
                    <button type="submit">Login</button>
                </div>
            </form>

        </div>
@endsection

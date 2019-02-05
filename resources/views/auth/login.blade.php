@extends('layouts.auth')

@section('content')
    <div class="column is-two-fifths">
        <div class="card">
            <header class="card-header">
                <h3 class="card-header-title">{{ __('Login') }}</h3>
            </header>

            <div class="card-content">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="field">
                        <label for="email" class="label">{{ __('E-Mail Address') }}</label>
                        <div class="control">
                            <input id="email" type="text" class="input {{ $errors->has('email') ? ' is-danger' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                        </div>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="field">
                        <label for="password" class="label">{{ __('Password') }}</label>
                        <div class="control">
                            <input id="password" type="password" class="input {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="field">
                        <label class="checkbox" for="remember">
                            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            {{ __('Remember Me') }}
                        </label>
                    </div>

                    <div class="field">
                        <div class="control">
                            <button type="submit" class="button is-link">
                                {{ __('Login') }}
                            </button>
                        </div>
                    </div>

                    @if (Route::has('password.request'))
                    <div class="field">
                        <div class="control">
                            <a href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        </div>
                    </div>
                    @endif

                </form>
            </div>
        </div>
    </div>
@endsection

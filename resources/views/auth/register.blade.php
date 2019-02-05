@extends('layouts.auth')

@section('content')
    <div class="column is-two-fifths">
        <div class="card">
            <header class="card-header">
                <h3 class="card-header-title">{{ __('Register') }}</h3>
            </header>

            <div class="card-content">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="field">
                        <label for="name" class="label">{{ __('Name') }}</label>

                        <div class="control">
                            <input id="name" type="text" class="input {{ $errors->has('name') ? 'is-danger' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                        </div>
                        @if ($errors->has('name'))
                            <p class="help is-danger" role="alert">{{ $errors->first('name') }}</p>
                        @endif
                    </div>

                    <div class="field">
                        <label for="email" class="label">{{ __('E-Mail Address') }}</label>

                        <div class="control">
                            <input id="email" type="email" class="input {{ $errors->has('email') ? 'is-danger' : '' }}" name="email" value="{{ old('email') }}" required>
                        </div>
                        @if ($errors->has('email'))
                            <p class="help is-danger" role="alert">{{ $errors->first('email') }}</p>
                        @endif
                    </div>

                    <div class="field">
                        <label for="password" class="label">{{ __('Password') }}</label>

                        <div class="control">
                            <input id="password" type="password" class="input {{ $errors->has('password') ? 'is-danger' : '' }}" name="password" required>
                        </div>
                        @if ($errors->has('password'))
                            <p class="help is-danger" role="alert">{{ $errors->first('password') }}</p>
                        @endif
                    </div>

                    <div class="field">
                        <label for="password-confirm" class="label">{{ __('Confirm Password') }}</label>

                        <div class="control">
                            <input id="password-confirm" type="password" class="input" name="password_confirmation" required>
                        </div>
                    </div>

                    <div class="field">
                        <div class="control">
                            <button type="submit" class="button is-link">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

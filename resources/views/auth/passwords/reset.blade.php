@extends('layouts.auth')

@section('content')
    <div class="column is-two-fifths">
        <div class="card">
            <div class="card-header">
                <h3 class="card-header-title">{{ __('Reset Password') }}</h3>
            </div>

            <div class="card-content">
                <form method="POST" action="{{ route('password.update') }}">
                    @csrf

                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="field">
                        <label for="email" class="label">{{ __('E-Mail Address') }}</label>

                        <div class="control">
                            <input id="email" type="email" class="input {{ $errors->has('email') ? 'is-danger' : '' }}" name="email" value="{{ $email ?? old('email') }}" required autofocus>
                        </div>
                        @if ($errors->has('email'))
                            <span class="help is-danger" role="alert">{{ $errors->first('email') }}</span>
                        @endif
                    </div>

                    <div class="field">
                        <label for="password" class="label">{{ __('Password') }}</label>

                        <div class="control">
                            <input id="password" type="password" class="input {{ $errors->has('password') ? ' is-danger' : '' }}" name="password" required>
                        </div>
                        @if ($errors->has('password'))
                            <span class="help is-danger" role="alert">{{ $errors->first('password') }}</span>
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
                                {{ __('Reset Password') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="columns">
        <div class="column">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-header-title">Dashboard</h3>
                </div>

                <div class="card-content">
                    @if (session('status'))
                        <div class="notification is-danger" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

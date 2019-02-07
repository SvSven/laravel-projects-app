@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="columns">
            <div class="column is-two-fifths">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-header-title">{{ $project->title }}</h3>
                    </div>

                    <div class="card-content">
                        <p>{{ $project->description }}</p>
                    </div>

                    <div class="card-footer">
                        <a href="" class="card-footer-item">Edit</a>
                        <a href="" class="card-footer-item">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

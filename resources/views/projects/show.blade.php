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
                        <a href="{{ $project->url }}/edit" class="card-footer-item">Edit</a>
                        <a class="card-footer-item open-modal" data-target-modal="modal-project-delete">Delete</a>

                        <form action="{{ $project->url }}" method="POST" id="form-project-delete">
                            @csrf
                            @method('DELETE')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


<div class="modal" id="modal-project-delete">
    <div class="modal-background"></div>
    <div class="modal-card is-centered is-vertical-center">
        <header class="modal-card-head">
            <p class="modal-card-title">Please confirm</p>
            <button class="delete close-modal" aria-label="close"></button>
        </header>
        <section class="modal-card-body">
            <p>Are you sure you want to delete this project?</p>
            <p>This action cannot be undone.</p>
        </section>
        <footer class="modal-card-foot">
            <button class="button is-danger" onclick="document.getElementById('form-project-delete').submit()">Delete project</button>
            <button class="button close-modal">Cancel</button>
        </footer>
    </div>
</div>

@endsection

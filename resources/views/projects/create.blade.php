@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="columns is-centered">
            <div class="column is-two-fifths">
                <form class="card" action="{{ route('projects.store') }}" method="POST">
                    @csrf

                    <div class="card-header">
                        <h3 class="card-header-title">Create new project</h3>
                    </div>

                    <div class="card-content">
                        <div class="field">
                            <label for="title" class="label">Title</label>
                            <div class="control">
                                <input
                                    id="title"
                                    name="title"
                                    class="input {{ $errors->has('title') ? 'is-danger' : '' }}"
                                    type="text"
                                    value="{{ old('title') }}"
                                    required>
                            </div>
                        </div>

                        <div class="field">
                            <label for="description" class="label">Description</label>
                            <div class="control">
                                <textarea id="description"
                                    name="description"
                                    class="textarea {{ $errors->has('description') ? 'is-danger' : '' }}"
                                    rows="8"
                                    required>{{ old('description') }}</textarea>
                            </div>
                        </div>

                        <div class="field">
                            <div class="control is-grouped">
                                <button class="button is-link" type="submit">Create</button>
                                <a href="{{ route('projects.index') }}" class="button is-link">Cancel</a>
                            </div>
                        </div>

                        @if($errors->any())
                        <div class="notification is-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection

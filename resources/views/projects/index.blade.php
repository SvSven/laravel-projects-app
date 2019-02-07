@extends('layouts.app')

@section('content')

<div class="container">
    <div class="columns">
        <div class="column is-one-quarter">
            <div class="panel">
                <p class="panel-heading">Projects</p>

                @if($projects->isEmpty())
                    <p class="panel-block">
                        There are no projects yet.
                    </p>
                @else

                    @foreach($projects as $project)
                        <a class="panel-block" href="{{ $project->url }}">
                            {{ $project->title }}
                        </a>
                    @endforeach

                @endif
            </div>
        </div>
    </div>
</div>

@endsection
